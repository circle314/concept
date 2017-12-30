<?php

namespace Circle314\Concept\Identification;
use Circle314\Component\CQS\CQSInterface;

/**
 * An interface for complete identification and manipulation of identifiers
 *
 * @package     Circle314\Concept
 * @author      Kjartan Johansen <kjartan@artofwar.cc>
 * @copyright   Copyright (c) Kjartan Johansen
 * @license     https://www.apache.org/licenses/LICENSE-2.0
 * @link        https://github.com/circle314/concept
 */
interface IdentifierInterface extends
    IdentifierCQSCastingInterface,
    IdentifierCQSCommandInterface,
    IdentifierCQSQueryInterface
{

}