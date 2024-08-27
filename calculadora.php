<?php
    $x = $_POST['x'];
    $y = $_POST['y'];
    $op = $_POST['op'];

    if($op == 'op-soma'){
        echo "Operação escolhida: Adição<br>";
        echo "$x + $y = ".($x+$y)."<br>";
    }
    else if($op == 'op-sub'){
        echo "Operacao escolhida: Subtração<br>";
        echo "$x - $y =".($x-$y)."<br>";
    }
    else if($op == 'op-mult'){
        echo "Operação escolhida: Multiplicação<br>";
        echo "$x x $y = ".($x*$y)."<br>";
    }
    else if($op == 'op-div'){
        echo "Operacao escolhida: Divisão<br>";
        if($y == 0){
            echo "Impossivel dividir!<br>";
            echo "Escolha um valor para y que seja diferente de 0";
        }
        else
        echo "$x ÷ $y =".($x/$y)."<br>";
    }
    else if($op == 'op-pot'){
        echo "Operacao escolhida: Potenciação<br>";
        if($y == ''){
            echo $x."^0 = ".(pow($x, 0))."<br>";
        }
        else if($y == 2){
            echo $x."^$y = ".(pow($x, 2))."<br>";
        }
        else if($y == 3){
            echo $x."^$y = ".(pow($x, 3))."<br>";
        }
        else{
        echo $x."^$y = ".(pow($x, $y))."<br>";
        }
    }
    else if($op == 'op-rad'){
        echo "Operacao escolhida: Radiciação<br>";
        if($y == 2){
            echo "raiz quadrada de $x: ".($x**(1/2))."<br>";
        }
        else if($y == 3){
            echo "raiz cubica de $x: ".($x**(1/3))."<br>";
        }
        else
            echo "raiz de indice $y de $x: ".($x**(1/$y))."<br>";
    }
    else if($op == 'op-log'){
        echo "Operacao escolhida: Logaritmo<br>";
        if($y == '' or $y == 10){
            echo "log10($x) = ".(log10($x))."<br>";
        }
        else
            echo "log$y($x) = ".(log($x,$y))."<br>";
    }
?>