<?php

/**
 * Use string interpolation above `sprintf` and concatenation `.`
 * - variables must always be wrapped in braces `{}`
 */

$name = 'Alex';
// GOOD
$greeting = "Hi, I am {$name}.";

// BAD (hard to distinguish the variable)
$greeting = "Hi, I am $name.";
// BAD (less readable)
$greeting = 'Hi, I am '.$name.'.';
$greeting = 'Hi, I am ' . $name . '.';


/**
 * sprintf - for more complex interpolation where there are a lot of variables to concatenate
 */

class ClientService {
    public function register(): void {
        $debugInfo = sprintf('Current FQCN is %s. Method name is: %s', self::class, __METHOD__);
    }
}


