<?php
    $num1 = 10;
    $num2 = 20;
    $operator = "+";
   // $operator = "-";
   // $operator = "*";
   // $operator = "/";
    $result = '';
            switch ($operator) {
                case '+':
                    $result = $num1 + $num2;
                    break;
                case '-':
                    $result = $num1 - $num2;
                    break;
                case '*':
                    $result = $num1 * $num2;
                    break;
                case '/':
                    if ($num2 != 0) { 
                        $result = $num1 / $num2;
                    } else {
                        $result = '0-a bölmek olmaz!';
                    }
                    break;
                default:
                    $result = 'bele bir operator movcud deyil!';
                    break;
            }
            echo "Cavab: $result";
    ?>