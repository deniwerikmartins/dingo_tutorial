<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    static $databaseReady = false;

    public function setUp(){

        parent::setUp();

        $sqLiteDb = base_path() . DIRECTORY_SEPARATOR . env('DB_DATABASE');

        if (!file_exists($sqLiteDb)){
            touch($sqLiteDb);
        }

        if (!self::$databaseReady){
            $this->artisan('migrate:refresh');
            $this->artisan('db:seed');
            self::$databaseReady = true;

        }
    }
}
