<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\JsonModel;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        try {
            $connection = new \PDO("mysql:host=127.0.0.1;port=3306;dbname=calidad_software", "root", "1234");
            $query      = $connection->query('select * from usuario');
//            $query->execute();
            $data = $query->fetchAll();
            echo "</pre>";
            print_r($data);
            exit;
        } catch (\Exception $e) {
            echo "</pre>";
            print_r($e->getMessage());
            exit;
        }

        return new JsonModel(array("working" => true));
//        return new ViewModel();
    }
}
