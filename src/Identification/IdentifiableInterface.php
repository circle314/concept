<?php

namespace Circle314\Concept\Identification;

/**
 * An interface for basic identification
 *
 * @package     Circle314\Concept
 * @author      Kjartan Johansen <kjartan@artofwar.cc>
 * @copyright   Copyright (c) Kjartan Johansen
 * @license     https://www.apache.org/licenses/LICENSE-2.0
 * @link        https://github.com/circle314/concept
 */
interface IdentifiableInterface
{
    /**
     * # Returns the identifier for the object.
     * @return mixed
     */
    public function ID();
}