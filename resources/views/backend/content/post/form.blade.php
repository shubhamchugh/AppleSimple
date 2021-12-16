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
                            <div class="form-group {{ $errors->has('post_title') ? 'is-invalid' : '' }}">
                                <label for="first-name-vertical">Title</label>
                                <input type="text" id="first-name-vertical" class="form-control" name="post_title"
                                    placeholder="Title" required value="{{ old('post_title', $post->post_title ?? null)}}" required/>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">Please enter Title</div>

                                @if($errors->has('post_title'))
                                <span class="help-block text-warning">{{ $errors->first('post_title') }}</span>
                            @endif
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group {{ $errors->has('slug') ? 'is-invalid' : '' }}">
                                <label for="email-id-vertical">Slug</label>
                                <input type="text" id="email-id-vertical" class="form-control"  name="slug"
                                    placeholder="Slug" value="{{ old('slug', $post->slug ?? null)}}" required/>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Please enter Slug</div>

                                    @if($errors->has('slug'))
                                    <span class="help-block text-warning">{{ $errors->first('slug') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group {{ $errors->has('source_url') ? 'is-invalid' : '' }}">
                                <label for="contact-info-vertical">Url</label>
                                <input type="text" id="contact-info-vertical" class="form-control" name="source_url"
                                    placeholder="Content" value="{{ old('source_url', $post->source_url ?? null)}}"/>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Please enter Content</div>
                                    @if($errors->has('source_url'))
                                    <span class="help-block text-warning">{{ $errors->first('source_url') }}</span>
                                @endif
                            </div>
                        </div>


                        <div class="col-12">
                            <div class="form-group {{ $errors->has('created_at') ? 'is-invalid' : '' }}">
                                <label for="fp-date-time"><b>Created_at</b> (not require)</label>
                            <input type="text" id="fp-date-time" class="form-control flatpickr-date-time" name="created_at"
                                placeholder="YYYY-MM-DD HH:MM" value="{{ old('created_at', $post->created_at ?? null)}}" />
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Please enter Content</div>
                                    @if($errors->has('created_at'))
                                    <span class="help-block text-warning">{{ $errors->first('created_at') }}</span>
                                @endif
                            </div>
                        </div>


                        <div class="col-12">
                            <div class="form-group {{ $errors->has('updated_at') ? 'is-invalid' : '' }}">
                                <label for="fp-date-time"><b>updated_at</b> (not require)</label>
                            <input type="text" id="fp-date-time" class="form-control flatpickr-date-time" name="updated_at"
                                placeholder="YYYY-MM-DD HH:MM" value="{{ old('updated_at', $post->updated_at ?? null)}}" />
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Please enter Content</div>
                                    @if($errors->has('updated_at'))
                                    <span class="help-block text-warning">{{ $errors->first('updated_at') }}</span>
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
                            <label for="fp-date-time">Date & TIme(Not Require)</label>
                            <input type="text" id="fp-date-time" class="form-control flatpickr-date-time" name="published_at"
                                placeholder="YYYY-MM-DD HH:MM" value="{{ old('published_at', $post->published_at ?? null)}}" required/>
                        </div>
                        <div class="col-12 ">
                            <button type="submit"
                                class="btn btn-primary mr-1">{{ $post->exists ? 'Update' : 'Publish' }}</button>
                            <button type="submit" class="btn btn-outline-secondary mr-1">Draft</button>
                            <button type="reset" class="btn btn-outline-secondary mr-1">Reset</button>
                        </div>
                    </div>
                </div>


                
            </div>
        </div>
    </div>
</section>