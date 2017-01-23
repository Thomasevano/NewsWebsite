<?php
class Session
{
    public static function flash()
    {
        if(isset($_SESSION['flash']))
        {
            extract($_SESSION['flash']);
            unset($_SESSION['flash']);
            return '<div class="alert alert-'.$type.' alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>'.$message.'</strong>
</div>';
        }
    }
    
    public static function setflash($message, $type = 'success')
    {
        $_SESSION['flash']['message'] = $message;
        $_SESSION['flash']['type'] = $type;
    }


    public static function flash_link()
    {
        if(isset($_SESSION['flash_link']))
        {
            extract($_SESSION['flash_link']);
            unset($_SESSION['flash_link']);
            return '<div class="alert alert-'.$type.'" role="alert">
  <a href="'.$link.'" class="alert-link">'.$message.'</a>
</div>';
        }
    }

    public static function setflash_link($message,$link,$type = 'success')
    {
        $_SESSION['flash_link']['message'] = $message;
        $_SESSION['flash_link']['link'] = $link;
        $_SESSION['flash_link']['type'] = $type;
    }
}
?>