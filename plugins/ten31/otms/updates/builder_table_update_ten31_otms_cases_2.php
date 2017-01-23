<?php namespace ten31\Otms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTen31OtmsCases2 extends Migration
{
    public function up()
    {
        Schema::table('ten31_otms_cases', function($table)
        {
            $table->integer('clienttypes_id')->nullable();
            $table->dropColumn('client_type');
        });
    }
    
    public function down()
    {
        Schema::table('ten31_otms_cases', function($table)
        {
            $table->dropColumn('clienttypes_id');
            $table->text('client_type')->nullable();
        });
    }
}
