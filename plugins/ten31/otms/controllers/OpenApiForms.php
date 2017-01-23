<?php namespace ten31\Otms\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use ten31\Otms\Models\OpenApiForm;

class OpenApiForms extends Controller
{
    public $implement = ['Backend\Behaviors\ListController'];
    
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('ten31.Otms', 'openapi');
    }


public function onDelete(){

            if(($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)){

            foreach($checkedIds as $objectId){
                if(!$object = OpenApiForm::find($objectId))
                    continue;
                    $object->delete();
        }

        }

        return $this->listRefresh();
    }


}

