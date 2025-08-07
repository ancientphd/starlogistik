<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\ContactModel;

class ContactController extends BaseController
{
    public function index()
    {
        return view('pages/v_contact');
    }

    public function simpan()
    {
        $ContactModel = new ContactModel();

        $ContactModel->save([
            'nama'      => $this->request->getPost('nama'),
            'email'     => $this->request->getPost('email'),
            'telepon'   => $this->request->getPost('telepon'),
            'kategori'  => $this->request->getPost('kategori'),
            'pesan'     => $this->request->getPost('pesan'),
            'created_at'=> date('Y-m-d H:i:s'),
        ]);

        return redirect()->to(base_url('contact'))->with('success', 'Pesan berhasil dikirim!');
    }
}