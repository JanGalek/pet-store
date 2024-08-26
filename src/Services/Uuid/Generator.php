<?php

namespace EFabrica\Services\Uuid;

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

class Generator
{
    public function new(): UuidInterface
    {
        return static::create();
    }

    public static function create(): UuidInterface
    {
        return Uuid::uuid4();
    }
}