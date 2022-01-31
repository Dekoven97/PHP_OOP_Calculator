<?php

class Calc{
public $operator;
public $num1;
public $num2;



public function __construct(string $one, int $two, int $three){
   $this->operator = $one;
   $this->num1 = $two;
   $this->num2 = $three;

}
public function calculator(){
switch ($this->operator) {
    case 'add':
        # code...
        $result = $this->num1 + $this->num2;
        echo $result;
        break;
    case 'sub':
            # code...
        $result = $this->num1 - $this->num2;
        echo $result;
        break;

        case 'mul':
            # code...
            $result = $this->num1 * $this->num2;
            echo $result;
            break;

            case 'div':
                # code...
                $result = $this->num1 / $this->num2;
                echo $result;
                break;



    
    default:
        echo "veuillez réessayer ";
        break;
}


}

}





?>