<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ConfigPayment extends Model
{
    //use HasFactory;
    use SoftDeletes;
    //deklarasi tabel;
    public $table ='config_payment';
    //tipe data harus yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'updated_at',
        'daleted_at'
    ];

    protected $fillable = [
        'fee',
        'vat',
        'created_at',
        'updated_at',
        'deteled_at'
    ];
}