<?php

namespace Data;

class Shape
{
    public function getCorner()
    {
        return 0;
    }
}

class rectangel extends Shape
{
    public function getCorner()
    {
        return 4;
    }
    public function getParentCorner()
    {
        return parent::getCorner();
    }
}
