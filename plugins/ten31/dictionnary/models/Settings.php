<?php namespace ten31\dictionnary\Models;

use Model;
use Debugbar;
use ten31\Otms\Models\CaseStudy;
use ten31\Otms\Models\News;
use ten31\Otms\Models\Post;
use ten31\Otms\Models\Download;
use ten31\Otms\Models\Functions;


class Settings extends Model
{
    public $implement = ['System.Behaviors.SettingsModel'];

    // A unique code
    public $settingsCode = 'ten31_dictionnary_settings';

    // Reference to field configuration
    public $settingsFields = 'fields.yaml';

    public function getDropdownOptions($fieldName = null, $keyValue = null){
        //CHINESE VERSION
        if( $fieldName == "home_highlighted_casestudy_left" ||
            $fieldName == "home_highlighted_casestudy_middle" ||
            $fieldName == "home_highlighted_casestudy_right") 
            $full_model_name = 'ten31\Otms\Models\CaseStudy';

        if( $fieldName == "home_highlighted_download" ) $full_model_name = 'ten31\Otms\Models\Download';   
        if( $fieldName == "home_highlighted_news" ) $full_model_name = 'ten31\Otms\Models\News';   
        if( $fieldName == "home_highlighted_post" ) $full_model_name = 'ten31\Otms\Models\Post';   

        if( $fieldName == "highlighted_news" ) $full_model_name = 'ten31\Otms\Models\News';   
        if( $fieldName == "highlighted_blog" ) $full_model_name = 'ten31\Otms\Models\Post';   

        if(isset($full_model_name) && $full_model_name){
            return $full_model_name::all(['title', 'date', 'id'])->sortByDesc('date')->lists('title', 'id');
        } 
            

        //ENGLISH VERSION
        $full_model_name = "";
        $lang = "en";
        if( $fieldName == "home_highlighted_casestudy_left_en" ||
            $fieldName == "home_highlighted_casestudy_middle_en" ||
            $fieldName == "home_highlighted_casestudy_right_en") 
            $full_model_name = 'ten31\Otms\Models\CaseStudy';

        if( $fieldName == "home_highlighted_download_en" ) $full_model_name = 'ten31\Otms\Models\Download';   
        if( $fieldName == "home_highlighted_news_en" ) $full_model_name = 'ten31\Otms\Models\News';   
        if( $fieldName == "home_highlighted_post_en" ) $full_model_name = 'ten31\Otms\Models\Post';   

        if( $fieldName == "highlighted_news_en" ) $full_model_name = 'ten31\Otms\Models\News';   
        if( $fieldName == "highlighted_blog_en" ) $full_model_name = 'ten31\Otms\Models\Post';  

        if(isset($full_model_name) && $full_model_name){
            $translated_models = Functions::getTranslatedModels($full_model_name,$lang);
            $models = $full_model_name::whereIn('id', $translated_models)->orderBy('date', 'desc')->get();
            $options = [];
            foreach($models as $model){
                $options[$model->id] = $model->lang("en")->title;
            }
            return $options;
        }
    }
}