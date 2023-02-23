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
}
