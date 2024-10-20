<?php

declare(strict_types=1);

namespace App\Contract\MessageBroker;

interface BrokerInterface
{
    public function send(): bool;
}
    