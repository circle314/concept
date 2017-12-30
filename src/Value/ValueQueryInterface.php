<?php

namespace Circle314\Concept\Value;

use Circle314\Component\CQS\CQSQueryInterface;
use Circle314\Concept\Value\Defaultable\DefaultableValueQueryInterface;
use Circle314\Concept\Value\Gettable\GettableValueQueryInterface;
use Circle314\Concept\Value\Settable\SettableValueQueryInterface;

/**
 * An interface for value queries
 *
 * @package     Circle314\Concept
 * @author      Kjartan Johansen <kjartan@artofwar.cc>
 * @copyright   Copyright (c) Kjartan Johansen
 * @license     https://www.apache.org/licenses/LICENSE-2.0
 * @link        https://github.com/circle314/concept
 */
interface ValueQueryInterface extends
    CQSQueryInterface,
    DefaultableValueQueryInterface,
    GettableValueQueryInterface,
    SettableValueQueryInterface
{
}