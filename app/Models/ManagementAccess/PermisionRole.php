<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PermisionRole extends Model
{
    //use HasFactory;
    use SoftDeletes;
    //deklarasi tabel
    public $table = 'permission_role';
    //tipe data harus yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    public function permission() {
        return $this->belongsTo('App\Models\ManagementAccess\Permission', 'permission_id', 'id');
    }
    
    public function role() {
        return $this->belongsTo('App\Models\ManagementAccess\Role', 'role_id', 'id');
    }
}