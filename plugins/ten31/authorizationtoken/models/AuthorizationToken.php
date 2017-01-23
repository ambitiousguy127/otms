<?php namespace Ten31\AuthorizationToken\Models;

use Illuminate\Support\Facades\Validator;
use Model;
use Log;
use Ten31\AuthorizationToken\Classes\Curl;
use Ten31\Otms\Controllers\XiaoshouyiClient;
use Ten31\AuthorizationToken\Controllers\AuthorizationTokens;
use Lang;
use October\Rain\Support\Facades\Flash;
use Ten31\Dictionnary\Models\Settings;
use ValidationException;
//use October\Rain\Foundation\Exception\Handler;

/**
 * Model
 */
class AuthorizationToken extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Validation
     */
    public $rules = [

    ];


    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = true;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ten31_authorizationtoken_authorization_token';


    public function beforeSave()
    {



        $url = 'https://api.xiaoshouyi.com/authorize/token';

        $ch = curl_init();



        curl_setopt_array($ch, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL =>$url,
            CURLOPT_POST => 1,
            //CURLOPT_HEADER => 1,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_FOLLOWLOCATION => 1,
            CURLOPT_POSTFIELDS => http_build_query(array(
                'app_key'=> $this->app_key,
                'username' => $this->username,
                'password' => $this->password
            )
        )));

        $answer = curl_exec($ch);
        $response_decode = json_decode($answer, true);

        //check is message in json is access_token or error_code
        if(isset($response_decode['access_token'])){
            //if access_token store token in db
            $this->access_token = implode($response_decode);
        }
        else {
            if (isset($response_decode['error_code'])) {
                Log::info(implode($response_decode));
                throw new ValidationException($response_decode);
            }
        }

        Log::info(implode($response_decode));
        curl_close($ch);

        $this->app_key = ' ';
        $this->username = ' ';
        $this->password = ' ';

        return $this->result;
    }


}