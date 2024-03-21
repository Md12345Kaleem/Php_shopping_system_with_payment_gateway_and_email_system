<?php
$product_name = $_POST['product_name'];
$price = $_POST['product_price'];
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];

include 'instamojo/Instamojo.php';
$api = new Instamojo\Instamojo('test_55a98d190c95f7470de7984f709f0280','test_daa8f5287d3e3c0f4a154d2d709631af', 'https://test.instamojo.com/api/1.1/');

try {
          $response = $api->createPaymentRequest(array(
              "purpose" => $product_name,
              "amount" => $price,
              "send_email" => true,
              "email" => $email,
              "buyer_name"=>$name,
              "Phone"=>$phone,
              "send_sms"=>true,
              "allow_repeated_payments"=>false,
              "redirect_url" => "http://http://localhost/payment_gateway/thankyou.php"
              //"webhook"=>
              ));
          //print_r($response);

          $pay_url=$response['longurl'];
          header("location:$pay_url");
      }
      catch (Exception $e) {
          print('Error: ' . $e->getMessage());
      }

?>