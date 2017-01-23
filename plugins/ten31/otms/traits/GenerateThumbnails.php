<?php namespace ten31\Otms\Traits;

trait GenerateThumbnails
{
    public function getIndexIllustration()
    {
        return $this->illustration->getThumb(652, 438, ['mode' => 'crop']);
    }
    public function getSuccessBoxIllustration()
    {
        return $this->illustration->getThumb(367, 229, ['mode' => 'crop']);
    }
    public function getPostIllustration()
    {
        return $this->illustration->getThumb(750, null, ['mode' => 'crop']);
    }
    public function getThumbnail()
    {
        return $this->illustration->getThumb(100, 100, ['mode' => 'crop']);
    }
    public function getThumbAttribute()
    {
        if($this->illustration)
        {
            return '<img src="'.$this->illustration->getThumb(30,30, 'crop').'">';
        }
        else
        {
            return '<img  alt="No illustration" />';
        }
    }
}
