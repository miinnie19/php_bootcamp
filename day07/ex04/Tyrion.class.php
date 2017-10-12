<?php
class Tyrion extends Lannister
{
    public function sleepWith($sleepwith)
    {
        if ($sleepwith instanceof Lannister)
            print "Not even if I'm drunk !" . PHP_EOL;
        if ($sleepwith instanceof Sansa)
            print "Let's do this." . PHP_EOL;
    }
}
?>