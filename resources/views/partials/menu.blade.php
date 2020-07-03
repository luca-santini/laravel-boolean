<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#">
      <img src="https://www.boolean.careers/images/common/logo.png" alt="Boolean logo">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('homepage') }}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('contatti') }}">Contatti</a>
      </li>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('faq') }}">Domande frequenti</a>
      </li>
      <li class="nav-item">
        <a href="{{ route('contatti') }}"> <button type="button" class="btn btn-success">Candidati ora</button></a>
      </li>
     </ul>
  </div>
</nav>
