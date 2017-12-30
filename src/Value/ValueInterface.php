<?php

namespace Circle314\Concept\Value;

use Circle314\Component\CQS\CQSInterface;

interface ValueInterface extends
    CQSInterface,
    ValueCommandInterface,
    ValueQueryInterface
{
    /**
     * @return ValueInterface
     */
    public function asCommandsAndQueries();

    /**
     * @return ValueCommandInterface
     */
    public function asCommandsOnly();

    /**
     * @return ValueQueryInterface
     */
    public function asQueriesOnly();
}