<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SampahModel extends Model
{
    use HasFactory;
    protected $table = 'sampah_bank';
    protected $primaryKey = 'id';
    public $incrementing = false;

    protected $guarded = [];
}
