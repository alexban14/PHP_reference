<?php

namespace IxDF_handbook\SOLID\isp;

/*
 * Interface Segregation Principle
 *
 * This principle proposes to divide interfaces so they are more specific
 * A class can implement multiple interfaces simultaneously.
 * Clients shouldn't be forced to deploy unnecessary methods.
*/

interface Employee
{
    public function takeBreak();
    public function getPaid();
}

interface Coder {
    public function code();
}

interface ClientFacer {
    public function callToClient();
    public function attendMeetings();
}

class Developer implements Employee, Coder {
    // TODO: implement
    public function takeBreak() {}

    // TODO: implement
    public function getPaid() {}

    // TODO: implement
    public function code() {}
}

class Manager implements Employee, ClientFacer {
    // TODO: implement
    public function takeBreak() {}

    // TODO: implement
    public function getPaid() {}
    // TODO: implement
    public function callToClient() {}
    // TODO: implement
    public function attendMeetings() {}
}
