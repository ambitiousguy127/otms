<?php namespace ten31\Otms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTen31OtmsLeads extends Migration
{
    public function up()
    {
        Schema::table('ten31_otms_leads', function($table)
        {
            $table->text('user_referer')->nullable();
            $table->text('user_visited_pages')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('ten31_otms_leads', function($table)
        {
            $table->dropColumn('user_referer');
            $table->dropColumn('user_visited_pages');
        });
    }
}
