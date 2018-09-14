<?php

namespace Engine;
use Engine\DI\DI;

/**
 * Start work Cms
 *
 * @author SuslikEst
 */
class Cms 
{
    /**
     *
     * @var type DI
     */
    private $di;
    
    /**
     * Constructor Cms
     * @param \Engine\DI $di
     */
    public function __construct(DI $di) 
    {
        $this->di = $di;
    }
    
    /**
     * Run Cms
     */
    public function run() 
    {
//        echo 'Hello world';
//        echo '<pre>';
//        print_r($this->di);
//        echo '</pre>';
        $db = $this->di->get('test');
        print_r($db);
    }
}
