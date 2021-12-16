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
                    <h4 class="card-title">Scraping URL</h4>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-12">
                            <div class="form-group {{ $errors->has('limit') ? 'is-invalid' : '' }}">
                                <label for="email-id-vertical">Limit</label>
                                <input type="text" id="email-id-vertical" class="form-control"  name="limit"
                                    placeholder="limit" value="{{ old('limit', $scrapingChunk->limit ?? null)}}" required/>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Please enter limit</div>

                                    @if($errors->has('limit'))
                                    <span class="help-block text-warning">{{ $errors->first('limit') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group {{ $errors->has('start') ? 'is-invalid' : '' }}">
                                <label for="contact-info-vertical">Start</label>
                                <input type="text" id="email-id-vertical" class="form-control"  name="start"
                                placeholder="start" value="{{ old('start', $scrapingChunk->start ?? null)}}" required/>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Please enter Start</div>
                                    @if($errors->has('start'))
                                    <span class="help-block text-warning">{{ $errors->first('start') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group {{ $errors->has('end') ? 'is-invalid' : '' }}">
                                <label for="contact-info-vertical">End</label>
                                <input type="text" id="email-id-vertical" class="form-control"  name="end"
                                placeholder="end" value="{{ old('end', $scrapingChunk->end ?? null)}}" required/>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Please enter end</div>
                                    @if($errors->has('end'))
                                    <span class="help-block text-warning">{{ $errors->first('end') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group {{ $errors->has('type') ? 'is-invalid' : '' }}">
                                <label for="contact-info-vertical">Type</label>
                                <select required="required"  name="type" class="custom-select" id="customSelect">
                                    <option  disabled="disabled" {{ $scrapingChunk->exists ? '' : 'selected' }} ></option>
                                    <option value="is_image" {{ old('type') == 'is_image' ? 'selected' : '' }} >ImageScrape</option>
                                    <option value="is_content" {{ old('type') == 'is_content' ? 'selected' : '' }}>MainContent</option>
                                    <option value="is_metadata" {{ old('type') == 'is_metadata' ? 'selected' : '' }}>ScrapeMeta</option>
                                </select>
                            
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Please enter Type</div>
                                    @if($errors->has('type'))
                                    <span class="help-block text-warning">{{ $errors->first('type') }}</span>
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
                                class="btn btn-primary mr-1">{{ $scrapingChunk->exists ? 'Update' : 'Add' }}</button>
                            <button type="reset" class="btn btn-outline-secondary mr-1">Reset</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>