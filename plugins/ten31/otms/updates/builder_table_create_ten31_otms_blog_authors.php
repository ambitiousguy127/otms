<?php namespace ten31\Otms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTen31OtmsBlogAuthors extends Migration
{
    public function up()
    {
        Schema::create('ten31_otms_blog_authors', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 255)->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ten31_otms_blog_authors');
    }
}
