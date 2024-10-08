<?php

namespace EFabrica\Model\Entity;

use EFabrica\Services\Uuid\Generator;
use Ramsey\Uuid\UuidInterface;

class Pet
{
    protected UuidInterface $id;

    private Attributes $attributes;

    public function __construct(
        private string $name,
        private string $image,
        private Category $category,
        private Status $status = Status::AVAILABLE,
        $attributes = null,
    ) {
        $this->id = Generator::create();

        if ($attributes === null) {
            $this->attributes = new Attributes();
        }
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

    public function getImage(): string
    {
        return $this->image;
    }

    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    public function getCategory(): Category
    {
        return $this->category;
    }

    public function setCategory(Category $category): void
    {
        $this->category = $category;
    }

    public function getStatus(): Status
    {
        return $this->status;
    }

    public function setStatus(Status $status): void
    {
        $this->status = $status;
    }

    public function getAttributes(): Attributes
    {
        return $this->attributes;
    }

    public function setAttributes(Attributes $attributes): void
    {
        $this->attributes = $attributes;
    }

}