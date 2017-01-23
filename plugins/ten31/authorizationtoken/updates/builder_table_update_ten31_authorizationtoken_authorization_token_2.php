<?php namespace Ten31\AuthorizationToken\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTen31AuthorizationtokenAuthorizationToken2 extends Migration
{
    public function up()
    {
        Schema::table('ten31_authorizationtoken_authorization_token', function($table)
        {
            $table->timestamp('updated_at');
            $table->renameColumn('date', 'created_at');
        });
    }
    
    public function down()
    {
        Schema::table('ten31_authorizationtoken_authorization_token', function($table)
        {
            $table->dropColumn('updated_at');
            $table->renameColumn('created_at', 'date');
        });
    }
}
