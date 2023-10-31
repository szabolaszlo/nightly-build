<?php

class Pond
{
    protected $ducks;

    public function addDuck(Duck $duck)
    {
        $this->ducks[] = $duck;
    }

    public function makeDuckSwim()
    {
        foreach ($this->ducks as $duck) {
            $duck->swim();
        }
    }

    public function makeDuckQuack()
    {
        foreach ($this->ducks as $duck) {
            $duck->quack();
        }
    }
}

class Duck
{
    public function swim()
    {
        // let's start swimming
    }

    public function quack()
    {
        // let's start quacking
    }
}

class RubberDuck extends Duck
{
    public function swim()
    {
        // let's start swimming
    }

    /**
     * @throws Exception
     */
    public function quack()
    {
        throw new Exception("Rubber duck cant quack");
    }
}
