<?php

namespace Circle314\Concept\Value;

use Circle314\Concept\Value\Defaultable\DefaultableValueInterface;

/**
 * An interface for default value application and retrieval
 *
 * @package     Circle314\Concept
 * @author      Kjartan Johansen <kjartan@artofwar.cc>
 * @copyright   Copyright (c) Kjartan Johansen
 * @license     https://www.apache.org/licenses/LICENSE-2.0
 * @link        https://github.com/circle314/concept
 * @deprecated  1.1
 * @see         DefaultableValueInterface
 */
interface ValueDefaultableInterface
{
    public function applyDefaultValue();
    public function getDefaultValue();
    public function hasDefaultValue();
}