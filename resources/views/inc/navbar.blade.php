<nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="http://localhost/udemy/todolist/public/">TodoList</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="{{Request::is('http://localhost/udemy/todolist/public/') ? 'active' : ''}} nav-item"><a href="http://localhost/udemy/todolist/public/" class="nav-link">Home</a></li>
            <li class="{{Request::is('http://localhost/udemy/todolist/public/todo/create') ? 'active' : ''}} nav-item"><a href="http://localhost/udemy/todolist/public/todo/create" class="nav-link">Create Todo</a></li>

        </ul>
    </div>
</nav>
