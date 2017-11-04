<?php

namespace Circle314\Concept\Value;

/**
 * An interface for complete manipulation and handling of values
 *
 * @package     Circle314\Concept
 * @author      Kjartan Johansen <kjartan@artofwar.cc>
 * @copyright   Copyright (c) Kjartan Johansen
 * @license     https://www.apache.org/licenses/LICENSE-2.0
 * @link        https://github.com/circle314/concept
 * @deprecated  1.1
 * @see         ValueInterface
 */
interface ValueHandlerInterface extends ValueDefaultableInterface, ValueGettableInterface, ValueSettableInterface, ValueSettableFromArrayInterface
{
}