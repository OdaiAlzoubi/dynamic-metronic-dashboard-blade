@props(['add', 'indexRoute', 'createRoute'])
<div class="card-toolbar flex-row-fluid justify-content-end gap-5">
    <div class="w-100 mw-150px">
    </div>
    {{-- Add --}}
    <a href="{{ $createRoute }}" class="btn btn-primary"><i class="ki-duotone ki-plus fs-2"></i> Add {{ $add }}</a>
</div>
