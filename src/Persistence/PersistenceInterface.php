<?php

namespace Circle314\Concept\Persistence;

/**
 * An interface for persistence
 *
 * @package     Circle314\Concept
 * @author      Kjartan Johansen <kjartan@artofwar.cc>
 * @copyright   Copyright (c) Kjartan Johansen
 * @license     https://www.apache.org/licenses/LICENSE-2.0
 * @link        https://github.com/circle314/concept
 */
interface PersistenceInterface
{
    /**
     * @param mixed $parameters
     * @return mixed
     */
    public function delete($parameters);

    /**
     * @param mixed $parameters
     * @return mixed
     */
    public function get($parameters);

    /**
     * @param mixed $parameters
     * @return mixed
     */
    public function save($parameters);
}