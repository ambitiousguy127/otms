<?php namespace Ten31\Dictionnary;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
	{
	     return [
	        'settings' => [
	            'label'       => 'Dictionnary',
	            'description' => 'Manage Interface Fields of the website.',
	            'category'    => 'Interface',
	            'icon'        => 'icon-book',
	            'class'       => 'Ten31\Dictionnary\Models\Settings',
	            'order'       => 500,
	            'keywords'    => 'interface ten31 dictionnary',
	            'permissions' => ['ten31.dictionnary.access_settings']
	        ]
	    ];
	}

	public function registerPermissions()
	{
	    return [
	        'ten31.dictionnary.access_settings' => [
	            'label' => 'Manage the Dictionnary of the website (Interface fields)',
	            'tab' => 'Dictionnary'
	        ]
	    ];
	}
}
