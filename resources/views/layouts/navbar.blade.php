<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Logo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" id=UserDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Users
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="UserDropdown">
                        <li><a class="dropdown-item" href="{{ route('users.index') }}">Users</a></li>
                        <li><a class="dropdown-item" href="#">Roles</a></li>
                        <li><a class="dropdown-item" href="#">Permissions</a></li>
                        <li><a class="dropdown-item" href="{{ route('contacts.index') }}">Contacts</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="PostDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Posts
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="PostDropdown">
                        <li><a class="dropdown-item" href="{{ route('posts.index') }}">Posts</a></li>
                        <li><a class="dropdown-item" href="{{ route('categories.index') }}">Categories</a></li>
                        <li><a class="dropdown-item" href="{{ route('tags.index') }}">Tags</a></li>
                        <li><a class="dropdown-item" href="{{ route('comments.index') }}">Comments</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
  </nav>
