<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Asset;
class Staff extends Model
{
    use HasFactory;
    protected $table = 'staffs';

    protected $primaryKey = 'id';

    protected $fillable = [
        'admin_id','staff_id','firstname','lastname','email','phone','dob','gender',
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function assets(){
        return $this->hasMany(Asset::class);
    }


}
