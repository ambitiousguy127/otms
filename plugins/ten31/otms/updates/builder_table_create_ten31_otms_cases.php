<?php namespace ten31\Otms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTen31OtmsCases extends Migration
{
    public function up()
    {
        Schema::create('ten31_otms_cases', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('title')->nullable();
            $table->text('metadescription')->nullable();
            $table->text('metakeywords')->nullable();
            $table->text('image')->nullable();
            $table->text('body')->nullable();
            $table->text('date')->nullable();
            $table->text('slug')->unique();
            $table->text('client_type')->nullable();
            $table->text('quotation')->nullable();
            $table->text('quotation_source')->nullable();
            $table->text('quotation_position')->nullable();
            $table->text('quotation_thumbnail')->nullable();
            $table->text('attachment')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ten31_otms_cases');
    }
}
