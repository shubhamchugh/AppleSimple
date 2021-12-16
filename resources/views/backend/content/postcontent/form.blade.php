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
                            <div class="form-group {{ $errors->has('post_id') ? 'is-invalid' : '' }}">
                                
                                {{-- <input type="radio" id="first-name-vertical" class="form-control" name="post_id"
                                    placeholder="post_id" required value="{{ old('post_id', $post_id ?? null)}}"  required/> --}}
                                    <input
                                    class="form-check-input "
                                    type="radio"
                                    name="post_id"
                                    id="first-name-vertical"
                                    value="{{ old('post_id', $post_id ?? null)}}"
                                    checked
                                  />
                                  <label for="first-name-vertical">post_id = {{ $post_id }}</label>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">Please enter Title</div>

                                @if($errors->has('post_id'))
                                <span class="help-block text-warning">{{ $errors->first('post_id') }}</span>
                            @endif
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group {{ $errors->has('fake_user_id') ? 'is-invalid' : '' }}">
                                <label for="first-name-vertical">fake_user_id</label>
                                <input type="number" min="1" max="5" id="first-name-vertical" class="form-control" name="fake_user_id"
                                    placeholder="fake_user_id" required value="{{ old('fake_user_id', $postContent->fake_user_id ?? null)}}" required/>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">Please enter Title</div>

                                @if($errors->has('fake_user_id'))
                                <span class="help-block text-warning">{{ $errors->first('fake_user_id') }}</span>
                            @endif
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group {{ $errors->has('content_title') ? 'is-invalid' : '' }}">
                                <label for="email-id-vertical">Content Title</label>
                                <input type="text" id="email-id-vertical" class="form-control"  name="content_title"
                                    placeholder="Content Title" value="{{ old('content_title', $postContent->content_title ?? null)}}" required/>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Please enter Content Title</div>

                                    @if($errors->has('content_title'))
                                    <span class="help-block text-warning">{{ $errors->first('content_title') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group {{ $errors->has('content_url') ? 'is-invalid' : '' }}">
                                <label for="contact-info-vertical">Content Url</label>
                                <textarea id="contact-info-vertical" class="form-control" name="content_url"
                                    placeholder="Content Url"/>{{ old('content_url', $postContent->content_url ?? null)}}</textarea>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Please enter Content Url</div>
                                    @if($errors->has('content_url'))
                                    <span class="help-block text-warning">{{ $errors->first('content_url') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group {{ $errors->has('content_dec') ? 'is-invalid' : '' }}">
                                <label for="contact-info-vertical">Content Dec</label>
                                <textarea id="contact-info-vertical" class="form-control" name="content_dec"
                                    placeholder="Content Dec"/>{{ old('content_dec', $postContent->content_dec ?? null)}}</textarea>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Please enter Content Dec</div>
                                    @if($errors->has('content_dec'))
                                    <span class="help-block text-warning">{{ $errors->first('content_dec') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group {{ $errors->has('content_image') ? 'is-invalid' : '' }}">
                                <label for="contact-info-vertical">Content Image</label>
                                <textarea id="contact-info-vertical" class="form-control" name="content_image"
                                    placeholder="Content Image"/>{{ old('content_image', $postContent->content_image ?? null)}}</textarea>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Please enter Content Image</div>
                                    @if($errors->has('content_image'))
                                    <span class="help-block text-warning">{{ $errors->first('content_image') }}</span>
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
                                class="btn btn-primary mr-1">{{ $postContent->exists ? 'Update' : 'Add' }}</button>
                            <button type="reset" class="btn btn-outline-secondary mr-1">Reset</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>