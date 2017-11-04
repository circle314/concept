<?php

namespace Circle314\Concept\Value;

use Circle314\Concept\Value\Defaultable\DefaultableValueCommandInterface;
use Circle314\Concept\Value\Gettable\GettableValueCommandInterface;
use Circle314\Concept\Value\Settable\SettableValueCommandInterface;

/**
 * An interface for value commands
 *
 * @package     Circle314\Concept
 * @author      Kjartan Johansen <kjartan@artofwar.cc>
 * @copyright   Copyright (c) Kjartan Johansen
 * @license     https://www.apache.org/licenses/LICENSE-2.0
 * @link        https://github.com/circle314/concept
 */
interface ValueCommandInterface extends
    DefaultableValueCommandInterface,
    GettableValueCommandInterface,
    SettableValueCommandInterface
{
}