<?php

class Post extends BaseModel {

    protected $table = 'posts';

	// Add your validation rules here
	// public static $rules = [
	// 	// 'title' => 'required'
	// ];

	// Don't forget to fill this array
	protected $fillable = [];

    public function tags()
    {
        return $this->belongsToMany('Tag');
    }

    public function user()
    {
        return $this->belongsTo('User');
    }
}
