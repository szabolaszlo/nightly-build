<?php

namespace Right;

class PaintProgram
{
    public function draw(ShapeDrawer $drawer, Shape $shape)
    {
        $drawer->draw($shape);
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

abstract class ShapeDrawer
{
    public abstract function draw(Shape $shape);
}

class CircleDrawer extends ShapeDrawer
{
    public function draw(Shape $shape)
    {
        // draw a circle
    }
}

class RectangleDrawer extends ShapeDrawer
{
    public function draw(Shape $shape)
    {
        // draw a rectangle
    }
}
