<?php

namespace App\Controllers;

use App\Models\admin as adminModel;

class admin extends BaseController
{
    protected $admin;
    protected $rules;

    public function __construct()
    {
        $this->admin = new adminModel();
        $this->rules = [
            'nama'   => 'required',
            'status' => 'required',
        ];
    }

    public function index()
    {
        $data = [
            'data'  => $this->admin->paginate('10', 'admin'),
            'title' => 'List admin',
            'pager' => $this->admin->pager,
        ];

        return view('admin/index', $data);
    }

    public function create()
    {
        return view('admin/create', ['title' => 'Tambah admin']);
    }

    public function store()
    {
        $data = $this->request->getPost();

        if (! $this->validateData($data, $this->rules)) {
            return redirect()->back()->with('message', $this->validator->getErrors());
        }

        $this->admin->save($data);

        return redirect()->route('admin::index')->with('message', 'Sukses tambah data');
    }

    public function edit(int $id)
    {
        $data = [
            'title' => 'Edit admin',
            'admin' => $this->admin->find($id),
        ];

        return view('admin/edit', $data);
    }

    public function update(int $id)
    {
        $data = $this->request->getPost();

        if (! $this->validateData($data, $this->rules)) {
            return redirect()->back()->with('message', $this->validator->getErrors());
        }

        $this->admin->update($id, $data);

        return redirect()->route('admin::index')->with('message', 'Sukses ubah data');
    }

    public function destroy(int $id)
    {
        $this->admin->delete($id);

        return redirect()->back()->with('message', 'Sukses hapus data');
    }
}