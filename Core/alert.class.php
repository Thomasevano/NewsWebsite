<?php

class Alert
{
    public static function alert_message($message, $type = 'success')
    {
        $alert = '<div class="alert alert-' . $type . ' alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <strong>' . $message . '</strong>
              </div>';

        return $alert;
    }


    public static function alert_message_link($message, $link, $type = 'success')
    {
        $alert_link = '<div class="alert alert-' . $type . '" role="alert">
            <a href="'.$link.'" class="alert-link">' . $message . '</a>
            </div>';

        return $alert_link;
    }
}
