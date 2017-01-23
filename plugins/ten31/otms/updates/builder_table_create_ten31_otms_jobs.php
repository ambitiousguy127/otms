<?php namespace ten31\Otms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTen31OtmsJobs extends Migration
{
    public function up()
    {
        Schema::create('ten31_otms_jobs', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('title')->nullable();
            $table->integer('locations_id')->nullable();
            $table->text('body')->nullable();
            $table->boolean('open')->nullable();
            $table->date('date')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ten31_otms_jobs');
    }
}
