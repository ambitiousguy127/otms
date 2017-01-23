<?php

namespace ten31\Otms\Controllers;

use Illuminate\Support\Facades\Validator;
use ten31\Otms\Models\OpenApiForm;
use Lang;



class FormOpenApiHandler {

    private $userfields = [
        'name' => 'name',
        'position' => 'position',
        'company_name' => 'company_name',
        'telephone' => 'telephone',
        'email' => 'email',
        'system' => 'system',
        'note' => 'note',
    ];

    private $rules = [
        'name' => 'required|max:100',
        'company_name' => 'required|max:250',
        'telephone' => 'required|integer',
        'email' => 'required|email',
        #'system' => 'required|max:100',
    ];


    private $messages = [];

    public function __construct(){
        $this->messages = [
            'required' => Lang::get('ten31.otms::lang.validation.required'),
            'name.required' =>  Lang::get('ten31.otms::lang.validation.name_required'),
            'company_name.required' =>  Lang::get('ten31.otms::lang.validation.company_required'),
            'telephone.required' =>  Lang::get('ten31.otms::lang.validation.mobile_required'),
            'email.required' =>  Lang::get('ten31.otms::lang.validation.email_required'),
            'system.required' => Lang::get('ten31.otms::lang.validation.service_required'),
            'success' => [
                'openApi' => Lang::get('ten31.otms::lang.messages.demo_success'),
            ],
        ];
        //debug($this->messages);
    }

    private function validate($data)
    {
        return \Validator::make($data, $this->rules, $this->messages);
    }




    public function sendOpenApiData($form_data=null, $source='openApi'){

        $validator = $this->validate($form_data);

        if($validator->fails()){
            $result['status'] = 'error';
            foreach ($validator->messages()->all() as $message) {
                $result['messages'][] = $message;
            }
            return $result;
        }else{


            /*
            foreach($form_data as $field_name => $field_value){
                if(substr($field_name,7) == "system_") {
                    $system .= $system+ " " + $field_value;
                }
            }
            */


            $result['status'] = 'success';
            $result['messages'][] = $this->messages['success'][$source];

            $openApi = new openApiForm();
            $openApi->name = $form_data['name'];
            $openApi->position= $form_data['position'];
            $openApi->company_name = $form_data['company_name'];
            $openApi->telephone = $form_data['telephone'];
            $openApi->email = $form_data['email'];
            $system = (!empty($form_data["ERP"]) ? $form_data["ERP"] :null) . " " .
                (!empty($form_data["WMS"]) ? $form_data["WMS"] :null) . " " .
                (!empty($form_data["TMS"]) ? $form_data["TMS"] :null) . " " .
                (!empty($form_data["GPS"]) ? $form_data["GPS"] :null) . " " .
                (!empty($form_data["APP"]) ? $form_data["APP"] :null) . " " .
                (!empty($form_data["订单系统"]) ? $form_data["订单系统"] :null) . " " .
                (!empty($form_data["其他"]) ? $form_data["其他"] :null);
            $openApi->system = $system;
            $openApi->note = $form_data['note'];
            $openApi->save();
            return $result;
        }

    }

}
