<?php

class Factory extends \Eloquent {
	protected $fillable = [];
    protected  $table = 'factories';
    
    public function Car() {
        return $this->HasMany('Car');
    }
}