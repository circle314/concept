<?php

namespace Circle314\Concept\Value\Settable;
use Circle314\Component\CQS\CQSInterface;

/**
 * An interface for settable value commands and queries
 *
 * @package     Circle314\Concept
 * @author      Kjartan Johansen <kjartan@artofwar.cc>
 * @copyright   Copyright (c) Kjartan Johansen
 * @license     https://www.apache.org/licenses/LICENSE-2.0
 * @link        https://github.com/circle314/concept
 */
interface SettableValueInterface extends
    CQSInterface,
    SettableValueCommandInterface,
    SettableValueQueryInterface
{
    /**
     * @return SettableValueInterface
     */
    public function asCommandsAndQueries();

    /**
     * @return SettableValueCommandInterface
     */
    public function asCommandsOnly();

    /**
     * @return SettableValueQueryInterface
     */
    public function asQueriesOnly();
}