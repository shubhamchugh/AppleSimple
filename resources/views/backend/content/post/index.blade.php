@extends('backend.layouts/contentLayoutMaster')

@section('title', 'All Posts')

@section('content')
<!-- Basic Tables start -->
<div class="row" id="basic-table">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">All Posts</h4>
                <a class="btn btn-warning" href="{{ route('logins.create') }}"><i data-feather="plus" class="mr-25"></i>
                    <span>Add New</span></a>
                <div class="text-right">
                    <?php $links = [] ?>
                    @foreach($statusList as $key => $value)
                    @if($value)
                    <?php $selected = Request::get('status') == $key ? 'text-decoration' : '' ?>
                    <?php $links[] = "<a class=\"{$selected}\" href=\"?status={$key}\">" . ucwords($key) . "({$value})</a>" ?>
                    @endif
                    @endforeach
                    {!! implode(' | ', $links) !!}
                </div>
            </div>

            <div class="card-body">
                <div class="demo-spacing-0">
                    @include('backend.partials.message')
                </div>
            </div>
            @if (! $posts->count())
            <div class="card-body">
                <div class="demo-spacing-0">
                    <div class="alert alert-primary" role="alert">
                        <div class="alert-body">
                            <strong>No record found</strong>
                        </div>
                    </div>
                </div>
            </div>
            @elseif($onlyTrashed)
            @include('backend.content.post.table-trash')
            @else
            @include('backend.content.post.table')
            @endif


        </div>
    </div>
</div>
<div class="d-flex">
    <div class="mx-auto">
        {{ $posts->links() }}
    </div>
</div>
</div>
</div>
<!-- Basic Tables end -->
@endsection