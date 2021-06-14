<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('event_id')->nullable();
            $table->string('registration_code',255);
            $table->string('preferred_language',255);
            $table->string('preferred_showroom',255);
            $table->string('callback_requested',255);
            $table->string('current_car',255);
            $table->tinyInteger('potential_buyer');
            $table->dateTime('potential_buy_year');
            $table->string('emergency_name',255);
            $table->string('emergency_phone',255);
            $table->string('emergency_email',255);
            $table->string('registration_type',255);
            $table->string('heard_about_event',255);
            $table->string('preferred_car',255);
            $table->integer('family_members_count');
            $table->integer('participant_count');
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
        Schema::dropIfExists('registrations');
    }
}
