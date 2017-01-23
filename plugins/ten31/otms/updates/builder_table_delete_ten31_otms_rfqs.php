<?php namespace ten31\Otms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteTen31OtmsRfqs extends Migration
{
    public function up()
    {
        Schema::dropIfExists('ten31_otms_rfqs');
    }
    
    public function down()
    {
        Schema::create('ten31_otms_rfqs', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 255)->nullable();
            $table->string('company_name', 255)->nullable();
            $table->string('mobile', 255);
            $table->string('email', 255)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
}