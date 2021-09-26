<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class Apitest extends TestCase
{
    /**
     * testSignIn
     *
     * @return void
     */
    public function testSignIn()
    {        
        $param = array(
            'name' => 'mokoti',
        );

        $response = $this->post('/battle/sign_in', $param);
        $this->assertEquals(200, $response->getStatusCode());

        $obj = $response->getContent();
        \Log::debug(var_dump($obj));
        //$this->assertEquals($obj->result,'OK');
    }

    // /**
    //  * testInitUserParam
    //  *
    //  * @return void
    //  */
    // public function testInitUserParam()
    // {        
    //     $param = array(
    //         'user_id' => '6715576',
    //     );

    //     $response = $this->post('/battle/init_user_param', $param);
    //     $this->assertEquals(200, $response->getStatusCode());

    //     $obj = $response->getContent();
    //     \Log::debug(var_dump($obj));
    //     //$this->assertEquals($obj->result,'OK');
    // }

    /**
     * testDrawPiece
     *
     * @return void
     */
    public function testDrawPiece()
    {        
        $param = array(
            'user_id' => '6715576',
        );

        $response = $this->get('/battle/draw_piece', $param);
        $this->assertEquals(200, $response->getStatusCode());

        $obj = $response->getContent();
        \Log::debug(var_dump($obj));
        //$this->assertEquals($obj->result,'OK');
    }

    /**
     * testPurchasePiece
     *
     * @return void
     */
    public function testPurchasePiece()
    {        
        $param = array(
            'user_id'  => '6715576',
            'piece_id' => '2',
            'money'    => '100',
        );

        $response = $this->post('/battle/purchase_piece', $param);
        $this->assertEquals(200, $response->getStatusCode());

        $obj = $response->getContent();
        \Log::debug(var_dump($obj));
        //$this->assertEquals($obj->result,'OK');
    }
}
