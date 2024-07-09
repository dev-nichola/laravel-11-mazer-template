<div class="page-heading d-flex justify-content-between w-100">
    <div>
        <h3>{{ $slot }}</h3>
    </div>

    <div>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            @method('POST')
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
    </div>
</div>