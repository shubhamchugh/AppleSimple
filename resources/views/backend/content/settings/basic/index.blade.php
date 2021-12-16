@extends('backend.layouts/contentLayoutMaster')

@section('title', 'Basic Configuration')

@section('content')
<!-- Basic Tables start -->
<div class="row" id="basic-table">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Basic Configuration</h4>
                <div class="text-right">
                    <a class="btn btn-warning" href="{{ route('settings.create') }}"><i data-feather="plus" class="mr-25"></i>
                        <span>Add New</span></a>
                </div>
            </div>
            <div class="card-body">
                <div class="demo-spacing-0">
                    @include('backend.partials.message')
                </div>
            </div>
            <!-- Accordion with margin start -->
            <section id="accordion-with-margin">
              <div class="row">
                <div class="col-sm-12">
                  <div class="card collapse-icon">
                    <div class="card-body">
                      <div class="collapse-margin" id="accordionExample">
                        <div class="card">
                          <div
                            class="card-header"
                            id="headingOne"
                            data-toggle="collapse"
                            role="button"
                            data-target="#collapseOne"
                            aria-expanded="false"
                            aria-controls="collapseOne"
            >
                            <span class="lead collapse-title">Preview Settings</span>
                          </div>
            
                          <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                             
                                WebsiteName        = {{ $WebsiteName->value ?? "Null" }}</br>
                                HeaderCode         = {{ $HeaderCode->value ?? "Null" }}</br>
                                LogoPath           = {{ $LogoPath->value ?? "Null"}}</br>
                                HomeSlider         = {{ $HomeSlider->value ?? "Null"}}</br>
                                FooterContent      = {{ $FooterContent->value ?? "Null"}}</br>
                                StepH1             = {{ $StepH1->value ?? "Null"}}</br>
                                StepH2             = {{ $StepH2->value ?? "Null"}}</br>
                                StepH3             = {{ $StepH3->value ?? "Null"}}</br>
                                StepH4             = {{ $StepH4->value ?? "Null" }}</br>
                                StepC1             = {{ $StepC1->value ?? "Null"}}</br>
                                StepC2             = {{ $StepC2->value ?? "Null"}}</br>
                                StepC3             = {{ $StepC3->value ?? "Null"}}</br>
                                StepC4             = {{ $StepC4->value ?? "Null"}}</br>
                                HomePageTitle      = {{ $HomePageTitle->value ?? "Null"}}</br>
                                AfterPostPageTitle = {{ $AfterPostPageTitle->value ?? "Null"}}</br>
                                PrePostPageTitle   = {{ $PrePostPageTitle->value ?? "Null"}}</br>
                                ConstantPostContent = {{ $ConstantPostContent->value ?? "Null" }}
            
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- Accordion with margin end -->
            @include('backend.content.settings.basic.table')
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