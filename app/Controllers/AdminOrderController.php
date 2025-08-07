<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\OrderModel;

class AdminOrderController extends BaseController
{
    protected $orderModel;

    public function __construct()
    {
        $this->orderModel = new OrderModel();
    }

    public function index()
    {
        $data['orders'] = $this->orderModel->findAll();
        return view('admin/v_kelolaorder', $data);
    }

    public function delete($id)
    {
        $this->orderModel->delete($id);
        session()->setFlashdata('success', 'Order berhasil dihapus.');
        return redirect()->to(base_url('admin/order'));
    }
}
