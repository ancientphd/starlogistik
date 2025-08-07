<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PrivacyController extends BaseController
{
    public function index()
    {
        return view('pages/v_privacy');
    }
}
