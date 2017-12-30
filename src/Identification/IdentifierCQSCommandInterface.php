<?php

namespace Circle314\Concept\Identification;

use Circle314\Component\CQS\CQSCommandInterface;

/**
 * An interface identifier Commands
 *
 * @package     Circle314\Concept
 * @author      Kjartan Johansen <kjartan@artofwar.cc>
 * @copyright   Copyright (c) Kjartan Johansen
 * @license     https://www.apache.org/licenses/LICENSE-2.0
 * @link        https://github.com/circle314/concept
 */
interface IdentifierCQSCommandInterface extends CQSCommandInterface, IdentifierCQSCastingInterface
{
    /**
     * Deletes by ID
     *
     * @param $ID mixed
     * @return mixed
     */
    public function deleteID($ID);

    /**
     * # Stores by ID
     * @param $ID mixed
     * @param $storageItem mixed
     */
    public function saveID($ID, $storageItem);
}