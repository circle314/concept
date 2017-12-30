<?php

namespace Circle314\Concept\Value\Gettable;
use Circle314\Component\CQS\CQSInterface;

/**
 * An interface for gettable value commands and queries
 *
 * @package     Circle314\Concept
 * @author      Kjartan Johansen <kjartan@artofwar.cc>
 * @copyright   Copyright (c) Kjartan Johansen
 * @license     https://www.apache.org/licenses/LICENSE-2.0
 * @link        https://github.com/circle314/concept
 */
interface GettableValueInterface extends
    CQSInterface,
    GettableValueCommandInterface,
    GettableValueQueryInterface
{
    /**
     * @return GettableValueInterface
     */
    public function asCommandsAndQueries();

    /**
     * @return GettableValueCommandInterface
     */
    public function asCommandsOnly();

    /**
     * @return GettableValueQueryInterface
     */
    public function asQueriesOnly();
}