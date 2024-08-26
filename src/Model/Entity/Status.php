<?php

namespace EFabrica\Model\Entity;

enum Status: string
{
    case AVAILABLE = 'available';
    case PENDING = 'pending';
    case SOLD = 'sold';
}
