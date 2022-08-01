<?php

if (! function_exists('getRequestErrors')) {
    function getRequestErrors($errors=null,$attribute=null,$glue='<br>') {
        if($errors && $attribute){
        	return implode($glue, $errors->get($attribute));
        }
        return null;
    }
}