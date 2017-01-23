<?php namespace ten31\Otms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTen31OtmsJobsLocations extends Migration
{
    public function up()
    {
        Schema::create('ten31_otms_jobs_locations', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('name')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ten31_otms_jobs_locations');
    }
}
