<?php

namespace App\Controllers;

use App\Models\AnggotaModel;
use CodeIgniter\Controller;

class Anggota extends Controller
{
    protected $helpers = ['url', 'form'];
    protected $anggota;
    protected $rules;

    public function __construct()
    {
        $this->anggota = new AnggotaModel();
        $this->rules = [
            'nama'   => 'required',
            'jenis_kelamin'   => 'required',
            'tanggal_lahir'   => 'required',
            'alamat'   => 'required',
            'tugas'   => 'required',
            'status' => 'required',
        ];
    }

    public function index()
    {
        $data = [
            'DataAnggota'  => $this->anggota->paginate(10),
            'title' => 'List anggota',
            'pager' => $this->anggota->pager,
        ];

        return view('anggota', $data);
    }

    public function tambah()
    {
        return view('tambah');
    }

    public function simpan()
    {
        $data = $this->request->getPost();

        if (! $this->validate($this->rules)) {
            return redirect()->back()->withInput()->with('message', $this->validator->getErrors());
        }

        $this->anggota->insert($data);

        return redirect()->route('Anggota::index')->with('message', 'Sukses tambah data');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit anggota',
            'anggota' => $this->anggota->find($id),
        ];

        return view('edit', $data);
    }

    public function update($id)
    {
        $data = $this->request->getPost();

        if (! $this->validate($this->rules)) {
            return redirect()->back()->withInput()->with('message', $this->validator->getErrors());
        }

        $this->anggota->update($id, $data);

        return redirect()->route('Anggota::index')->with('message', 'Sukses ubah data');
    }

    public function hapus(int $id)
    {
        $this->anggota->delete($id);

        return redirect()->back()->with('message', 'Sukses hapus data');
    }
}
