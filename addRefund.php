<?php
/**
 * Created by PhpStorm.
 * User: unevmerzhuzkiy
 * Date: 6/15/15
 * Time: 6:15 PM
 */

include_once 'library/db.php';
include_once 'library/createRefundItem.php';
include_once 'library/validate.php';

/*$json2 = json_decode($_POST['cancel_info'],true);
var_dump($json2);*/

if(isset($_POST['cancel_info'])){

    $json = json_decode($_POST['cancel_info'],true);
    $keys = $json['key_id'];//array
    $email =$json['email'];
    $amount =$json['amount'];
    echo $email,"\n";
    echo $amount,"\n";
    var_dump($keys);
    /*if(validateRefund($productName,$productId,$productCount)&&validateEmail($email)){

        if(createRefundItem(getConnect(),$email, $productName, $productCount, $orderNumber, $productId)){
            echo 'fail';
        }
        else{
            echo 'success';
        }
    }*/
}
