<div class="col-xs-9">
    <div class="box">
        <div class="box-body ">
            @include('backend.partials.message')
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                <input type="text" name="name" id="name" value="{{ old('name', $user->name ?? null) }}"
                    class="form-control">

                @if($errors->has('name'))
                <span class="help-block">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
                <input type="text" name="email" id="email" value="{{ old('email', $user->email ?? null) }}"
                    class="form-control">


                @if($errors->has('email'))
                <span class="help-block">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                <label for="password" class="col-md-4 col-form-label text-md-right">password</label>
                <input type="password" name="password" id="password" class="form-control">

                @if($errors->has('password'))
                <span class="help-block">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <div class="form-group {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                <label for="password_confirmation" class="col-md-4 col-form-label text-md-right">Password
                    Confirmation</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                @if($errors->has('password_confirmation'))
                <span class="help-block">{{ $errors->first('password_confirmation') }}</span>
                @endif
            </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">{{ $user->exists ? 'Update' : 'Save' }}</button>
            <a href="{{ route('user.index') }}" class="btn btn-default">Cancel</a>
        </div>
    </div>
    <!-- /.box -->
</div>