<?php namespace Zwiebl\MaterialThemeAddons;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Zwiebl\MaterialThemeAddons\Components\Skills' => 'zw_theme_skills',
            'Zwiebl\MaterialThemeAddons\Components\Experiences' => 'zw_theme_experience',
            'Zwiebl\MaterialThemeAddons\Components\Educations' => 'zw_theme_education'
        ];
    }

    public function registerSettings()
    {
    }
}
