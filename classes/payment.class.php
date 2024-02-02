<?php 

interface PaymentProcess{
 public function pay();
 public function process();
}

class Paypal implements PaymentProcess {
  public function loginFirst(){}
  public function pay(){}
  public function process(){
  $this->loginFirst();
  $this->pay();
 }
}
class Gcash implements PaymentProcess{
   public function pay(){}
   public function process(){
   $this->pay();
 }

}
class Visa implements PaymentProcess{
   public function pay(){}
   public function process(){
   $this->pay();
}
}

class Buy{
 public function payNow(PaymentProcess $paymentType){
  $paymentType -> process();
 }
}

$paymentTye = new Buy();
$buyProduct->payNow();
$buyProduct->process($paymentTye);
?>