<?php namespace ten31\Otms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTen31OtmsSystems extends Migration
{
    public function up()
    {
        Schema::create('ten31_otms_systems', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('string')->nullable();
            $table->integer('openapi_form_id')->nullable()->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ten31_otms_systems');
    }
}
