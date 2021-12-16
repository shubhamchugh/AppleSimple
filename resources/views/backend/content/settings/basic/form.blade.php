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
                               
                                  WebsiteName         = {{ $WebsiteName->value ?? "Null" }}</br>
                                  HeaderCode          = {{ $HeaderCode->value ?? "Null" }}</br>
                                  LogoPath            = {{ $LogoPath->value ?? "Null"}}</br>
                                  HomeSlider          = {{ $HomeSlider->value ?? "Null"}}</br>
                                  FooterContent       = {{ $FooterContent->value ?? "Null"}}</br>
                                  StepH1              = {{ $StepH1->value ?? "Null"}}</br>
                                  StepH2              = {{ $StepH2->value ?? "Null"}}</br>
                                  StepH3              = {{ $StepH3->value ?? "Null"}}</br>
                                  StepH4              = {{ $StepH4->value ?? "Null" }}</br>
                                  StepC1              = {{ $StepC1->value ?? "Null"}}</br>
                                  StepC2              = {{ $StepC2->value ?? "Null"}}</br>
                                  StepC3              = {{ $StepC3->value ?? "Null"}}</br>
                                  StepC4              = {{ $StepC4->value ?? "Null"}}</br>
                                  HomePageTitle       = {{ $HomePageTitle->value ?? "Null"}}</br>
                                  AfterPostPageTitle  = {{ $AfterPostPageTitle->value ?? "Null"}}</br>
                                  PrePostPageTitle    = {{ $PrePostPageTitle->value ?? "Null"}}</br>
                                  ConstantPostContent = {{ $ConstantPostContent->value ?? "Null" }}</br>
                                  homeSliderTitle     = {{ $homeSliderTitle->value ?? "Null" }}</br>
                                  homeSearchTitle     = {{ $homeSearchTitle->value ?? "Null" }}</br>
                                  homeStepTitle       = {{ $homeStepTitle->value ?? "Null" }}</br>
                                  ContactUs           = {{ $ContactUs->value ?? "Null" }}</br>
                                  footerLinks1        = {{ $footerLinks1->value ?? "Null" }}</br>
                                  footerLinks2        = {{ $footerLinks2->value ?? "Null" }}</br>
                                  reportIssue         = {{ $reportIssue->value ?? "Null" }}
              
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


<div class="card-body">
    <div class="demo-spacing-0">
        @include('backend.partials.message')
    </div>
</div>
<section id="basic-vertical-layouts">
    <div class="row">
        <div class="col-md-7 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Basic Configuration</h4>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-12">
                            <div class="form-group {{ $errors->has('item') ? 'is-invalid' : '' }}">
                                <label for="email-id-vertical">Setting item</label>
                                <input type="text" id="email-id-vertical" class="form-control"  name="item"
                                    placeholder="item" value="{{ old('item', $cmsSetting->item ?? null)}}" required/>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Please enter item</div>

                                    @if($errors->has('item'))
                                    <span class="help-block text-warning">{{ $errors->first('item') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group {{ $errors->has('value') ? 'is-invalid' : '' }}">
                                <label for="contact-info-vertical">Value</label>
                                {{-- <input type="text" id="email-id-vertical" class="form-control"  name="value"
                                placeholder="value" value="{{ old('value', $cmsSetting->value ?? null)}}" required/> --}}

                                <textarea required id="valueinsert" class="form-control" name="value" rows="4" cols="50">
                                    {{ old('value', $cmsSetting->value ?? null)}}
                                    </textarea>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Please enter value</div>
                                    @if($errors->has('value'))
                                    <span class="help-block text-warning">{{ $errors->first('value') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-5 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Publish</h4>
                </div>
                <div class="card-body">
                    <div class="col-12">
                        <div class="col-12 ">
                            <button type="submit"
                                class="btn btn-primary mr-1">{{ $cmsSetting->exists ? 'Update' : 'Add' }}</button>
                            <button type="reset" class="btn btn-outline-secondary mr-1">Reset</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>