<?php declare(strict_types=1);

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
     * 
     * @param \Engine\DI $di
     */
    public function __construct(DI $di)
    {
        $this->di = $di;
    }
    
    /**
     * Run Cms
     */
    public function run(): void 
    {
//        echo 'Hello world';
//        echo '<pre>';
//        print_r($this->di);
//        echo '</pre>';
        $db = $this->di->get('db');
        print_r($db);
//        $insert = $db->query("INSERT INTO posts (title, content) VALUES (:title, :content)", [
//       'title' => 'Hello World333',
//       'content' => 'Wrire content333'
//        ]);
//        if ($insert > 0) {
//            print('Success!!!');
//        }
      }
}
