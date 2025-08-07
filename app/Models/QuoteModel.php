<?php
namespace App\Models;

use CodeIgniter\Model;

class QuoteModel extends Model
{
    protected $table = 'quotes';
    protected $allowedFields = ['name', 'email', 'service'];
}