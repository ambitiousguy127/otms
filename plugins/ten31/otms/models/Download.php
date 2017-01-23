<?php namespace ten31\Otms\Models;

use Model;

/**
 * Model
 */
class Download extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \ten31\Otms\Traits\GenerateThumbnails;

    /*
     * Validation
     */
    public $rules = [
    ];

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ten31_otms_downloads';

    public $attachOne = [
        'attachement' => 'System\Models\File',
        'illustration' => 'System\Models\File'
    ];

    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];
    public $translatable = ['title', 'body', 'metakeywords', 'metadescription'];
}