<?php namespace ten31\Otms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTen31OtmsLeads2 extends Migration
{
    public function up()
    {
        Schema::table('ten31_otms_leads', function($table)
        {
            $table->text('user_session_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('ten31_otms_leads', function($table)
        {
            $table->dropColumn('user_session_id');
        });
    }
}
