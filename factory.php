<?php

abstract class Creator
{
    abstract public function factoryMethod();
}

class ConcreteCreator1 extends Creator
{
    public function factoryMethod()
    {
        return new ConcreteProduct1();
    }
}

class ConcreteCreator2 extends Creator
{
    public function factoryMethod()
    {
        return new ConcreteProduct2();
    }
}

interface Product
{
}

class ConcreteProduct1 implements Product
{
}

class ConcreteProduct2 implements Product
{
}


//Фабрика но функциональная
function createProduct($type) {
    switch ($type) {
        case 'product1':
            return new stdClass();
        case 'product2':
            return new stdClass();
    }
}
