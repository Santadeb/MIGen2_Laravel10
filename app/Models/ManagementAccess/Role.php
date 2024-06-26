<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    //use HasFactory;
    use SoftDeletes;
    //deklarasi tabel
    public $table = 'role';
    //tipe data harus yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    protected $fillable = [
        'title',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    public function permission_role() {
        return $this->hasMany('App\Models\ManagementAccess\PermissionRole', 'role_id');
    }
    
    public function role_user() {
        return $this->hasMany('App\Models\ManagementAccess\RoleUser', 'role_id');
    }
}