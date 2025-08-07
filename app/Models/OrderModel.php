<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{
    protected $table = 'orders';
    protected $allowedFields = ['user_id', 'paket_id', 'catatan', 'tanggal_order', 'status', 'created_at', 'updated_at'];
    protected $useTimestamps = false;
}
