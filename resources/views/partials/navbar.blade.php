<nav class="navbar navbar-expand-md navbar-dark bg-#1d1d1c">
    <div class="container">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" {{ ($title === "Home") ? 'active' : '' }} href="/">Pandu</a>
            </li>
        </ul>
    </div>
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" {{ ($title === "Home") ? 'active' : '' }} href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" {{ ($title === "About") ? 'active' : '' }} href="/about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" {{ ($title === "Feedback") ? 'active' : '' }} href="/feedback">Feedback</a>
            </li>
        </ul>
    </div>
  </nav>
