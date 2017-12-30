<?php

namespace Circle314\Concept\Value\Defaultable;

use Circle314\Component\CQS\CQSCastingInterface;

interface DefaultableValueCQSCastingInterface extends CQSCastingInterface
{
    /**
     * @return DefaultableValueCQSCommandInterface
     */
    public function asCommandsOnly();

    /**
     * @return DefaultableValueCQSQueryInterface
     */
    public function asQueriesOnly();
}