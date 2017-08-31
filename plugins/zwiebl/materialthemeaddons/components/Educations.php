<?php
namespace Zwiebl\MaterialThemeAddons\Components;

use Lang;
use Cms\Classes\ComponentBase;
use Zwiebl\MaterialThemeAddons\Models\Education;

class Educations extends ComponentBase
{


  public $exp;

  public function componentDetails()
  {
    return [
    'name' => 'List Educations',
    'description' => 'Shows your Experience at the site.'
    ];
  }

  public function getAllEducations()
  {
    $edu = Education::orderBy('sort_order', 'desc')->get();
    return $edu;
  }
  public function onRun()
  {
      $this->page['education'] = $this->getAllEducations();
  }

}
?>
