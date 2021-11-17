<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Asset extends Model
{
    use HasFactory;

    protected $table = "assets";
    protected $primaryKey = "id";
    protected $fillable = 
    [
        'admin_id','asset_name','tag_id','category','purchase_date',
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }

}
