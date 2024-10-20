<?php

declare(strict_types=1);

namespace App\Contract\UniqueIdentifier;

interface UniqueIdentifierInterface
{
    public function generate(): string|int;
}