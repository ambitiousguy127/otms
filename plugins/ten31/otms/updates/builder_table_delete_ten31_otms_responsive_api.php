<?php namespace ten31\Otms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteTen31OtmsResponsiveApi extends Migration
{
    public function up()
    {
        Schema::dropIfExists('ten31_otms_responsive_api');
    }
    
    public function down()
    {
        Schema::create('ten31_otms_responsive_api', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 255)->nullable();
            $table->string('position', 255)->nullable();
            $table->string('company_name', 255)->nullable();
            $table->string('telephone', 255)->nullable();
            $table->string('email', 255)->nullable();
            $table->integer('system')->nullable();
            $table->text('note')->nullable();
            $table->timestamp('created_at')->default('0000-00-00 00:00:00');
            $table->timestamp('updated_at')->default('0000-00-00 00:00:00');
        });
    }
}
