<?php

namespace App\Src\Domain\Intervention\Entities;

final class Task
{
    public function __construct(
        public int $id,
        public string $title,
        public ?string $siteRef,
        public ?string $truckRef,
        public ?string $scheduledAtIso,
        public ?string $notes,
        public string $status,
    ) {}
}
