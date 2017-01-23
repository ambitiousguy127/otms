<?php namespace ten31\Otms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTen31OtmsSystems extends Migration
{
    public function up()
    {
        Schema::table('ten31_otms_leads', function($table)
        {
            $table->renameColumn('string', 'name');
        });
    }
    
    public function down()
    {
        Schema::table('ten31_otms_systems', function($table)
        {
            $table->renameColumn('name', 'string');
        });
    }
}
