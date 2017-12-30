<?php

namespace Circle314\Concept\Value;

interface ValueInterface extends
    ValueCQSCastingInterface,
    ValueCQSCommandInterface,
    ValueCQSQueryInterface
{
}