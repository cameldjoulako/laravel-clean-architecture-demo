<?php

namespace App\Src\Infrastructure\Persistence\Intervention;

use App\Src\Domain\Intervention\Entities\Task as DomainTask;
use App\Src\Domain\Intervention\Repositories\TaskRepository;
use App\Models\Task;

final class EloquentTaskRepository implements TaskRepository
{
    public function create(array $data): int
    {
        $m = Task::create($data);
        return (int) $m->id;
    }

    public function findById(int $id): ?DomainTask
    {
        $m = Task::query()->find($id);
        return $m ? $this->map($m) : null;
    }

    public function listLatest(int $limit = 20): array
    {
        return Task::query()->latest('id')->limit($limit)->get()
            ->map(fn ($m) => $this->map($m))->all();
    }

    private function map(Task $m): DomainTask
    {
        return new DomainTask(
            id: (int)$m->id,
            title: (string)$m->title,
            siteRef: $m->site_ref,
            truckRef: $m->truck_ref,
            scheduledAtIso: $m->scheduled_at?->toISOString(),
            notes: $m->notes,
            status: (string)$m->status,
        );
    }
}
