<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->text('description');            
            $table->string('languages', 255);
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->text('address');
            $table->string('city', 255);
            $table->string('country', 255);
            $table->string('type', 255);
            $table->text('waiver_form_terms');
            $table->text('sub_waiver_form_terms');
            $table->tinyInteger('active');
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
