<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\QuoteModel;

class AdminQuoteController extends BaseController
{
    protected $quote;

    public function __construct()
    {
        $this->quote = new QuoteModel();
    }

    public function index()
    {
        $data['quotes'] = $this->quote->findAll();
        return view('admin/v_kelolaquote', $data);
    }

    public function delete($id)
    {
        $this->quote->delete($id);
        session()->setFlashdata('success', 'Data quote berhasil dihapus.');
        return redirect()->to(base_url('admin/quote'));
    }
}
