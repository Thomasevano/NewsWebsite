<?php

class Form
{
    public static function textarea($name, $label, $options = array())
    {
        return '<div class="form-group">
                    <label for="' . $name . '" class="col-sm-2 control-label">' . $label . '</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="3" name="' . $name . '" id="' . $name . '"></textarea>
                    </div>
                </div>';
    }

    public static function input($name, $label, $type = 'text', $options = array())
    {
        $attr = '';
        $input = '<div class="form-group">';

        foreach($options as $k => $v)
        {
            $attr .= "$k = $v";

        }

        $input .= '<label for="' . $name . '" class="col-sm-2 control-label">' . $label . '</label>
                    <div class="col-sm-10">
                        <input type="' . $type . '" name="' . $name . '" class="form-control" id="' . $name . '" '.$attr.'>
                    </div>
                </div>';
        return $input;
    }

    public static function hidden($name, $value, $options = array())
    {
        $result = '<div class="form-group">
                    <div class="col-sm-10">
                        <input class="form-control" type="hidden" name="'.$name.'">
                    </div>
                    </div>';
    }
}

?>