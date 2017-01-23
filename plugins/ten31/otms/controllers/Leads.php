<?php namespace ten31\Otms\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use ten31\Otms\Models\Lead;

class Leads extends Controller
{
    public $implement = [
        'Backend\Behaviors\ListController',
        'Backend\Behaviors\FormController',
        'Backend\Behaviors\ImportExportController',
    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $importExportConfig = 'config_import_export.yaml';

    public $requiredPermissions = [
        'ten31.otms.access' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('ten31.Otms', 'leads');
    }


    public function onDelete(){

            if(($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)){

            foreach($checkedIds as $objectId){
                if(!$object = Lead::find($objectId))
                    continue;
                    $object->delete();
        }

        }

        return $this->listRefresh();
    }


}