<?php

namespace App\Http\Controllers\Intervention;

use App\Http\Controllers\Controller;
use App\Http\Requests\Intervention\TaskStoreRequest;
use App\Src\Application\Intervention\Mappers\TaskInputMapper;
use App\Src\Application\Intervention\UseCases\CreateTaskUseCase;
use App\Src\Domain\Intervention\Repositories\TaskRepository;

final class TaskController extends Controller
{

    public function __construct(
        private CreateTaskUseCase $create,
        private TaskRepository $repo
    ) {}

    /**
     * Display a list of the latest tasks..
     */
    public function index()
    {
        return response()->json($this->repo->listLatest());
    }

    /**
     * Store a new task.
     * - Validation is handled by TaskStoreRequest.
     * - Mapping is handled by TaskInputMapper.
     */
    public function store(TaskStoreRequest $request)
    {
        // Transform validated request data into a domain DTO
        $dto = TaskInputMapper::fromArray($request->validated());

        // Delegate to use case
        $id = $this->create->handle($dto);

        // Return a clean JSON response
        return response()->json(['id' => $id], 201);
    }
}
