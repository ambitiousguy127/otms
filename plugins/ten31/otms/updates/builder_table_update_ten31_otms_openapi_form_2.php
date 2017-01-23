<?php namespace ten31\Otms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTen31OtmsOpenapiForm2 extends Migration
{
    public function up()
    {
        Schema::table('ten31_otms_openapi_form', function($table)
        {
            $table->string('system')->change();
        });
    }
    
    public function down()
    {
        Schema::table('ten31_otms_openapi_form', function($table)
        {
            $table->string('system', 10)->change();
        });
    }
}
