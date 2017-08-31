<?php namespace Zwiebl\MaterialThemeAddons\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateZwieblMaterialthemeaddonsEducation extends Migration
{
    public function up()
    {
        Schema::create('zwiebl_materialthemeaddons_education', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('position_name');
            $table->string('worked_from');
            $table->string('worked_till');
            $table->string('school_name');
            $table->text('description');
            $table->integer('sort_order')->default(0);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('zwiebl_materialthemeaddons_education');
    }
}