<?php namespace Zwiebl\MaterialThemeAddons\Updates;
use DB;
use Seeder;

class Seeder1010 extends Seeder
{
    public function run()
    {
        DB::table('zwiebl_materialthemeaddons_education')->insert(
                array(
                    array('position_name' => 'O Level',
                            'school_name' => 'Oxford School',
                            'worked_from' => 'April 2008',
                            'worked_till' => 'May 2011',
                            'sort_order' => '1',
                            'description' => 'Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing.'
                    ),
                    array('position_name' => 'A Level',
                            'school_name' => 'Oxford College',
                            'worked_from' => 'May 2011',
                            'worked_till' => 'December 2013',
                            'sort_order' => '2',
                            'description' => 'Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing.'
                    ),
                    array('position_name' => 'Bachelor of Science',
                            'school_name' => 'Oxford University',
                            'worked_from' => 'December 2013',
                            'worked_till' => 'January 2014',
                            'sort_order' => '3',
                            'description' => 'Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing.'
                    ),
                    array('position_name' => 'Masters of Science',
                            'school_name' => 'Oxford University',
                            'worked_from' => 'January 2014',
                            'worked_till' => 'Present',
                            'sort_order' => '4',
                            'description' => 'Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing.'
                    ),
                                
                ));
    }
}