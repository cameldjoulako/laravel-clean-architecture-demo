<?php

namespace App\Http\Requests\Intervention;

use Illuminate\Foundation\Http\FormRequest;

class TaskStoreRequest extends FormRequest
{
    /**
     * Authorization can later be connected to Policies or Permissions.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Define validation rules for creating a task.
     */
    public function rules(): array
    {
        return [
            'title'        => ['required', 'string', 'max:180'],
            'site_ref'     => ['nullable', 'string', 'max:50'],
            'truck_ref'    => ['nullable', 'string', 'max:50'],
            'scheduled_at' => ['nullable', 'date'],
            'notes'        => ['nullable', 'string'],
        ];
    }
}
