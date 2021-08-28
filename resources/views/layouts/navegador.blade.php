    
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm nav-tabs">
          <div class="container">             
               <a class="navbar-left" href="{{ url('/') }}">
                <img src="{{asset('img/nami.jpeg')}}" alt="Backlink logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Lado esquerdo da navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Lado direito da navbar -->
                    <ul class="navbar-nav ml-auto nav-pills nav-fill">
                       <li class="nav-item">
                                <a class="nav-link" href="/"> Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="#"> Contato </a>
                    </li>

                    </ul>
                </div>
            </div>
        </nav>