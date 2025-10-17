<?php

namespace App\Src\Application\Intervention\UseCases;

use App\Src\Application\Intervention\DTOs\TaskDTO;
use App\Src\Domain\Intervention\Repositories\TaskRepository;

final class CreateTaskUseCase
{
    public function __construct(private TaskRepository $repo) {}

    public function handle(TaskDTO $dto): int
    {
        return $this->repo->create([
            'title'        => $dto->title,
            'site_ref'     => $dto->siteRef,
            'truck_ref'    => $dto->truckRef,
            'scheduled_at' => $dto->scheduledAtIso,
            'notes'        => $dto->notes,
            'status'       => 'PLANNED',
        ]);
    }
}
