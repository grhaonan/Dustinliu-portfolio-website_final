<?php namespace Zwiebl\MaterialThemeAddons\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateZwieblMaterialthemeaddonsSkills2 extends Migration
{
    public function up()
    {
        Schema::table('zwiebl_materialthemeaddons_skills', function($table)
        {
            $table->integer('sort_order')->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('zwiebl_materialthemeaddons_skills', function($table)
        {
            $table->dropColumn('sort_order');
        });
    }
}
