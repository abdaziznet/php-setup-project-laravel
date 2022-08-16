<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EnvironmentTest extends TestCase
{
    public function testGetEnv()
    {
        $playground = env("PLAYGROUND");
        self::assertEquals("abdaziznet", $playground);

        $abdlegs7 = env("ABD_LEGS7");
        self::assertEquals("Abdul Aziz", $abdlegs7);
    }
}
