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

/**
 * Common interface implemented by all numeric types, providing basic
 * arithmetic functions.
 */
interface Numeric
{
    /**
     * @param  Numeric $addend a number to add to this one
     * @return Numeric sum
     */
    function Numeric add(Numeric $addend);

    /**
     * @param  Numeric $subtrahend a number to subtract from this one
     * @return Numeric             difference
     */
    function Numeric sub(Numeric $subtrahend);

    /**
     * @param  Numeric $multiplier a number to multiply this one by
     * @return Numeric             product
     */
    function Numeric mul(Numeric $multiplier);

    /**
     * @param  Numeric $divisor a number to divide this one by
     * @return Numeric          quotient
     */
    function Numeric div(Numeric $divisor);

    /**
     * @param  Numeric $divisor a number to divide this one by
     * @return Numeric          remainder
     */
    function Numeric mod(Numeric $divisor);

    /**
     * @return Numeric absolute value
     */
    function Numeric abs();

    /**
     * @return Numeric negative value
     */
    function Numeric neg();

    /**
     * @return Numeric square root
     */
    function Numeric sqrt();

    /**
     * @return int this number as int
     */
    function int toInt();

    /**
     * @return float this number as float
     */
    function float toDouble();
}
