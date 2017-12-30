<?php

namespace Circle314\Concept\Value;

use Circle314\Component\CQS\CQSQueryInterface;
use Circle314\Concept\Value\Defaultable\DefaultableValueCQSQueryInterface;
use Circle314\Concept\Value\Gettable\GettableValueCQSQueryInterface;
use Circle314\Concept\Value\Settable\SettableValueCQSQueryInterface;

/**
 * An interface for value queries
 *
 * @package     Circle314\Concept
 * @author      Kjartan Johansen <kjartan@artofwar.cc>
 * @copyright   Copyright (c) Kjartan Johansen
 * @license     https://www.apache.org/licenses/LICENSE-2.0
 * @link        https://github.com/circle314/concept
 */
interface ValueCQSQueryInterface extends
    CQSQueryInterface,
    ValueCQSCastingInterface,
    DefaultableValueCQSQueryInterface,
    GettableValueCQSQueryInterface,
    SettableValueCQSQueryInterface
{
}