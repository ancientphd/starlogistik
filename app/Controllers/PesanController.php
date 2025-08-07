<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ContactModel;
class PesanController extends BaseController
{
    protected $contact;

    public function __construct()
    {
        $this->contact = new ContactModel();
    }

    public function index()
    {
        $data['pesan'] = $this->contact->orderBy('created_at', 'DESC')->findAll();
        return view('admin/v_pesan', $data);
    }
    
    public function delete($id)
    {
        if (session()->get('role') !== 'admin') {
            return redirect()->to(base_url('login'));
        }

        $this->contact->delete($id);
        return redirect()->to(base_url('admin/pesan'))->with('success', 'Pesan berhasil dihapus');
    }
}