<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Album\Controller;

use Album\Form\AlbumForm;
use Album\Model\Album;
use Album\Model\AlbumTable;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\JsonModel;
use Zend\View\Model\ViewModel;

class AlbumController extends AbstractActionController
{
    private $table;
    public function __construct(AlbumTable $table)
    {
        $this->table = $table;
    }

    public function indexAction()
    {

        $data = $this->table->fetchAll();
        return new ViewModel(array('albums' => $data));
    }

    public function addAction()
    {
        $form = new AlbumForm();
        $form->get('submit')->setValue('Add');

        $request = $this->getRequest();

        if (! $request->isPost()) {
            return ['form' => $form];
        }

//        $album = new Album();
//        $form->setInputFilter($album->getInputFilter());
//        $form->setData($request->getPost());
//
//        if (! $form->isValid()) {
//            return ['form' => $form];
//        }
//
//        $album->exchangeArray($form->getData());
//        $this->table->saveAlbum($album);
//        return $this->redirect()->toRoute('album');
    }

    public function editAction()
    {
        echo "</pre>";print_r("edit action");exit;
    }

    public function deleteAction()
    {
        echo "</pre>";print_r("delete");exit;
        
    }
}
