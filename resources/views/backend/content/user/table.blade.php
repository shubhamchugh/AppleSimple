<div class="table-responsive">
    <table class="table table-hover-animation table-hover">
        <thead class="thead-light">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $currentUser = auth()->user(); ?>
            @foreach($users as $user)

            <tr>
                <td>
                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <img src="{{ $user->profile_photo_url }}" data-toggle="tooltip" data-popup="tooltip-custom"
                        data-placement="top" title="" class="avatar pull-up my-0"
                        data-original-title="{{ $user->name }}" height="26" width="26" alt="{{ $user->name }}" />
                    @endif
                    <span class="font-weight-bold">{{ $user->name }}</span>
                </td>
                <td>{{ $user->email }}</td>
                <td>-</td>
                <td><span class="badge badge-pill badge-light-primary mr-1">Active</span></td>
                <td>
                    <div class="dropdown">
                        <button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-toggle="dropdown">
                            <i data-feather="more-vertical"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('user.edit', $user->id) }}">
                                <i data-feather="edit-2" class="mr-50"></i>
                                <span>Edit</span>
                            </a>

                            @if($user->id == config('cms.default_user_id') || $user->id ==
                            $currentUser->id)
                            <button onclick="return false" type="submit" class="dropdown-item" disabled="disabled">
                                <i data-feather="trash" class="mr-50"></i>
                                <span>Delete</span>
                            </button>
                            @else
                            <a class="dropdown-item" href="{{ route('user.confirm', $user->id) }}">
                                <i data-feather="trash" class="mr-50"></i>
                                <span>Delete</span>
                            </a>
                            @endif
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>