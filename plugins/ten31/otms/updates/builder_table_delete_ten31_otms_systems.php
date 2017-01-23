<?php namespace ten31\Otms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteTen31OtmsSystems extends Migration
{
    public function up()
    {
        Schema::dropIfExists('ten31_otms_systems');
    }
    
    public function down()
    {
        Schema::create('ten31_otms_systems', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('name')->nullable();
            $table->integer('openapi_form_id')->nullable()->unsigned();
        });
    }
}
