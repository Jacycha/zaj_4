<?php

class A
{
    protected function writeA()
    {
    }
}
class B extends A
{
    protected function writeB()
    {
        $this->writeA();
    }
}
class C extends B
{
    protected function writeC()
    {
        $this->writeB();
    }
}
class D extends C
{
    protected function writeD()
    {
        $this->writeC();
    }
}