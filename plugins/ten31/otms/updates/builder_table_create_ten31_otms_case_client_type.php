<?php namespace ten31\Otms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTen31OtmsCaseClientType extends Migration
{
    public function up()
    {
        Schema::create('ten31_otms_case_client_type', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('name')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ten31_otms_case_client_type');
    }
}
