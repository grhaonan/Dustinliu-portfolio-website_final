<?php namespace Zwiebl\MaterialThemeAddons\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateZwieblMaterialthemeaddonsSkills extends Migration
{
    public function up()
    {
        Schema::create('zwiebl_materialthemeaddons_skills', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->integer('percent')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('zwiebl_materialthemeaddons_skills');
    }
}
