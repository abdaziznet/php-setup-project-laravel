<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoutingTest extends TestCase
{
    public function testRouting(){
        $this->get('/products/1')->assertSeeText("Product : 1");
    }

    public function testRouteParameterRegex(){
        $this->get('/categories/123')->assertSeeText("Categories : 123");
        $this->get('/categories/abd')->assertSeeText("404");
    }
}
