<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Agenda de contatos</a>
</nav>

  <div class="container-fluid">
    <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div id="user">
        <img src="{{asset('storage/imagem/logo.png')}}" id="logo" alt="logo">

        <p id="logo_infos">
            <span class="item-description">
                <h3>Fulano de Tal</h3>
            </span>
        </p>
    </div>
        <div class="sidebar-sticky">
          <ul class="nav flex-column" id="side_items">
            <li class="nav-item side-item">
              <a class="nav-link" href="{{route('inicio')}}">
                <i class="fa-solid fa-house"></i>
                <span class="item-description"></span>
                Página inicial <span class="sr-only">(atual)</span>
              </a>
            </li>
            <li class="nav-item side-item">
              <a class="nav-link" href="{{route('indexContatos')}}">
                <i class="fa-solid fa-user"></i>
                <span class="item-description"></span>
                Exibir Contatos Cadastrados
              </a>
            </li>
            <li class="nav-item side-item">
              <a class="nav-link" href="{{route('novoContato')}}">
                <i class="fa-solid fa-box"></i>
                <span class="item-description"></span>
                Cadastro de Contatos
              </a>
            </li>
            <li class="nav-item side-item">
              <a class="nav-link" href="{{route('pesquisarContato')}}">
                <i class="fa-solid fa-phone"></i>
                <span class="item-description"></span>
                Pesquisar Contato
              </a>
            </li>
    </nav>