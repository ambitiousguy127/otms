<?php namespace ten31\Otms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTen31OtmsCases extends Migration
{
    public function up()
    {
        Schema::table('ten31_otms_cases', function($table)
        {
            $table->renameColumn('attachment', 'attachement');
        });
    }
    
    public function down()
    {
        Schema::table('ten31_otms_cases', function($table)
        {
            $table->renameColumn('attachement', 'attachment');
        });
    }
}
