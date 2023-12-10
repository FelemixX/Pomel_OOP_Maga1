<?php

interface Strategy
{
    public function execute();
}

class ConcreteStrategy1 implements Strategy
{
    public function execute()
    {
    }
}

class ConcreteStrategy2 implements Strategy
{
    public function execute()
    {
    }
}

class Context
{
    private $strategy;

    public function __construct(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function setStrategy(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function execute()
    {
        $this->strategy->execute();
    }
}

//функциональная стратегия

function createStrategy($type)
{
    switch ($type) {
        case 'strategy1':
            return function () {
            };
        case 'strategy2':
            return function () {
            };
    }
}

function createContext($strategy)
{
    return function () use ($strategy) {
        $strategy();
    };
}

$strategy1 = createStrategy('strategy1');
$strategy2 = createStrategy('strategy2');

$context = createContext($strategy1);
$context();

$context = createContext($strategy2);
$context();
