<?php
////// library 

class Job {
    public function task(Logger $logger){
        for($i=0; $i<10; $i++){
            $logger->log("Task $i completed!");
        }
    }
}

class ConsoleLogger implements Logger {
    public function log($message){
        echo $message . "\n";
    }
}

interface Logger {
    public function log($message);
}



////// library user code

class NothingLogger implements Logger {
    public function log2($message){

    }
}

class FileLogger implements Logger {
    public function log($message){
        $file = fopen('log.log', 'a');
        fwrite($file, $message . "\n");
        fclose($file);
    }
}



$job = new Job();
$logger = new NothingLogger();
$job->task($logger);