<div class="table-responsive">
    <table class="table  table-hover">
        <thead>
            <tr>
                <th>No.</th>
                <th>Title</th>
                <th>Slug</th>
                <th>Created At</th>
                <th>Author</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
           @foreach ($posts as $post)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    <span class="font-weight-bold">{{ $post->post_title }}</span>
                </td>
                <td>{{ $post->post_slug }}</td>
                <td>
                    <abbr title="{{ $post->dateFormatted(true) }}">{{ $post->dateFormatted() }}</abbr>
                </td>
                <td>
                   {{-- {{ $post->author->name }} --}}
                </td>
                <td>{!! $post->publicationLabel() !!}</td>
                <td>
                    <div class="dropdown">
                        <button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-toggle="dropdown">
                            <i data-feather="more-vertical"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('logins.edit', $post->id) }}">
                                <i data-feather="edit-2" class="mr-50"></i>
                                <span>Edit</span>
                            </a>
                            <a class="dropdown-item" href="#" onclick="event.preventDefault();
                            document.getElementById('delete-form-{{ $post->id }}').submit();">
                                <i data-feather="trash" class="mr-50"></i>
                                <span>Delete</span>
                            </a>
                            <form id="delete-form-{{ $post->id }}" style="display: none;"
                                action="{{ route('logins.destroy', $post->id) }}" method="post">
                                @method('DELETE')
                                @csrf
                            </form>

                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>