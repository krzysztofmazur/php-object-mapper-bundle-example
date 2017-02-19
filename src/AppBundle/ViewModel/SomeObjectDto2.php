<?php

namespace AppBundle\ViewModel;

class SomeObjectDto2 implements \JsonSerializable
{
    /**
     * @var int
     */
    private $area;

    /**
     * @return int
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * @param int $area
     */
    public function setArea($area)
    {
        $this->area = $area;
    }

    /**
     * {@inheritdoc}
     */
    public function jsonSerialize()
    {
        return [
            'area' => $this->getArea(),
        ];
    }
}
