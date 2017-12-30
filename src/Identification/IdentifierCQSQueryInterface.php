<?php

namespace Circle314\Concept\Identification;
use Circle314\Component\CQS\CQSQueryInterface;

/**
 * An interface identifier Queries
 *
 * @package     Circle314\Concept
 * @author      Kjartan Johansen <kjartan@artofwar.cc>
 * @copyright   Copyright (c) Kjartan Johansen
 * @license     https://www.apache.org/licenses/LICENSE-2.0
 * @link        https://github.com/circle314/concept
 */
interface IdentifierCQSQueryInterface extends CQSQueryInterface
{
    /**
     * # Retrieves by ID
     * @param $ID mixed
     * @return mixed
     */
    public function getID($ID);

    /**
     * # Queries existence of the ID
     * @param $ID mixed
     * @return bool
     */
    public function hasID($ID);
}