<?php

declare(strict_types=1);

namespace App\Helper\UniqueIdentifier;

use App\Contract\UniqueIdentifier\UniqueIdentifierInterface;
use Ramsey\Uuid\Uuid;

class UniqueIdentifier implements UniqueIdentifierInterface
{
    public function generate(): string|int
    {
        return Uuid::uuid7()->toString();
    }
}
