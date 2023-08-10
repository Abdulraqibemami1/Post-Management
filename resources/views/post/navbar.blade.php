
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark d-flex justify-content-between">
        
        <div class="container">
            <div class="navbar-brand">CRUD Project </div>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav nav">
                <li class="nav-item">
                    <a href="/" class="nav-link">POSTS</a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('create') }}" class="nav-link">CREATE POST</a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('feedback') }}" class="nav-link">YOUR FEEDBACK </a>
                </li>

                <li class="nav-item">
                    <a href="{{url('about')}}" class="nav-link">ABOUT US </a>
                </li>
            </ul>
        </div>
        </div>
    </nav>