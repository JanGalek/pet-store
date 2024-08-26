<?php

namespace EFabrica\Model\Entity;

interface Attribute
{
    public function setName(string $name): void;
    public function getName(): string;

    public function setValue(mixed $value): mixed;
    public function getValue(): mixed;


}
