<?php namespace Ten31\AuthorizationToken\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTen31AuthorizationtokenAuthorizationToken8 extends Migration
{
    public function up()
    {
        Schema::table('ten31_authorizationtoken_authorization_token', function($table)
        {
            $table->string('access_token', 255)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('ten31_authorizationtoken_authorization_token', function($table)
        {
            $table->string('access_token', 255)->nullable(false)->change();
        });
    }
}
