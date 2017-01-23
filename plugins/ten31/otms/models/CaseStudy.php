<?php namespace ten31\Otms\Models;

use Model;

/**
 * Model
 */
class CaseStudy extends Model
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
    public $table = 'ten31_otms_cases';

    public $belongsTo = [
        'clienttypes' => [
            'Ten31\Otms\Models\ClientType'
        ]
    ];

    public function getQuoteIllustration()
    {
        return $this->quotation_thumbnail->getThumb(70, 70, ['mode' => 'crop']);
    }

    public $attachOne = [
        'attachement' => 'System\Models\File',
        'quotation_thumbnail' => 'System\Models\File',
        'illustration' => 'System\Models\File'
    ];

    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];

    public $translatable = ['title', 'body', 'metakeywords', 'metadescription', 'quotation', 'quotation_source', 'quotation_position'];
}