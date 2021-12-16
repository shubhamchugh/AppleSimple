@extends('backend.layouts/contentLayoutMaster')

@section('title', 'Scraping')

@section('content')
<!-- Basic Tables start -->
<div class="row" id="basic-table">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Content Scraping URL</h4>
                <div class="text-right">
                    <a class="btn btn-warning" href="{{ route('scraping.create') }}"><i data-feather="plus" class="mr-25"></i>
                        <span>Add New</span></a>
                </div>
            </div>

            <div class="card-body">
                <div class="demo-spacing-0">
                    @include('backend.partials.message')
                </div>
            </div>
            
            @include('backend.content.settings.scraping.table')

        </div>
    </div>
</div>
<div class="d-flex">
    <div class="mx-auto">

    </div>
</div>
</div>
</div>
<!-- Basic Tables end -->
@endsection