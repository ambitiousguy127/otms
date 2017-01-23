<?php namespace ten31\Otms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTen31OtmsLeads extends Migration
{
    public function up()
    {
        Schema::create('ten31_otms_leads', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 255)->nullable();
            $table->string('company_name', 255)->nullable();
            $table->string('mobile', 255);
            $table->string('email', 255)->nullable();
            $table->integer('lead_source_id')->unsigned();
            $table->integer('service')->unsigned();
            $table->text('note')->nullable();
            $table->text('xsy_response')->nullable();
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ten31_otms_leads');
    }
}