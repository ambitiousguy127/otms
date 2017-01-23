<?php

use Ten31\Dictionnary\Models\Settings;


return [
    'xiaoshouyi' => [
        'user_id' => Settings::get('xsy_ownerid'),
        'department_id' => Settings::get('xsy_dimdepart'),
        'endpoints' => [
            'create_lead' => 'https://api.xiaoshouyi.com/data/v1/objects/lead/create',
        ],
    ],

    'xiaoshouyi_authorization' => [
        'app_key' => "",
        'username' => "",
        'password' =>""."HsxtlzYy",
        'generate' => [

        ],

    ]


];