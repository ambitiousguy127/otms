<?php namespace ten31\Otms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTen31OtmsResponsiveApi extends Migration
{
    public function up()
    {
        Schema::table('ten31_otms_responsive_api', function($table)
        {
            $table->string('telephone', 255)->nullable()->change();
            $table->string('email', 255)->nullable()->change();
            $table->integer('system')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('ten31_otms_responsive_api', function($table)
        {
            $table->string('telephone', 255)->nullable(false)->change();
            $table->string('email', 255)->nullable(false)->change();
            $table->integer('system')->nullable(false)->change();
        });
    }
}
