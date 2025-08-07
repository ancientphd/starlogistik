<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model
{
    protected $table      = 'kontak';
    protected $primaryKey = 'id';

    protected $allowedFields = ['nama', 'email', 'telepon', 'kategori', 'pesan', 'created_at'];
}
