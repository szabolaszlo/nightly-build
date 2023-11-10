<?php

interface SwimAbleDuck
{
    public function swim();
}

interface QuackAbleDuck
{
    public function quack();
}

class Pond
{
    protected SwimManager $swimManager;
    protected QuackManager $quackManager;

    /**
     * @param SwimManager $swimManager
     * @param QuackManager $quackManager
     */
    public function __construct(SwimManager $swimManager, QuackManager $quackManager)
    {
        $this->swimManager = $swimManager;
        $this->quackManager = $quackManager;
    }


    public function makeDuckSwim()
    {
        $this->swimManager->makeDucksSwim();
    }

    public function makeDuckQuack()
    {
        $this->quackManager->makeDucksQuack();
    }
}

class SwimManager
{
    protected $swimAbleDucks = [];

    public function addDuck(SwimableDuck $duck)
    {
        $this->swimAbleDucks[] = $duck;
    }

    public function makeDucksSwim()
    {
        foreach ($this->swimAbleDucks as $duck) {
            $duck->swim();
        }
    }
}

class QuackManager
{
    protected $quackAbleDucks = [];

    public function addDuck(QuackAbleDuck $duck)
    {
        $this->quackAbleDucks[] = $duck;
    }

    public function makeDucksQuack()
    {
        foreach ($this->quackAbleDucks as $duck) {
            $duck->quack();
        }
    }
}

abstract class AbstractSwimAbleDuck implements SwimableDuck
{
    public function swim()
    {
        // let's start swimming
    }
}
interface EatAbleDuck
{
    public function eat();
}
trait EatAbleDuckTrait
{
    public function eat()
    {
        // let's start eating
    }
}

class Duck extends AbstractSwimAbleDuck implements QuackAbleDuck, EatAbleDuck
{
    use EatAbleDuckTrait;

    public function quack()
    {
        // let's start quacking
    }
}

class RubberDuck extends AbstractSwimAbleDuck
{

}
