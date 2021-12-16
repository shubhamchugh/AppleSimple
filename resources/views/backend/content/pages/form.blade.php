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
                    <h4 class="card-title">Vertical Form</h4>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-12">
                            <div class="form-group {{ $errors->has('page_title') ? 'is-invalid' : '' }}">
                                <label for="first-name-vertical">Title</label>
                                <input type="text" id="first-name-vertical" class="form-control" name="page_title"
                                    placeholder="Title" required value="{{ old('page_title', $page->page_title ?? null)}}" required/>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">Please enter Title</div>

                                @if($errors->has('page_title'))
                                <span class="help-block text-warning">{{ $errors->first('page_title') }}</span>
                            @endif
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group {{ $errors->has('page_slug') ? 'is-invalid' : '' }}">
                                <label for="email-id-vertical">Slug</label>
                                <input type="text" id="email-id-vertical" class="form-control"  name="page_slug"
                                    placeholder="Slug" value="{{ old('page_slug', $page->page_slug ?? null)}}" required/>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Please enter Slug</div>

                                    @if($errors->has('page_slug'))
                                    <span class="help-block text-warning">{{ $errors->first('page_slug') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group {{ $errors->has('page_content') ? 'is-invalid' : '' }}">
                                <label for="contact-info-vertical">Content</label>
                                <textarea id="contact-info-vertical" class="form-control" name="page_content"
                                    placeholder="Content"/>{{ old('page_content', $page->page_content ?? null)}}</textarea>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Please enter Content</div>
                                    @if($errors->has('page_content'))
                                    <span class="help-block text-warning">{{ $errors->first('page_content') }}</span>
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
                        <div class="form-group">
                            <label for="fp-date-time">Date & TIme</label>
                            <input type="text" id="fp-date-time" class="form-control flatpickr-date-time" name="published_at"
                                placeholder="YYYY-MM-DD HH:MM" value="{{ old('published_at', $page->published_at ?? null)}}" required/>
                        </div>
                        <div class="col-12 ">
                            <button type="submit"
                                class="btn btn-primary mr-1">{{ $page->exists ? 'Update' : 'Publish' }}</button>
                            <button type="submit" class="btn btn-outline-secondary mr-1">Draft</button>
                            <button type="reset" class="btn btn-outline-secondary mr-1">Reset</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>