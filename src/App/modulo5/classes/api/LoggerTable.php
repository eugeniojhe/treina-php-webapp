<?php

use modulo5\classes\api\Logger;

class LoggerTable extends Logger
{
    public function write($message)
    {

        $sql = "INSERT INTO {$this->filename} (message) VALUES ('{$message}')";
        print $sql;
       $conn = \Transaction::get();
       return $conn->exec($sql);
    }
}