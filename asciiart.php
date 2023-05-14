<?php
    function asciiart($input){
        $input = $input;
        $output = array('<span>');
        $test = ' ';
        $j = 0;
        for($i = 0; $i < strlen($input); $i += 1){
            if($test == $input[$i]){
                $output[$j] .= ' ';
            }
            else{
                $output[$j] .= '</span>';
                if($input[$i] == 'x'){
                    $i += 1;
                    $j += 1;
                    array_push($output, '');
                }
                $output[$j] .= '<span';
                if($input[$i] != ' ' and $input[$i] != 'x'){
                    $output[$j] .= ' style="background-color: ';
                }
                if($input[$i] == 'f'){
                    $output[$j] .= 'white;"';
                }
                if($input[$i] == "h"){
                    $output[$j] .= 'grey;"';
                }
                $output[$j] .= '> ';
                $test = $input[$i];
            }
        }
        return $output;
    }
?>