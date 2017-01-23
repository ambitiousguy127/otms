<?php namespace ten31\Otms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTen31OtmsCases5 extends Migration
{
    public function up()
    {
        Schema::table('ten31_otms_cases', function($table)
        {
            $table->dateTime('date')->nullable()->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('ten31_otms_cases', function($table)
        {
            $table->text('date')->nullable()->unsigned(false)->default(null)->change();
        });
    }
}
