<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <style>
    body { font-family: DejaVu Sans, sans-serif; font-size: 12px; }
    h1 { font-size: 18px; margin: 0 0 10px; }
    .row { margin: 6px 0; }
    .label { color: #555; }
  </style>
</head>
<body>
  <h1>Task Summary</h1>
  <div class="row"><span class="label">Title:</span> {{ $task->title }}</div>
  <div class="row"><span class="label">Site Ref:</span> {{ $task->site_ref ?? '—' }}</div>
  <div class="row"><span class="label">Truck Ref:</span> {{ $task->truck_ref ?? '—' }}</div>
  <div class="row"><span class="label">Scheduled:</span> {{ optional($task->scheduled_at)->format('Y-m-d H:i') ?? '—' }}</div>
  <div class="row"><span class="label">Status:</span> {{ $task->status }}</div>
  <div class="row"><span class="label">Notes:</span> {{ $task->notes ?? '—' }}</div>
</body>
</html>
