<?php 

function has_username($username)
{
     return (isset($username) && $username !== ''); 
}

function has_password($password)
{
    if(isset($password) && $password !== '')
    {
        return true;
    }
    else
    {
        return false;
    }
}

function has_max_length($password)
{
    if(strlen($password)<=16)
    {
        return true;
    }
    else
    {
        return false;
    }

}

function has_min_length($password)
{
  
    if(strlen($password)>8)
    {
        return true;
    }
    else
    {
        return false;
    }

}

function text_field($text)
{
    if($text!== '' )
    {
        return true;
    }
    else
    {
        return false;
    }

}



function has_errors($errors=array())
{
    $output = "";
    if(!empty($errors))
    {
        $output .= "<div class=\"error\">";
        $output .= "Please fix the following errors: ";
        foreach($errors as $key => $error)
        {
            $output .= "<li>{$error}</li>";
        }
        $output .= "</ul>";
        $output .= "</div>";
        
    }

    return $output;
}

?>