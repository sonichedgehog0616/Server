<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/*
 * バトルコントローラー
 */
class BattleController extends Controller
{
    /*
     * コマを購入する 
     *      
     */
    public function purchase_piece(Request $request)
    {
        $user_id  = $request->input('user_id');
        $piece_id = $request->input('piece_id');
        $money    = $request->input('money');

        // validation
         
        // insert into database
        

        $success = true;

        // return 
        $response = response(
            array(
                'success'  => $success,
                'user_id'  => $user_id,
                'piece_id' => $piece_id,
                'money'    => $money,
            )
        );

        return $response;
    }

}
