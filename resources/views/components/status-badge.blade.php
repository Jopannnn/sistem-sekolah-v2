@php
    $isActive = strtolower($status) === 'active';
@endphp

<span
    class="inline-flex items-center rounded-full px-3 py-1 text-xs font-medium
    {{ $isActive
        ? 'bg-green-100 text-green-700'
        : 'bg-red-100 text-red-700' }}">
    {{ $status }}
</span>