@props(['message', 'type' => 'info'])

<div role="alert" @class([
    'alert alert-dismissible fade show',
    'alert-danger' => $type === 'error',
    'alert-' . $type => $type != 'error',
])>
    <strong>{{ ucfirst($type) }}!</strong> {{ $message }}
    <button class="btn-close" data-bs-dismiss="alert" type="button" aria-label="Close"></button>
</div>
