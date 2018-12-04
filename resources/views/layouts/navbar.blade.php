<nav class="navbar navbar-expand navbar-dark bg-dark" style="margin-bottom:20px">
    <a class="navbar-brand" href="/">TodoList</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample02">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
            <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item {{ Request::is('todo/create') ? 'active' : '' }}">
            <a class="nav-link" href="/create">Create</a>
        </li>
        </ul>
        <form class="form-inline my-2 my-md-0">
        <input class="form-control" type="text" placeholder="Search">
        </form>
    </div>
</nav>
