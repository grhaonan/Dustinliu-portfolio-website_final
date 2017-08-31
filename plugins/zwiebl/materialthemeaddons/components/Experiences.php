<?php
namespace Zwiebl\MaterialThemeAddons\Components;

use Lang;
use Cms\Classes\ComponentBase;
use Zwiebl\MaterialThemeAddons\Models\Experience;

class Experiences extends ComponentBase
{


  public $exp;

  public function componentDetails()
  {
    return [
    'name' => 'List Experience',
    'description' => 'Shows your Experience at the site.'
    ];
  }

  public function getAllExperiences()
  {
    $exp = Experience::orderBy('sort_order', 'desc')->get();
    return $exp;
  }

  public function onRun()
  {
      $this->page['experience'] = $this->getAllExperiences();
  }

}
?>
