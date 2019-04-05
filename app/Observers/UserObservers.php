<?php


namespace App\Observers;

use Cache;


class UserObservers {

    protected $key;

    public function __construct() {
        $this->key = "laravel::User";
    }

    public function created() {
        Cache::forget($this->key);
    }

    public function deleted() {
        Cache::forget($this->key);
    }

    public function updated() {
        Cache::forget($this->key);
    }

}
