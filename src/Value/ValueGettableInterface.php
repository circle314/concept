<?php

namespace Circle314\Concept\Value;

use Circle314\Concept\Value\Gettable\GettableValueInterface;

/**
 * An interface for getting values
 *
 * @package     Circle314\Concept
 * @author      Kjartan Johansen <kjartan@artofwar.cc>
 * @copyright   Copyright (c) Kjartan Johansen
 * @license     https://www.apache.org/licenses/LICENSE-2.0
 * @link        https://github.com/circle314/concept
 * @deprecated  1.1
 * @see         GettableValueInterface
 */
interface ValueGettableInterface
{
    /**
     * @return mixed
     */
    public function getValue();
}