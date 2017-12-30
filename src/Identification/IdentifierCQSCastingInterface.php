<?php

namespace Circle314\Concept\Identification;

use Circle314\Component\CQS\CQSCastingInterface;

interface IdentifierCQSCastingInterface extends CQSCastingInterface
{
    /**
     * @return IdentifierInterface
     */
    public function asCommandsAndQueries();

    /**
     * @return IdentifierCQSCommandInterface
     */
    public function asCommandsOnly();

    /**
     * @return IdentifierCQSQueryInterface
     */
    public function asQueriesOnly();
}