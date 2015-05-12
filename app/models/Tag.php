<?php

class Tag extends BaseModel {

    protected $table = 'tags';

	// Add your validation rules here
	// public $rules = [
	// 	// 'title' => 'required'
	// ];

	// // Don't forget to fill this array
	// protected $fillable = [];

    public function posts()
    {
        return $this->belongsToMany('Post');
    }
}
