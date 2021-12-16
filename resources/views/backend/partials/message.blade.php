@if(session('message'))
<div class="alert alert-primary alert-dismissible" role="alert">
    <div class="alert-body">
        {{ session('message') }}
    </div>
</div>
@elseif(session('error-message'))
<div class="alert alert-danger alert-dismissible" role="alert">
    <div class="alert-body">
        {{ session('error-message') }}
    </div>
</div>
@elseif(session('trash-message'))
<?php list($message, $postId) = session('trash-message') ?>

<form action="{{ route('content.restore', $postId) }}" method="post">
    @csrf
    @method('PUT')
    <div class="alert alert-primary alert-dismissible" role="alert">
        <div class="alert-body">
            {{ $message }}
            <button type="submit" class="btn btn-sm btn-warning"><i class="fa fa-undo"></i> Undo</button>
        </div>
    </div>
</form>
@elseif(session('trash-message-page'))

<?php list($message, $pageId) = session('trash-message-page') ?>

<form action="{{ route('content.restore', $pageId) }}" method="post">
    @csrf
    @method('PUT')
    <div class="alert alert-primary alert-dismissible" role="alert">
        <div class="alert-body">
            {{ $message }}
            <button type="submit" class="btn btn-sm btn-warning"><i class="fa fa-undo"></i>Undo</button>
        </div>
    </div>
</form>
@endif
