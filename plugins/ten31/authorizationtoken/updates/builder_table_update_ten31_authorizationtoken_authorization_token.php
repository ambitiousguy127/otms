<?php namespace Ten31\AuthorizationToken\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTen31AuthorizationtokenAuthorizationToken extends Migration
{
    public function up()
    {
        Schema::table('ten31_authorizationtoken_authorization_token', function($table)
        {
            $table->dateTime('date');
        });
    }
    
    public function down()
    {
        Schema::table('ten31_authorizationtoken_authorization_token', function($table)
        {
            $table->dropColumn('date');
        });
    }
}
