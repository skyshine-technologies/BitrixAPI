<?php

namespace Skyshinein31\Bitrix;

use App\Http\Controllers\Controller;
use CRest;
use Illuminate\Http\Request;

class BitrixController extends Controller
{
    public static function callMethod($method, $params){
        return CRest::call($method, $params);
    }
    public static function install(Request $request){
        $result = CRest::installApp($request);
        if($result['rest_only'] === false):?>
            <head>
                <script src="//api.bitrix24.com/api/v1/"></script>
                <?php if($result['install'] == true):?>
                    <script>
                        BX24.init(function(){
                            BX24.installFinish();
                        });
                    </script>
                <?php endif;?>
            </head>
            <body>
                <?php if($result['install'] == true):?>
                    installation has been finished
                    <br>
                    
                <?php else:?>
                    installation error
                <?php endif;?>
            </body>
        <?php endif;
    }

    public static function index2(){
        return "test";
    }
}
