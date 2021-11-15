<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;

/*
 * バトルコントローラー
 */
class BattleController extends Controller
{
    /*
     * ユーザー情報の登録(一旦間借りする)
     *      
     */
    public function sign_in(Request $request)
    {
        // $name      = $request->input('name');
        $name      = 'mokoti';
        $timestamp = date("Y-m-d H:i:s", time());

        DB::beginTransaction();

        try
        {
        
            $result = DB::table('user')->insertGetId(
                array(
                    // 'id' => 8,
                    'name'       => $name,
                    'created_at' => $timestamp,
                    'updated_at' => $timestamp,
                )
            );

            if (!$result)
            {
                throw new Exception(sprintf("userデータのinsertに失敗しました user_id:%s", $user_id));
            }

            DB::commit();
        }
        catch (Exception $e)
        {
            DB::rollback();
            throw $e;
        }
        
        // return 
        $response = response(
            array(
                'success'   => true,
                'timestamp' => $timestamp,
                'result'    => $result, 
            )
        ); 
        
        return $response;
    }

    /*
     * ユーザー情報の初期化
     *      
     */
    public function init_user_param(Request $request)
    {
        $user_id = $request->input('user_id');

        // validation
        // userが他のアリーナに参加中でないこと
        
        // insert into database
        // アリーナ参加登録
         
        // return 
        $response = response(
            array(
                'user_id'  => $user_id,
                'arena_id' => 1,
            )
        );

        return $response;
    }

    /*
     * 準備フェーズ：コマの抽選
     *      
     */
    public function draw_piece(Request $request)
    {
        $user_id = $request->input('user_id');

        // validation
         
        // insert into database
        
        // draw piece
        $list_piece = array(
            '2', '3', '4'
        );

        // return 
        $response = response(
            array(
                'user_id'    => $user_id,
                'list_piece' => $list_piece,
            )
        );

        return $response;
    }

    /*
     * 準備フェーズ：コマを購入する 
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
