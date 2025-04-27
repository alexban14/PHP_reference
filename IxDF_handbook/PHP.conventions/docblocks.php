<?php

/**
 * - avoid dockblocks for fully type-hinted methods/functions unless a description is needed
 * - use docblocks to reveal the contents of arrays/collections
 * - write them in one line if possible
 * - always use fully qualified class names
 */

// GOOD
final class Foo
{
    /** @var list<string> */
    public array $urls;

    /** @var \Illuminate\Support\Collection<int, \App\Models\User> */
    public Collection $users;
}

/**
 * Inheritance and @inheritdoc
 *
 * - use @inheritdoc for classes and methods to make inheritance explicit
 * - for properties, copy the docblock from the parent class/interface
 */

/**
 * Use advanced PHPDoc syntax to describe traversal types
 */


/* @return list<string> */
/* @return array<int, Type> */
/* @return Collection<TKey, TValue> */
/* @return array{foo: string, optional?: int} */
