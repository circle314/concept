<?php

namespace Circle314\Concept\Value\Settable;

use Circle314\Component\CQS\CQSCommandInterface;

/**
 * An interface for settable value commands
 *
 * @package     Circle314\Concept
 * @author      Kjartan Johansen <kjartan@artofwar.cc>
 * @copyright   Copyright (c) Kjartan Johansen
 * @license     https://www.apache.org/licenses/LICENSE-2.0
 * @link        https://github.com/circle314/concept
 */
interface SettableValueCQSCommandInterface extends CQSCommandInterface
{
    public function setValue($value): void;
}