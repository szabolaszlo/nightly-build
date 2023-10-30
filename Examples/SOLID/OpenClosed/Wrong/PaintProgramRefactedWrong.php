<?php

namespace Right;

class PaintProgram
{
    public function draw(Shape $shape)
    {
        $shape->draw();
    }
}

abstract class Shape
{
    protected $width;
    protected $height;
    public abstract function draw();
}

class Circle extends Shape
{
    public function draw()
    {
        // draw a circle
    }
}

class Rectangle extends Shape
{
    public function draw()
    {
        // draw a rectangle
    }
}

