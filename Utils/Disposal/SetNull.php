<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 01/02/18
 * Time: 11:22
 */

namespace SpecShaper\GdprBundle\Utils\Disposal;

use SpecShaper\GdprBundle\Utils\Disposal\Disposalnterface;

class SetNull implements \SpecShaper\GdprBundle\Utils\Disposal\Disposalnterface
{

    public function dispose($parameter)
    {
        return null;
    }
}