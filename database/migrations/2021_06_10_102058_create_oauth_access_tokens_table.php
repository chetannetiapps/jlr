<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOauthAccessTokensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oauth_access_tokens', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

         Schema::table('oauth_access_tokens', function($table) {
            $table->bigInteger('user_id')->after('id'); 
            $table->integer('client_id')->after('user_id'); 
            $table->string('name')->after('client_id'); 
            $table->text('scopes')->after('name'); 
            $table->tinyInteger('revoked')->after('scopes'); 
             $table->dateTime('expires_at')->after('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oauth_access_tokens');
    }
}
