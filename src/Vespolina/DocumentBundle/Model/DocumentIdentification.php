<?php
/**
 * (c) Vespolina Project http://www.vespolina-project.org
 *
 * (c) Daniel Kucharski <daniel@xerias.be>
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Vespolina\DocumentBundle\Model;

use Vespolina\DocumentBundle\Model\DocumentIdentificationInterface;

abstract class DocumentIdentification implements DocumentIdentificationInterface {

    protected $id;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function valid( )
    {
        return ($this->id == '' ? true: false);
    }
}
