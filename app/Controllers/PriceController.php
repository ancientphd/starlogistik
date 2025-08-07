<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\PaketModel;
use App\Models\OrderModel;

class PriceController extends BaseController
{
    public function index()
    {
        $paketModel = new PaketModel();
        $data['paket'] = $paketModel->findAll();
        return view('pages/v_price', $data);
    }

    public function form($slug)
{
    if (!session()->get('user_id')) {
        return redirect()->to (base_url('login'))->with('error', 'Silakan login terlebih dahulu untuk memesan.');
    }

    $paketModel = new PaketModel();
    $paket = $paketModel->where('slug', $slug)->first();

    if (!$paket) {
        return redirect()->to(base_url('price'))->with('error', 'Paket tidak ditemukan.');
    }

    return view('pages/order_form', ['paket' => $paket]);
}

public function save()
{
    $orderModel = new OrderModel();

    $data = [
        'user_id' => session()->get('user_id'), // pastikan sudah login
        'paket_id' => $this->request->getPost('paket_id'),
        'catatan' => $this->request->getPost('catatan'),
        'tanggal_order' => date('Y-m-d'),
        'status' => 'pending',
        'created_at' => date('Y-m-d H:i:s')
    ];

    $orderModel->insert($data);
    return redirect()->to(base_url('price'))->with('success', 'Order berhasil dikirim.');
}
}