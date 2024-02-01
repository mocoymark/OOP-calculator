<?php 

class EquationModel{
    public function calculate($num1, $num2, $operator){
        switch($operator){
            case 'add':
                return $num1 + $num2;
            case 'sub':
                return $num1 - $num2;
            case 'mul':
                return $num1 * $num2;
            case 'div':
                return $num1 / $num2; 
            default:
                return "Invalid Operator";
        }
    }            
}

class EquationController{
    public function calculate($num1, $num2, $operator){
        $model = new EquationModel();
        $result = $model->calculate($num1, $num2, $operator);
        return $result;
    }
}

$controller = new EquationController();

if($_SERVER["REQUEST_METHOD"] == "POST"){ 
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];
    $result = $controller->calculate($num1, $num2, $operator);
}
?>