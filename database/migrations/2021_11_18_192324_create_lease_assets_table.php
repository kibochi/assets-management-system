<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeaseAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lease_assets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('admin_id');
            $table->unsignedBigInteger('asset_id');
            $table->unsignedBigInteger('staff_id');
            $table->string('lease_date');
            $table->string('quantity');
            $table->boolean('status')->default(0);
            $table->timestamps();
         
            $table->foreign('admin_id')->references('id')->on('users');
            $table->foreign('staff_id')->references('id')->on('staffs');
            $table->foreign('asset_id')->references('id')->on('assets');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lease_assets');
    }
}
