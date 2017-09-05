<?php

namespace Circle314\Concept\Identification;

/**
 * An interface for determining if an identifier exists
 *
 * @package     Circle314\Concept
 * @author      Kjartan Johansen <kjartan@artofwar.cc>
 * @copyright   Copyright (c) Kjartan Johansen
 * @license     https://www.apache.org/licenses/LICENSE-2.0
 * @link        https://github.com/circle314/concept
 */
interface HasIdentifierInterface
{
    /**
     * # Queries existence of the ID
     * @param $ID mixed
     * @return bool
     */
    public function hasID($ID);
}