<?php namespace ten31\Otms\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Author extends Controller
{
    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController'];

    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'ten31.otms.blog.edition',
        'ten31.otms.access',

    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('ten31.Otms', 'blog-item');
    }
}
