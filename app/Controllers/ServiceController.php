<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\QuoteModel;

class ServiceController extends BaseController
{
    public function index()
    {
        return view('pages/v_service');
    }

        public function submit()
    {
        $quoteModel = new QuoteModel();

        $data = [
            'name'    => $this->request->getPost('name'),
            'email'   => $this->request->getPost('email'),
            'service' => $this->request->getPost('service'),
        ];

        $quoteModel->insert($data);

        return redirect()->to(base_url('service'))->with('success', 'Terima kasih! Data Anda telah tersimpan.');
    }

}