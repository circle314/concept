<?php

namespace Circle314\Concept\Value\Defaultable;

/**
 * An interface for defaultable value commands and queries
 *
 * @package     Circle314\Concept
 * @author      Kjartan Johansen <kjartan@artofwar.cc>
 * @copyright   Copyright (c) Kjartan Johansen
 * @license     https://www.apache.org/licenses/LICENSE-2.0
 * @link        https://github.com/circle314/concept
 */
interface DefaultableValueInterface extends
    DefaultableValueCQSCastingInterface,
    DefaultableValueCQSCommandInterface,
    DefaultableValueCQSQueryInterface
{

}