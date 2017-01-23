<?php namespace ten31\Otms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTen31OtmsRfqs extends Migration
{
    public function up()
    {
        Schema::create('ten31_otms_rfqs', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 255)->nullable();
            $table->string('company_name', 255)->nullable();
            $table->string('mobile', 255);
            $table->string('email', 255)->nullable();
            $table->timestamps();            
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ten31_otms_rfqs');
    }
}