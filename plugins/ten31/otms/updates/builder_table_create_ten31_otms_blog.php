<?php namespace ten31\Otms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTen31OtmsBlog extends Migration
{
    public function up()
    {
        Schema::create('ten31_otms_blog', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 255)->nullable();
            $table->string('metadescription', 255)->nullable();
            $table->string('metakeywords', 255)->nullable();
            $table->text('image')->nullable();
            $table->text('body')->nullable();
            $table->integer('author')->nullable();
            $table->date('date')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ten31_otms_blog');
    }
}
