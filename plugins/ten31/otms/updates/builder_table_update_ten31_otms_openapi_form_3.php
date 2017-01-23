<?php namespace ten31\Otms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTen31OtmsOpenapiForm3 extends Migration
{
    public function up()
    {
        Schema::table('ten31_otms_openapi_form', function($table)
        {
            $table->string('system')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('ten31_otms_openapi_form', function($table)
        {
            $table->string('system', 255)->nullable(false)->change();
        });
    }
}
