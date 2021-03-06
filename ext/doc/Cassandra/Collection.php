<?php

/**
 * Copyright 2015 DataStax, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Cassandra;

use Countable;
use IteratorAggregate;

/**
 * A PHP representation of the CQL `list` datatype
 */
final class Collection implements Countable, IteratorAggregate
{
    /**
     * Creates a new collection of a given type
     * @param string $type one of `Cassandra::TYPE_*`
     */
    public function __construct(string $type) {}

    /**
     * The type of this collection
     * @return string one of `Cassandra::TYPE_*`
     */
    public function string type() {}

    /**
     * Array of values in this collection
     * @return array values
     */
    public function array values() {}

    /**
     * Adds one or more values to this collection
     * @param mixed $value,... one or more values to add
     * @return int total number of values in this collection
     */
    public function int add(mixed $value) {}

    /**
     * Retrieves the value at a given index
     * @param   int         $index  Index
     * @return  mixed|null          Value
     */
    public function mixed|null get(int $index) {}

    /**
     * Finds index of a value in this collection
     * @param   mixed     $value Value
     * @return  int|null         Index
     */
    public function int|null find(mixed $value) {}
}
