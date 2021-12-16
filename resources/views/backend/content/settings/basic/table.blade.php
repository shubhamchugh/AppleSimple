<div class="table-responsive">
    <table class="table  table-hover">
        <thead>
            <tr>
                <th>No.</th>
                <th>item</th>
                <th>Value</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
           @foreach ($allSetting as $allSettingdetails)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    <span class="font-weight-bold">{{ $allSettingdetails->item }}</span>
                </td>
                <td><span class="font-weight-bold">{{ $allSettingdetails->value }}</span></td>
                <td>
                    <div class="dropdown">
                        <button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-toggle="dropdown">
                            <i data-feather="more-vertical"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('settings.edit', $allSettingdetails->id) }}">
                                <i data-feather="edit-2" class="mr-50"></i>
                                <span>Edit</span>
                            </a>
                            <a class="dropdown-item" href="#" onclick="event.preventDefault();
                            document.getElementById('delete-form-{{ $allSettingdetails->id }}').submit();">
                                <i data-feather="trash" class="mr-50"></i>
                                <span>Delete</span>
                            </a>
                            <form id="delete-form-{{ $allSettingdetails->id }}" style="display: none;"
                                action="{{ route('settings.destroy', $allSettingdetails->id) }}" method="post">
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






