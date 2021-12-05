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
        'admin_id','asset_id','staff_id','lease_date','quantity',
    ];


    public function staff(){
        return $this->belongsTo(Staff::class, 'staff_id');
    }

    public function asset(){
        return $this->belongsTo(Asset::class, 'asset_id');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }





}
