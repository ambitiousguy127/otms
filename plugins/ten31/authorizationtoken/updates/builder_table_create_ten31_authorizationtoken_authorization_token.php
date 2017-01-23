<?php namespace Ten31\AuthorizationToken\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTen31AuthorizationtokenAuthorizationToken extends Migration
{
    public function up()
    {
        Schema::create('ten31_authorizationtoken_authorization_token', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id')->unsigned();
            $table->string('app_key')->nullable();
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->string('access_token')->nullable();
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ten31_authorizationtoken_authorization_token');
    }
}
