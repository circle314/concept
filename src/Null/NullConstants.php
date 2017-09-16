<?php

namespace Circle314\Concept\Null;

/**
 * Constants for empty, null, or non-existent concepts
 *
 * @package     Circle314\Concept
 * @author      Kjartan Johansen <kjartan@artofwar.cc>
 * @copyright   Copyright (c) Kjartan Johansen
 * @license     https://www.apache.org/licenses/LICENSE-2.0
 * @link        https://github.com/circle314/concept
 */
abstract class NullConstants
{
    #region Constants
    const EMPTY_JSON_OBJECT = '{}';
    const NO_DEFAULT_VALUE = '__NO_DEFAULT_VALUE__';
    const NON_EXISTENT_PARAMETER = '__NON_EXISTENT_PARAMETER__';
    const NO_RESPONSE_EXISTS = '__NO_RESPONSE_EXISTS__';
    const NO_VALUE = '__NO_VALUE__';
    const UNDEFINED = '__UNDEFINED__';
    #endregion

    #region Constructor
    final private function __construct()
    {
    }
    #endregion
}