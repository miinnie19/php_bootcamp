<?php
class Jaime extends Lannister
{
    public function sleepWith($sleepwith)
    {
        if ($sleepwith instanceof Lannister)
        {
            if ($sleepwith instanceof Cersei)
                print "With pleasure, but only in a tower in Winterfell, then." . PHP_EOL;
            else
                print "Not even if I'm drunk !" . PHP_EOL;
        }
        if ($sleepwith instanceof Sansa)
            print "Let's do this." . PHP_EOL;
    }
}
?>