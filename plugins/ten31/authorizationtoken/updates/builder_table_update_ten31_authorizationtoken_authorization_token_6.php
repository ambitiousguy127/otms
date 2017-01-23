<?php namespace Ten31\AuthorizationToken\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTen31AuthorizationtokenAuthorizationToken6 extends Migration
{
    public function up()
    {
        Schema::table('ten31_authorizationtoken_authorization_token', function($table)
        {
            $table->string('app_key', 255)->nullable(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('ten31_authorizationtoken_authorization_token', function($table)
        {
            $table->string('app_key', 255)->nullable()->change();
        });
    }
}
