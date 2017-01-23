<?php namespace Ten31\AuthorizationToken\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTen31AuthorizationtokenAuthorizationToken5 extends Migration
{
    public function up()
    {
        Schema::table('ten31_authorizationtoken_authorization_token', function($table)
        {
            $table->dropColumn('secret_key');
        });
    }
    
    public function down()
    {
        Schema::table('ten31_authorizationtoken_authorization_token', function($table)
        {
            $table->string('secret_key', 255)->nullable();
        });
    }
}
