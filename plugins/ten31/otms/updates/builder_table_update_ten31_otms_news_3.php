<?php namespace ten31\Otms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTen31OtmsNews3 extends Migration
{
    public function up()
    {
        Schema::table('ten31_otms_news', function($table)
        {
            $table->dropColumn('authors_id');
        });
    }
    
    public function down()
    {
        Schema::table('ten31_otms_news', function($table)
        {
            $table->integer('authors_id')->nullable();
        });
    }
}
