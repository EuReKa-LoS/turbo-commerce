<?php
//A voir si je garde ca
function validate($rules)
{
    foreach ($rules as $key => $validationsd){
        $value=$_POST[$key] ?? null;
        foreach ($validations as $validation){
            $validation_function = "validate_{$validation}";
            $error = $validation_function($value);
            if($error){
                $_SESSION['previous_inputs'] =  $_SESSION['previous_inputs'] ?? [];
                $_SESSION['previous_inputs'][$key] = $value;
                break;
            }
        }
    }
    if (!empty($_SESSION['previous_errors'])){
        save_inputs();
        redirect_self();
    }
}

?>