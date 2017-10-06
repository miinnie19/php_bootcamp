#!/usr/bin/php
<?php
    $random_array = array("melissa" , "Jen", "123 jason", "PA", "87387387283728", "$1", "pandadrive23", "12345", "p* 1 ",
    "<p>Random Text</p>", "Jennifer", "Jenny", "Doctor", "Doug", "Dog", "$5,534", "(412)-537-5555", "12/31/1974");
    $matchname = preg_grep("%melissa%", $random_array);
    $matchnumber = preg_grep("%\d{5}%", $random_array);//this will search only numbers that contain 5 digits
    $matchweird = preg_grep("%\w*\b\d\s$%", $random_array);
    $matchfirst = preg_grep("%^<.*>(.*)<.*>$%", $random_array);//^ look for <.(any type of character>)
    $matchfind = preg_grep("%Je[n|nnifer|nny]%", $random_array);
    $matchspec = preg_grep("%^Do[^g|ug]%", $random_array);
    $matchmoney = preg_grep('%\$\d{1,5}[,]{1,5}%', $random_array);
    $matchjason = preg_grep("%\d{1,3}\s\w[jason]%", $random_array);
    $matchphone = preg_grep("%\(?[0-9]{3}\)?-?[0-9]{3}[-. ]?[0-9]{4}%", $random_array);//this means that it might or might not have brackets in the number (?)
    $matchdate = preg_grep("%(0?[1-9]|[12][0-9]|3[01])[-/.](0?[1-9]|[12][0-9]|3[01])[-/.](0?[1-9]|[12][0-9]|3[01])[-/.](19|20)?[0-9]{2}%", $random_array);
    foreach($matchname as $result)
    {
        echo $result."\n";
    }
    foreach($matchnumber as $ret)
    {
        echo $ret."\n";
    }
    foreach($matchweird as $weird)
    {
        echo $weird."\n";
    }
    foreach($matchfirst as $first)
    {
        echo $first."\n";
    }
    foreach($matchfind as $find)
    {
        echo $find."\n";
    }
    foreach($matchspec as $spec)
    {
        echo $spec."\n";
    }
    foreach($matchmoney as $money)
    {
        echo $money."\n";
    }
    foreach($matchjason as $jason)
    {
        echo $jason."\n";
    }
    foreach($matchphone as $phone)
    {
        echo $phone."\n";
    }
    foreach($matchdate as $date)
    {
        echo $date."\n";
    }
?>