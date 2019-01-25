<?php
/**
 * Created by PhpStorm.
 * User: irvintone
 * Date: 27/12/18
 * Time: 16:06
 */

namespace Album\Form;

use Zend\Form\Form;

class AlbumForm extends Form
{
    public function __construct($name = null)
    {
        // We will ignore the name provided to the constructor
//        $this->setAttribute('method', 'GET');
        parent::__construct('album');

        $this->add([
                       'name' => 'id',
                       'type' => 'hidden',
                   ]);
        $this->add([
                       'name'    => 'title',
                       'type'    => 'text',
                       'options' => [
                           'label' => 'Title',
                       ],
                   ]);
        $this->add([
                       'name'    => 'artist',
                       'type'    => 'text',
                       'options' => [
                           'label' => 'Artist',
                       ],
                   ]);
        $this->add([
                       'name'       => 'submit',
                       'type'       => 'submit',
                       'attributes' => [
                           'value' => 'Go',
                           'id'    => 'submitbutton',
                       ],
                   ]);
    }
}