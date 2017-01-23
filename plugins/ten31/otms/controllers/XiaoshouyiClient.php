<?php

namespace ten31\Otms\Controllers;

use Config;
use Lang;
use Ten31\AuthorizationToken\Models\AuthorizationToken;

class XiaoshouyiClient
{

    private $token = 'd6873e8b2a5a1440c53dc587387ca16d1af9f4c8624c133f02eaca97d19bdd39';


    private $fields = [];

    // default status is error until proper validation
    private $result = [
        'status' => 'error',
    ];

    public function __construct($form_encoded)
    {
        $this->fields = $form_encoded;
    }

    public function sendRequest()
    {
        try {
            $ch = curl_init();

            //THE URL OF THE REQUEST
            curl_setopt($ch, CURLOPT_URL, Config::get('ten31.otms::xiaoshouyi.endpoints.create_lead'));
            //PASS THE TOKEN IN THE HEADER + REQUEST TYPE JSON
            curl_setopt($ch,CURLOPT_HTTPHEADER,[
                'Authorization:'.$this->getLatestAuthorizationToken(),
                'Content-Type:application/json',
            ]);
            //PASS THE DATA IN POST
            curl_setopt($ch,CURLOPT_POST, 1);
            curl_setopt($ch,CURLOPT_POSTFIELDS, $this->fields);

            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);

            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HEADER, false);

            // execute the request
            $response = curl_exec($ch);

            if (FALSE === $response)
                print_r(curl_error($ch).curl_errno($ch));

            curl_close($ch);

            //debug($response); // TODO : remove

            $this->parseResponse($response);

            return $this->result;

        } catch(Exception $e) {
            $this->result['messages'][] = 'Curl failed with error ' . $e->getCode() . ' : ' . $e->getMessage();
            return $this->result;
        }
    }


    /**
     * Parses the XSY json response and interprets it
     *
     */
    public function parseResponse($json) {

        $response_arr = json_decode($json, true);
        // when entry is successful, XSY answers with {id: xxx}, so we check for its existence
        $this->result['response'] = $json;
        if (isset($response_arr['id'])){
            $this->result['status'] = 'success';
        }
        else {
            if (isset($response_arr['error_code'])){
                $known_errors = Lang::get('ten31.otms::lang.messages.xsy_errors');
                if(isset($known_errors[$response_arr['error_code']])){
                    $this->result['messages'][] = $known_errors[$response_arr['error_code']];
                }else $this->result['messages'][] = Lang::get('ten31.otms::lang.messages.xsy_unknown_error');
            }
            else $this->result['messages'][] = Lang::get('ten31.otms::lang.messages.xsy_unknown_error');
        }
    }
    public function getLatestAuthorizationToken()
    {
        //print AuthorizationToken::whereNotNull('access_token' )->orderBy('created_at', 'desc')->pluck('access_token');
        return AuthorizationToken::whereNotNull('access_token')->orderBy('created_at', 'desc')->pluck('access_token');
    }

}


