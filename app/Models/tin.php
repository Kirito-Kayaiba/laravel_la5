<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tin extends Model
{
    protected $table = 'tin';
    protected $primaryKey = 'id';
    protected $dates = ['ngayDang'];
    public $timestamps = [
        'tieuDe',
        'tomTat',
        'urlHinh',
        'ngayDang',
        'noiDung',
        'idLT',
        'xem',
        'noiBat',
        'anHien',
        'tags',
        'lang',
    ];
}
