<?php namespace ten31\Otms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTen31OtmsJobs2 extends Migration
{
    public function up()
    {
        Schema::table('ten31_otms_jobs', function($table)
        {
            $table->dropColumn('open');
        });
    }
    
    public function down()
    {
        Schema::table('ten31_otms_jobs', function($table)
        {
            $table->boolean('open')->nullable();
        });
    }
}
