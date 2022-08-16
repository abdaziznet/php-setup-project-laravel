<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ConfigurationTest extends TestCase
{
  public function testConfig()
  {
      $firsName = config("contoh.author.first");
      $lastName = config("contoh.author.last");
      $email = config("contoh.email");
      $web = config("contoh.web");

      self::assertEquals('Abdul', $firsName);
      self::assertEquals('Aziz', $lastName);
      self::assertEquals('dev.abdaziz@outlook.com', $email);
      self::assertEquals('https://abdaziz.net', $web);
  }
}
