<?php

namespace App\Support\Pdf;

use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Task;

final class TaskPdf
{
    public function render(int $id): string
    {
        $task = Task::findOrFail($id);
        $pdf = Pdf::loadView('reports.task', ['task' => $task]);
        return $pdf->download()->getOriginalContent();
    }
}
