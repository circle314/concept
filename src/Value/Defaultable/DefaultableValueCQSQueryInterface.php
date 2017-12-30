<?php

namespace Circle314\Concept\Value\Defaultable;

use Circle314\Component\CQS\CQSQueryInterface;

/**
 * An interface for defaultable value queries
 *
 * @package     Circle314\Concept
 * @author      Kjartan Johansen <kjartan@artofwar.cc>
 * @copyright   Copyright (c) Kjartan Johansen
 * @license     https://www.apache.org/licenses/LICENSE-2.0
 * @link        https://github.com/circle314/concept
 */
interface DefaultableValueCQSQueryInterface extends CQSQueryInterface
{
    public function getDefaultValue();
    public function hasDefaultValue(): bool;
}