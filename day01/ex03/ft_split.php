<?php
    function ft_split($str)
    {
        $ret = trim(preg_replace("[\s+]", " ", $str));
        $ret_str = explode(" ", $ret);
        sort($ret_str);
        return ($ret_str);
    }
?>
