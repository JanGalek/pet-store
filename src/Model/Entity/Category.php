<?php

namespace EFabrica\Model\Entity;

use EFabrica\Services\Uuid\Generator;
use Ramsey\Uuid\UuidInterface;

class Category
{
    protected UuidInterface $id;
    public function __construct(
        private string $name
    ) {
        $this->id = Generator::create();
    }

    public function getId(): UuidInterface
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

}