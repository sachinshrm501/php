<?php
//self operator: self operator represents the current class and thus is used to access class variables or static variables because these members belongs to a class rather than the object of that class. 

class Logger
{
    public function log()
    {
        echo "User log created";
    }
}

class User
{
    private $logger;
    //without DI
    // public function __construct()
    // {
    //     $this->logger = new Logger();
    // }
    //With DI
    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }


    function usercreate()
    {
        $this->logger->log("User created");
    }
}
$logger = new Logger();
$log = new User($logger);
$log->usercreate();
