<?php

function isChecked($arr, $value)
{
    if(isset($_REQUEST[$arr]) && is_array($_REQUEST[$arr]) && in_array($value,$_REQUEST[$arr])){
        return 'checked';
    }
}


function isSelected(){

}

function selectOptoins(array $options,$slelectedArr=[])
{
    $slelectedOptions = [];
    $slelectedOptions = filter_input(INPUT_POST,$slelectedArr,FILTER_SANITIZE_STRING,FILTER_REQUIRE_ARRAY);
    if(is_array($options)){
        foreach ($options as $option){
            $selected = '';
            if(in_array(strtolower($option),$slelectedOptions)){
                $selected = 'selected';
            }
            printf("<option value='%s' %s>%s</option>",strtolower($option),$selected,$option);

        }
    }
}

?>