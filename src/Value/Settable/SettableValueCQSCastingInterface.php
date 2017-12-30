<?php

namespace Circle314\Concept\Value\Settable;

use Circle314\Component\CQS\CQSCastingInterface;

interface SettableValueCQSCastingInterface extends CQSCastingInterface
{
    /**
     * @return SettableValueInterface
     */
    public function asCommandsAndQueries();

    /**
     * @return SettableValueCQSCommandInterface
     */
    public function asCommandsOnly();

    /**
     * @return SettableValueCQSQueryInterface
     */
    public function asQueriesOnly();
}