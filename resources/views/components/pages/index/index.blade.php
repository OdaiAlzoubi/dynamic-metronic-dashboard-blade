@props(['filter' => '', 'header' => '','body'=>''])
{{ $filter }}
<div class="content d-flex flex-column flex-column-fluid">
    <div class="post d-flex flex-column-fluid">
        <div class="container-xxl">
            <div class="card card-flush">
                <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                    {{ $header }}
                </div>
                <div class="card-body pt-0">
                    {{ $body }}
                </div>
            </div>
        </div>
    </div>
</div>
