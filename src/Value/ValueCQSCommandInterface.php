<?php

namespace Circle314\Concept\Value;

use Circle314\Component\CQS\CQSCommandInterface;
use Circle314\Concept\Value\Defaultable\DefaultableValueCQSCommandInterface;
use Circle314\Concept\Value\Gettable\GettableValueCQSCommandInterface;
use Circle314\Concept\Value\Settable\SettableValueCQSCommandInterface;

/**
 * An interface for value commands
 *
 * @package     Circle314\Concept
 * @author      Kjartan Johansen <kjartan@artofwar.cc>
 * @copyright   Copyright (c) Kjartan Johansen
 * @license     https://www.apache.org/licenses/LICENSE-2.0
 * @link        https://github.com/circle314/concept
 */
interface ValueCQSCommandInterface extends
    CQSCommandInterface,
    ValueCQSCastingInterface,
    DefaultableValueCQSCommandInterface,
    GettableValueCQSCommandInterface,
    SettableValueCQSCommandInterface
{
}