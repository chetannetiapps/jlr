<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMobileVerificationCodeInUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('email_verification_code')->after('email_verified_at');
            $table->string('mobile_verification_code')->after('email_verification_code');
            $table->timestamp('mobile_verified_at')->nullable()->after('mobile_verification_code');
             $table->timestamp('deleted_at')->nullable()->after('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
             $table->dropColumn('email_verification_code');
             $table->dropColumn('mobile_verification_code');
             $table->dropColumn('mobile_verified_at');
             $table->dropColumn('deleted_at');
        });
    }
}
