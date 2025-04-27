<?php

/*
 * Liskov Substitution Principle
 *
 * "Derived classes must be substitutable for their base classes."
 *  Every class that inherit from a parent class must not replicate behaviour from the parent class
*/

interface Quadrilateral
{
    public function setHeight(int $h): void;
    public function setWidth(int $w): void;
    public function getArea(): int;
}

class Rectangle implements Quadrilateral {
    private int $height;
    private int $width;
    public function setHeight(int $h): void {
        $this->height = $h;
    }
    public function setWidth(int $w): void {
        $this->width = $w;
    }
    public function getArea(): int {
        return $this->height * $this->width;
    }
}

class Square implements Quadrilateral {
    private int $side;
    public function setHeight(int $h): void {
        $this->side = $h;
    }
    public function setWidth(int $w): void {
        $this->side = $w;
    }
    public function getArea(): int {
        return $this->side * $this->side;
    }
}
