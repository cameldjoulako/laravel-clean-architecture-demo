<?php

namespace App\Src\Application\Intervention\DTOs;

final class TaskDTO
{
    public function __construct(
        public readonly string $title,
        public readonly ?string $siteRef,
        public readonly ?string $truckRef,
        public readonly ?string $scheduledAtIso,
        public readonly ?string $notes,
    ) {}
}
