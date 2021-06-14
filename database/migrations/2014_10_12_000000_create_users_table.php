<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name',255);
            $table->string('last_name',255);
            $table->string('name');
            $table->string('gender',255);
            $table->date('date_of_birth');
            $table->string('mobile_number',255);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password',255);
            $table->string('primary_role',255);
            $table->string('city',255);
            $table->string('country',255);
            $table->rememberToken();
            $table->timestamps();
        //    $table->timestamp('deleted_at')->nullable();
        });

/*        Schema::table('users', function ($table) {
            $table->string('first_name')->after('id');
            $table->string('last_name')->after('first_name');
            $table->renameColumn('name', 'username')->after('last_name');
            $table->string('gender')->after('last_name');
            $table->date('date_of_birth')->after('gender');
            $table->string('mobile_number')->after('email_verified_at');
            $table->string('mobile_verification_code')->after('mobile_number');
            $table->timestamp('mobile_verified_at')->nullable()->after('mobile_verification_code');
            $table->string('primary_role')->after('mobile_verified_at');
            $table->string('city')->after('primary_role');
            $table->string('country')->after('city');
        //    $table->string('remember_token')->after('country');
         //   $table->timestamp('deleted_at')->nullable()->after('updated_at');           
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
        
  /*      Schema::table('users', function($table) {
            $table->dropColumn('first_name');
            $table->dropColumn('last_name');
         //   $table->dropColumn('username');
            $table->dropColumn('gender');
            $table->dropColumn('date_of_birth');
            $table->dropColumn('mobile_number');
            $table->dropColumn('mobile_verification_code');
            $table->dropColumn('mobile_verified_at');
            $table->dropColumn('mobile_verification_code');
            $table->dropColumn('primary_role');
            $table->dropColumn('city');
            $table->dropColumn('country');
        //    $table->dropColumn('remember_token');
        //    $table->dropColumn('deleted_at');
        });*/
    }
}
