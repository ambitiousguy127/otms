<?php namespace ten31\Otms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTen31OtmsCases3 extends Migration
{
    public function up()
    {
        Schema::table('ten31_otms_cases', function($table)
        {
            $table->dropColumn('image');
            $table->dropColumn('quotation_thumbnail');
            $table->dropColumn('attachement');
        });
    }
    
    public function down()
    {
        Schema::table('ten31_otms_cases', function($table)
        {
            $table->text('image')->nullable();
            $table->text('quotation_thumbnail')->nullable();
            $table->text('attachement')->nullable();
        });
    }
}
