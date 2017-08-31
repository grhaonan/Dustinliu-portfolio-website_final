<?php
namespace Zwiebl\MaterialThemeAddons\Components;

use Lang;
use Cms\Classes\ComponentBase;
use Zwiebl\MaterialThemeAddons\Models\Skill;

class Skills extends ComponentBase
{


  public $skills;

  public function componentDetails()
  {
    return [
    'name' => 'List Skills',
    'description' => 'Shows your Skills in a nice diagram.'
    ];
  }

  public function getAllSkills()
  {
    $skills = Skill::orderBy('sort_order')->get();
    return $skills;
  }


  public function onRun()
  {
      $this->page['skills'] = $this->getAllSkills();
  }

}
?>
