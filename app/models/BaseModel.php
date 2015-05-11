<?php

use \Esensi\Model\SoftModel as Model;

/*
 * Class from which other models can inherit functionality from.
 */
class BaseModel extends Model {

    /*
     * Convert any model-aware date/times to local timezone.
     */
    protected function asDateTime($value)
    {
        return parent::asDateTime($value)->setTimezone(Config::get('app.local_timezone'));
    }

    public function setUsernameAttribute($value)
    {
        $this->attributes['username'] = strtolower($value);
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }
}
