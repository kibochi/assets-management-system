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
            $table->bigInteger('admin_id');
            $table->string('asset_id');
            $table->string('staff_id');
            $table->string('leased_by');
            $table->string('leased_date');
            $table->boolean('isReturned')->default(0);
            $table->timestamps();

            
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
