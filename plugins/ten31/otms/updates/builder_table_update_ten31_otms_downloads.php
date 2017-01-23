<?php namespace ten31\Otms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTen31OtmsDownloads extends Migration
{
    public function up()
    {
        Schema::table('ten31_otms_downloads', function($table)
        {
            $table->dropColumn('image');
            $table->dropColumn('attachement');
        });
    }
    
    public function down()
    {
        Schema::table('ten31_otms_downloads', function($table)
        {
            $table->text('image')->nullable();
            $table->text('attachement')->nullable();
        });
    }
}
