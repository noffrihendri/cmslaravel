<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Muser_role extends Model
{
    protected $table = "user_role";

    protected $fillable = [
        'role_name','is_active','created_by', 'updated_by'
    ];

    protected $primaryKey = 'role_id';
   // protected $primarykey = 'role_id';


    protected $casts = [
        'created_at' => 'datetime',
    ];

    public $timestamps = true;

}
