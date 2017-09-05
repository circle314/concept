<?php

namespace Circle314\Concept\Identification;

/**
 * An interface for saving identifiers
 *
 * @package     Circle314\Concept
 * @author      Kjartan Johansen <kjartan@artofwar.cc>
 * @copyright   Copyright (c) Kjartan Johansen
 * @license     https://www.apache.org/licenses/LICENSE-2.0
 * @link        https://github.com/circle314/concept
 */
interface SaveIdentifierInterface
{
    /**
     * # Stores by ID
     * @param $ID mixed
     * @param $storageItem mixed
     */
    public function saveID($ID, $storageItem);
}