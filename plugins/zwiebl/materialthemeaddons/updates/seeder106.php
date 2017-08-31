<?php namespace Zwiebl\MaterialThemeAddons\Updates;

use Seeder;
use DB;

class Seeder106 extends Seeder
{
    public function run()
    {
        DB::table('zwiebl_materialthemeaddons_skills')->insert(
                array(
                        array('name' => 'HTML', 'percent' => '95', 'sort_order' => '1'),
                        array('name' => 'CSS', 'percent' => '95', 'sort_order' => '2'),
                        array('name' => 'PHP', 'percent' => '80', 'sort_order' => '3'),
                        array('name' => 'JavaScript', 'percent' => '75', 'sort_order' => '4'),
                        array('name' => 'Photoshop', 'percent' => '80', 'sort_order' => '5'),
                        array('name' => 'Illustrator', 'percent' => '50', 'sort_order' => '6'),
                ));
    }
}