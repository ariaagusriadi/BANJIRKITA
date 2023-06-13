@foreach (['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'light', 'dark'] as $status)
    @if (session($status))
        <div class="alert alert-{{ $status }} alert-dismissible bg-{{ $status }} text-white border-0 fade show"
            role="alert">
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
            <strong>{{ session($status) }}</strong>
        </div>
    @endif
@endforeach
