<?php namespace ten31\Otms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTen31OtmsDownloads extends Migration
{
    public function up()
    {
        Schema::create('ten31_otms_downloads', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('title')->nullable();
            $table->text('metadescription')->nullable();
            $table->text('metakeywords')->nullable();
            $table->text('slug')->unique();
            $table->text('image')->nullable();
            $table->text('body')->nullable();
            $table->text('attachement')->nullable();
            $table->date('date')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ten31_otms_downloads');
    }
}
