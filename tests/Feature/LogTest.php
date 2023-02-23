<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Log;

class LogTest extends TestCase
{
    public function testLoggingSingle()
    {
        Log::alert("Ini Alert");
        Log::info("Hello Info");
        Log::error("Hello Error");
        Log::critical("Hello Error");
        self::assertTrue(true);
    }

    public function testContextLog()
    {
        Log::alert("Ada error dibagian ini", ["rizal" => "web developer"]);
        self::assertTrue(true);
    }

    public function testWithContext()
    {
        Log::withContext(["user" => "Muhammad Rizal Firdaus"]);
        Log::error("Gagal menambahkan produk");
        Log::alert("ada error di penambahan produk");
        self::assertTrue(true);
    }

    public function testChannelHandler()
    {
        $log = Log::channel("file");
        $log->error("Erorr pak", ["user" => "rizal"]);
        self::assertTrue(true);
    }
}
