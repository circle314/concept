<?php

namespace Circle314\Concept\Ordering;

/**
 * Constants for ordering
 *
 * @package     Circle314\Concept
 * @author      Kjartan Johansen <kjartan@artofwar.cc>
 * @copyright   Copyright (c) Kjartan Johansen
 * @license     https://www.apache.org/licenses/LICENSE-2.0
 * @link        https://github.com/circle314/concept
 */
abstract class OrderingConstants
{
    #region Constants
    const ASCENDING = 'ascending';
    const ASCENDING_NULLS_FIRST = 'ascendingNullsFirst';
    const DESCENDING = 'descending';
    const DESCENDING_NULLS_LAST = 'descendingNullsLast';
    #endregion

    #region Constructor
    final private function __construct()
    {
    }
    #endregion
}