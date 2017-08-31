<?php namespace Zwiebl\MaterialThemeAddons\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateZwieblMaterialthemeaddonsExperience extends Migration
{
    public function up()
    {
        Schema::create('zwiebl_materialthemeaddons_experience', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('position_name');
            $table->string('worked_from');
            $table->string('worked_till');
            $table->string('company_name');
            $table->text('description');
            $table->integer('sort_order')->default(0);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('zwiebl_materialthemeaddons_experience');
    }
}