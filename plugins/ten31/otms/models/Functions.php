<?php namespace ten31\Otms\Models;

use Model;
use Db;
use RainLab\Translate\Classes\Translator;

/**
 * Model
 */
class Functions extends Model
{
   public static function getTranslatedModels($full_model_name,$language){
     
         //if we are in the situation of the non default lg, filter the results
        $translated_model_ids = [];
        if($language != self::getDefaultLanguage()){
             $possible_translated_models = Db::table('rainlab_translate_attributes')->where('locale', $language)->where('model_type', $full_model_name)->get();
            foreach($possible_translated_models as $pmodel){
                $data_model = json_decode($pmodel->attribute_data);
                if($data_model->title){
                    $translated_model_ids[] = $pmodel->model_id;
                }
            }
            return $translated_model_ids;
        }else{
            //else get all the Ids
            $all_models = $full_model_name::get();
            $translated_model_ids = [];
            foreach($all_models as $model){
                $translated_model_ids[] = $model->id;
            }
            return $translated_model_ids;
        }
   }

   public static function getCurrentLanguage(){
        $translate = Translator::instance();
        $translate->loadLocaleFromSession();
        return $translate->getLocale();
   }

   public static function getDefaultLanguage(){
        $translate = Translator::instance();
        $translate->loadLocaleFromSession();
        return $translate->getDefaultLocale();
   }

}