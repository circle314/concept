<?php

namespace Circle314\Concept\Value;

use Circle314\Component\CQS\CQSCastingInterface;

interface ValueCQSCastingInterface extends CQSCastingInterface
{
    /**
     * @return ValueCQSCommandInterface
     */
    public function asCommandsOnly();

    /**
     * @return ValueCQSQueryInterface
     */
    public function asQueriesOnly();
}