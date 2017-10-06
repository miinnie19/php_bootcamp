#!/usr/bin/php
<?
preg_match("/toto/" , "ftstegsheghstotohehjdhfh");//will search for toto in other string
preg_match("/t[oi]t[oi]/" , "ftstegsheghstotohehjdhfh");//will search for either toto or titi
//between the square brackets u can put delimeters
//search pcre regex syntax





?>
//regular expressions


<?
    $name = "key";
    $$name = "val";//$name is now = val;

?>
//variables

<?
    /*access file in php
        $tab = file("data.csv");
        foreach($tab as $elem)
        {
            echo "$elem\n";it will give u the contents of the file
        }
    */

    //another way to do this is to use functiion called "file_get_contents"
    //fopen
    //fgets
    /*access file in php
        $fd = fopen("data.csv", "r");
        while ($line = fgets($fd))
        {
            echo "$line";
        }
        fclose(fd);
    */
    //fgetcsv
    //CSV FILES
     /*access file in php
        $fd = fopen("data.csv", "r");
        while ($tab = fgets($fd, 0, ";"))
        {
            print_r($tab);
        }
        fclose(fd);
    */

?>
//files

<?
    //man eval

   // eval("echo 'hello world';") it will print out hello world


dangerous 
/*
   $my_var = fgets(STDIN);
   rm - rf ~/
   eval ($my_var);
   */
?>
//eval


<?
    //possible to do ===

    /*
        if (hello == "world")
            echo "OK";
        else
            echo "KO";



        
            if (0 == "world")//will be OK php doesnt check the type
                echo "OK";
            else
                echo "KO";

            if (0 === "world")//will be KO because php checks the type
                echo "OK";
            else
                echo "KO";
                
    */
/*
array_search searches for element inside an array
$my_tab = array("meliss" , "hello", "you");
if (array_search("hello", $my_tab)) but if (array_search("meliss", $my_tab))
        //echo "Found\n";                               |
                                                        |
                                                  //return nothing because array_search takes it as 0 index and which means it failed


however

if (array_search("hello", $my_tab) !== FALSE)//what array_search should return is something that is not false
        //echo "Found\n";
        
        so now if u type in array_search("meliss", $my_tab);
        it will return the array at index 0
*/   
?>
//===

<?
    /*
    extention of php

    $c  = curl_init("http://www.42.fr");
     $str = curl_exec($c);

     echo "$str"; gives u information about web pages
    */


?>
//curl




<?

?>








