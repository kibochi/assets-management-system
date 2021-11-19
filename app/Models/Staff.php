<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Asset;
use App\Models\LeaseAsset;
class Staff extends Model
{
    use HasFactory;
    protected $table = 'staffs';

    protected $primaryKey = 'id';

    protected $fillable = [
        'admin_id','staff_id','firstname','lastname','email','phone','dob','gender','section','role',
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function assets(){
        return $this->hasMany(Asset::class);
    }
    
    public function asset_lease(){
        return $this->belongsTo(LeaseAsset::class);
    }



}
