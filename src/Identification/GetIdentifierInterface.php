<?php

namespace Circle314\Concept\Identification;

/**
 * An interface for getting identifiers
 *
 * @package     Circle314\Concept
 * @author      Kjartan Johansen <kjartan@artofwar.cc>
 * @copyright   Copyright (c) Kjartan Johansen
 * @license     https://www.apache.org/licenses/LICENSE-2.0
 * @link        https://github.com/circle314/concept
 */
interface GetIdentifierInterface
{
    /**
     * # Retrieves by ID
     * @param $ID mixed
     * @return mixed
     */
    public function getID($ID);
}