#!/usr/bin/php
<?php
    while (1)
    {
        echo "Enter a number: ";
        if  ($in = fgets(STDIN))
        {
            $num = rtrim($in, "\n");
            if (is_numeric($num))
            {
                if ($num % 2 == 0)
                    echo "The number $num is even\n";
                else
                    echo "The number $num is odd\n";
            }
            else
                echo "'$num' is not a number\n";
        }
        else
        {
            echo ("\n");
            return;
        }
    }
?>