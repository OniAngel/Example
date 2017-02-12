<?php
/**
 * Created by PhpStorm.
 * User: yorick
 * Date: 9-2-17
 * Time: 17:00
 */

namespace Album\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class AlbumController extends AbstractActionController
{

    protected $albumTable;


    public function indexAction()
    {
        return new ViewModel(array(
            'albums' => $this->getAlbumTable()->fetchAll(),
        ));
    }

    public function addAction()
    {

    }

    public function editAction()
    {

    }

    public function deleteAction()
    {

    }

    public function getAlbumTable()
    {
        if (!$this->albumTable) {
            $sm = $this->getServiceLocator();
            $this->albumTable = $sm->get('Album\Model\AlbumTable');
        }
        return $this->albumTable;
    }

}