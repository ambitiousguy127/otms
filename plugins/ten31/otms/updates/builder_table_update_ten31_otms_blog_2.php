<?php namespace ten31\Otms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTen31OtmsBlog2 extends Migration
{
    public function up()
    {
        Schema::table('ten31_otms_blog', function($table)
        {
            $table->renameColumn('author', 'authors_id');
        });
    }
    
    public function down()
    {
        Schema::table('ten31_otms_blog', function($table)
        {
            $table->renameColumn('authors_id', 'author');
        });
    }
}
