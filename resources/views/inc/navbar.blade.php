<nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/">{{ config('app.name', 'Atrium') }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="nav navbar-nav ml-auto navbar-right">
            <li class="nav-item">
              <a class="nav-link text-dark" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link text-dark" href="/about">Retail</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="/services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="/posts">Dining</a>
            </li> --}}
          </ul>
        </div>
    </div>
</nav>

{{-- TODELETE --}}