<?php

namespace App\Src\Domain\Truck\Entities;

final class Truck
{
    public function __construct(
        public int $id,
        public string $code,
    ) {}
}
