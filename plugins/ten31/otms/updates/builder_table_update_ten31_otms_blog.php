<?php namespace ten31\Otms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTen31OtmsBlog extends Migration
{
    public function up()
    {
        Schema::table('ten31_otms_blog', function($table)
        {
            $table->string('slug', 255)->unique();
        });
    }
    
    public function down()
    {
        Schema::table('ten31_otms_blog', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
