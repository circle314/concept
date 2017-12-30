<?php

namespace Circle314\Concept\Value\Gettable;

use Circle314\Component\CQS\CQSCastingInterface;

interface GettableValueCQSCastingInterface extends CQSCastingInterface
{
    /**
     * @return GettableValueInterface
     */
    public function asCommandsAndQueries();

    /**
     * @return GettableValueCQSCommandInterface
     */
    public function asCommandsOnly();

    /**
     * @return GettableValueCQSQueryInterface
     */
    public function asQueriesOnly();
}