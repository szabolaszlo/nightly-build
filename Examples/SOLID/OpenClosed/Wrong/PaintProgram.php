<?php

class PaintProgram
{
    public function draw(Shape $shape)
    {
        switch ($shape->getType()) {
            case 'rectangle':
                $this->drawRectangle($shape);
                break;
            case 'circle':
                $this->drawCircle($shape);
                break;
        }
    }

    public function drawRectangle(Shape $shape)
    {
        // draw rectangle
    }

    public function drawCircle(Shape $shape)
    {
        // draw circle
    }
}
