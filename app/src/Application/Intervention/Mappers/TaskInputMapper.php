<?php

namespace App\Src\Application\Intervention\Mappers;

use App\Src\Application\Intervention\DTOs\TaskDTO;
use Illuminate\Support\Carbon;

/**
 * Maps validated request data into a TaskDTO.
 */
final class TaskInputMapper
{
    public static function fromArray(array $data): TaskDTO
    {
        $iso = null;
        if (!empty($data['scheduled_at'])) {
            $iso = Carbon::parse($data['scheduled_at'])->toISOString();
        }

        return new TaskDTO(
            title: $data['title'],
            siteRef: $data['site_ref'] ?? null,
            truckRef: $data['truck_ref'] ?? null,
            scheduledAtIso: $iso,
            notes: $data['notes'] ?? null,
        );
    }
}
