<?php

namespace Circle314\Concept\Value;

/**
 * An interface for setting values from an Array
 *
 * @package     Circle314\Concept
 * @author      Kjartan Johansen <kjartan@artofwar.cc>
 * @copyright   Copyright (c) Kjartan Johansen
 * @license     https://www.apache.org/licenses/LICENSE-2.0
 * @link        https://github.com/circle314/concept
 * @deprecated  1.1 No longer user by internal code and not recommended
 */
interface ValueSettableFromArrayInterface
{
    /**
     * @param array $array
     */
    public function setValueFromArray(Array $array);
}