<?php

namespace App\Src\Domain\Intervention\Repositories;

use App\Src\Domain\Intervention\Entities\Task;

interface TaskRepository
{
    public function create(array $data): int;
    public function findById(int $id): ?Task;
    /** @return list<Task> */
    public function listLatest(int $limit = 20): array;
}
