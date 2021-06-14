<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->id();     
            $table->timestamps();
             $table->bigInteger('role_id')->nullable();
            $table->bigInteger('module_id')->nullable();
            $table->tinyInteger('enabled');
            $table->tinyInteger('create');
            $table->tinyInteger('read');
            $table->tinyInteger('update');
            $table->tinyInteger('delete');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permissions');
    }
}
