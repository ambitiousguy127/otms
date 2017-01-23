<?php namespace Ten31\AuthorizationToken\Controllers;

use Backend\Classes\Controller;
use Ten31\Dictionnary\Models\Settings;
use BackendMenu;
use Ten31\AuthorizationToken\Models\AuthorizationToken;
use Lang;

class AuthorizationTokens extends Controller
{
    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController'];

    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();

    }

    public function showAccessToken(){
      return AuthorizationToken::whereNotNull('access_token')->orderBy('created_at', 'desc')->pluck('access_token');
    }

}
