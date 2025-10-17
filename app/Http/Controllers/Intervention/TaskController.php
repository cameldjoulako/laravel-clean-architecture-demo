<?php

namespace App\Http\Controllers\Intervention;

use App\Http\Controllers\Controller;
use App\Src\Application\Intervention\DTOs\TaskDTO;
use App\Src\Application\Intervention\UseCases\CreateTaskUseCase;
use App\Src\Domain\Intervention\Repositories\TaskRepository;
use Illuminate\Http\Request;

final class TaskController extends Controller
{
    public function __construct(
        private CreateTaskUseCase $create,
        private TaskRepository $repo
    ) {}

    public function index()
    {
        return response()->json($this->repo->listLatest());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title'        => ['required','string','max:180'],
            'site_ref'     => ['nullable','string','max:50'],
            'truck_ref'    => ['nullable','string','max:50'],
            'scheduled_at' => ['nullable','date'],
            'notes'        => ['nullable','string'],
        ]);

        $iso = null;
        if (!empty($data['scheduled_at'])) {
            $iso = now()->parse($data['scheduled_at'])->toISOString();
        }

        $dto = new TaskDTO(
            title: $data['title'],
            siteRef: $data['site_ref'] ?? null,
            truckRef: $data['truck_ref'] ?? null,
            scheduledAtIso: $iso,
            notes: $data['notes'] ?? null,
        );

        $id = $this->create->handle($dto);
        return response()->json(['id' => $id], 201);
    }
}
