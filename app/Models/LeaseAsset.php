<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Staff;
use App\Models\Asset;

class LeaseAsset extends Model
{
    use HasFactory;
    protected $table = "lease_assets";

    protected $primaryKey = "id";


    protected $fillable = [
        'admin_id','asset_id','staff_id','leased_by','lease_date'
    ];


    public function staffs(){
        return $this->hasMany(Staff::class)
    }

    public function Assets(){
        return $this->hasMany(Asset::class)
    }




}
