<div class="table-responsive">
    <table class="table  table-hover">
        <thead>
            <tr>
                <th>No.</th>
                <th>Start</th>
                <th>End</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($scrapingContent as $scrapingdetail)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    <span class="font-weight-bold">{{ $scrapingdetail->type }}</span>
                </td>
                <td><a
                        href="/scrape/loginii/start/{{ $scrapingdetail->start }}/end/{{ $scrapingdetail->end }}/limit/{{ $scrapingdetail->limit }}">/scrape/loginii/start/{{ $scrapingdetail->start }}/end/{{ $scrapingdetail->end }}/limit/{{ $scrapingdetail->limit }}</a>
                </td>
                <td>
                    <div class="dropdown">
                        <button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-toggle="dropdown">
                            <i data-feather="more-vertical"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('scraping.edit', $scrapingdetail->id) }}">
                                <i data-feather="edit-2" class="mr-50"></i>
                                <span>Edit</span>
                            </a>
                            <a class="dropdown-item" href="#" onclick="event.preventDefault();
                            document.getElementById('delete-form-{{ $scrapingdetail->id }}').submit();">
                                <i data-feather="trash" class="mr-50"></i>
                                <span>Delete</span>
                            </a>
                            <form id="delete-form-{{ $scrapingdetail->id }}" style="display: none;"
                                action="{{ route('scraping.destroy', $scrapingdetail->id) }}" method="post">
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

<div class="card-header">
    <h4 class="card-title">Image Scraping URL</h4>
</div>
<div class="table-responsive">
    <table class="table  table-hover">
        <thead>
            <tr>
                <th>No.</th>
                <th>Start</th>
                <th>End</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($scrapingImage as $scrapingdetail)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    <span class="font-weight-bold">{{ $scrapingdetail->type }}</span>
                </td>
                <td><a
                        href="/scrape/images/start/{{ $scrapingdetail->start }}/end/{{ $scrapingdetail->end }}/limit/{{ $scrapingdetail->limit }}">/scrape/images/start/{{ $scrapingdetail->start }}/end/{{ $scrapingdetail->end }}/limit/{{ $scrapingdetail->limit }}</a>
                </td>
                <td>
                    <div class="dropdown">
                        <button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-toggle="dropdown">
                            <i data-feather="more-vertical"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('scraping.edit', $scrapingdetail->id) }}">
                                <i data-feather="edit-2" class="mr-50"></i>
                                <span>Edit</span>
                            </a>
                            <a class="dropdown-item" href="#" onclick="event.preventDefault();
                            document.getElementById('delete-form-{{ $scrapingdetail->id }}').submit();">
                                <i data-feather="trash" class="mr-50"></i>
                                <span>Delete</span>
                            </a>
                            <form id="delete-form-{{ $scrapingdetail->id }}" style="display: none;"
                                action="{{ route('scraping.destroy', $scrapingdetail->id) }}" method="post">
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

<div class="card-header">
    <h4 class="card-title">Matadata Scraping URL</h4>
</div>
<div class="table-responsive">
    <table class="table  table-hover">
        <thead>
            <tr>
                <th>No.</th>
                <th>Start</th>
                <th>End</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($scrapingMetadata as $scrapingdetail)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    <span class="font-weight-bold">{{ $scrapingdetail->type }}</span>
                </td>
                <td><a
                        href="/scrape/metadata/start/{{ $scrapingdetail->start }}/end/{{ $scrapingdetail->end }}/limit/{{ $scrapingdetail->limit }}">/scrape/metadata/start/{{ $scrapingdetail->start }}/end/{{ $scrapingdetail->end }}/limit/{{ $scrapingdetail->limit }}</a>
                </td>
                <td>
                    <div class="dropdown">
                        <button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-toggle="dropdown">
                            <i data-feather="more-vertical"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('scraping.edit', $scrapingdetail->id) }}">
                                <i data-feather="edit-2" class="mr-50"></i>
                                <span>Edit</span>
                            </a>
                            <a class="dropdown-item" href="#" onclick="event.preventDefault();
                            document.getElementById('delete-form-{{ $scrapingdetail->id }}').submit();">
                                <i data-feather="trash" class="mr-50"></i>
                                <span>Delete</span>
                            </a>
                            <form id="delete-form-{{ $scrapingdetail->id }}" style="display: none;"
                                action="{{ route('scraping.destroy', $scrapingdetail->id) }}" method="post">
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