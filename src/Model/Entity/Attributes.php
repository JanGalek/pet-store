<?php

namespace EFabrica\Model\Entity;

class Attributes
{
    /**
     * @param Attribute[]|iterable $attributes
     */
    public function __construct(private iterable $attributes = [])
    {
    }

    /**
     * @return Attribute[]|array
     */
    public function getAttributes(): array
    {
        return $this->attributes;
    }
}