<?php

/**
 * Use "strict_types=1" in all files
 *  - catches type related bugs early and promotes more thoughtful code
 */
declare(strict_types=1);

/**
 * Type Declarations
 *  - always specify property types (when possible)
 *  - always specify parameter types (when possible)
 *  - always specify return types (when possible)
 *      - use "void" for functions that don't return a value
 *      - use "never" for functions that always throw an exception
 */

/**
 * Type-casting over dedicated methods for better performance
 */
$score = (int) '7';
$hasMadeAnyProgress = (bool) $this->score;

// BAD
$score = intval('7');
$hasMadeAnyProgress = boolval($this->score);



