<?php

namespace IxDF_handbook\SOLID\dip;

/*
 * Dependency Inversion Principle
 * "Depend on abstractions, not concretions."
 *
 * It refers to a specific form of decoupling software modules.
 * If a class uses other classes, the initialization of the object has to come from the outside.
 *
 * - high-level modules should not depend on low-level modules. Both should depend on abstractions.
 * - abstractions should not depend on details
 * - details should depend on abstractions
 *
 */

// Good example

interface Employee
{
    public function work();
}

class ConstructionWorker implements Employee
{
    public function work() {}
}

class Architect implements Employee
{
    public function work() {}
}

class ElectricalEngineer implements Employee
{
    public function work() {}
}

class SiteManager implements Employee
{
    public function work() {}
}
