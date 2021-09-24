<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class Apitest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testPurchasePiece()
    {        
        $param = array(
            'user_id' => '6715576',
        );

        $response = $this->post('/battle/purchase_piece', $param);
        $this->assertEquals(200, $response->getStatusCode());

        $obj = $response->getContent();
        \Log::debug(var_dump($obj));
        //$this->assertEquals($obj->result,'OK');
    }
}
