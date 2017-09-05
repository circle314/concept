<?php

namespace Circle314\Concept\Http;

/**
 * Constants for HTTP request methods
 *
 * @package     Circle314\Concept
 * @author      Kjartan Johansen <kjartan@artofwar.cc>
 * @copyright   Copyright (c) Kjartan Johansen
 * @license     https://www.apache.org/licenses/LICENSE-2.0
 * @link        https://github.com/circle314/concept
 */
abstract class HttpRequestMethodConstants
{
    #region Constants
    const CONNECT = 'CONNECT';
    const DELETE = 'DELETE';
    const GET = 'GET';
    const HEAD = 'HEAD';
    const OPTIONS = 'OPTIONS';
    const PATCH = 'PATCH';
    const POST = 'POST';
    const PUT = 'PUT';
    const TRACE = 'TRACE';
    #endregion

    #region Constructor
    final private function __construct()
    {
    }
    #endregion
}