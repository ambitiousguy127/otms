<?php namespace ten31\Otms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTen31OtmsNews extends Migration
{
    public function up()
    {
        Schema::create('ten31_otms_news', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('title')->nullable();
            $table->text('metadescription')->nullable();
            $table->text('metakeywords')->nullable();
            $table->text('image')->nullable();
            $table->text('body')->nullable();
            $table->integer('authors_id')->nullable();
            $table->date('date')->nullable();
            $table->string('slug', 255)->unique();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ten31_otms_news');
    }
}
