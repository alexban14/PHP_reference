<?php

/**
 * Final by default
 *
 * use `final` for classes and `private` for methods by default
 *
 * encourage:
 *  - composition
 *  - dependency injection
 *  - interface use over inheritance
 */

final class Foo
{
    private function bar()
    {
    }
}

/**
 * Class name resolution
 */

// GOOD
use App\Modules\Payment\Models\Order;
echo Order::class;

// BAD
echo 'App\Modules\Payment\Models\Order';


/**
 * `self` keyword
 *
 * use `self` over class name for return type hints and instantiation within the class
 */
class User {
    public static function createFromName(string $name): self
    {
        return new self($name);
    }
}

/**
 * Named constructors
 *
 * - use named static constructors to create objects with valid state
 */

class AlmostMember {
    private string $company_name;
    private string $country;

    public static function createFromSignup(AlmostMember $almostMember): self
    {
        return new self(
            $almostMember->company_name,
            $almostMember->country,
        );
    }
}

/**
 * Domain specific operators
 *
 * - encapsulation for domain logic in specific methods, rather than using generic setters
 *
 * Further study: class invariants (https://www.geeksforgeeks.org/what-is-class-invariant/)
 *  - the dangers of modifying class properties from controllers/services
 */

class AuthService {
    private string $email;
    private string $email_awaiting_confirmation;

    // GOOD
    public function confirmEmailAwaitingConfirmation(): void
    {
        $this->email = $this->email_awaiting_confirmation;
        $this->email_awaiting_confirmation = null;
    }

    // BAD
    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }
}

/**
 * Enums
 * - singular names
 * - PascalCase, for case names
 */

enum Suit {
    case Hearts;
    case Diamonds;
    case Clubs;
    case Spades;
}
