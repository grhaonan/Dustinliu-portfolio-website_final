<?php namespace Zwiebl\MaterialThemeAddons\Updates;

use Seeder;
use DB;

class Seeder108 extends Seeder
{
    public function run()
    {
        DB::table('zwiebl_materialthemeaddons_experience')->insert(
                array(
                    array('position_name' => 'UX/UI Designer',
                            'company_name' => 'Apple Inc.',
                            'worked_from' => 'April 2008',
                            'worked_till' => 'May 2011',
                            'sort_order' => '1',
                            'description' => 'Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing.'
                    ),
                    array('position_name' => 'Backend Developer',
                            'company_name' => 'Facebook Ltd.',
                            'worked_from' => 'May 2011',
                            'worked_till' => 'December 2013',
                            'sort_order' => '2',
                            'description' => 'Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing.'
                    ),
                    array('position_name' => 'Frontend Developer',
                            'company_name' => 'Twitter Inc.',
                            'worked_from' => 'December 2013',
                            'worked_till' => 'January 2014',
                            'sort_order' => '3',
                            'description' => 'Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing.'
                    ),
                    array('position_name' => 'Full Stack Web-Developer',
                            'company_name' => 'My own Company',
                            'worked_from' => 'January 2014',
                            'worked_till' => 'Present',
                            'sort_order' => '4',
                            'description' => 'Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing.'
                    ),
                                
                ));
    }
}