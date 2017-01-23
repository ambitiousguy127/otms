<?php namespace ten31\Otms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTen31OtmsNews2 extends Migration
{
    public function up()
    {
        Schema::table('ten31_otms_news', function($table)
        {
            $table->boolean('active');
        });
    }
    
    public function down()
    {
        Schema::table('ten31_otms_news', function($table)
        {
            $table->dropColumn('active');
        });
    }
}
