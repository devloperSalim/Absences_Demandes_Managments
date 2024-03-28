<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class=" nav-icon fa-solid fa-people-group"></i>
          <p>
            Groups
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ route('groups.index') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>All groups  </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('groups.create') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Ajouter Group</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-table"></i>
          <p>
            Stagiaire
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ route('stagiaires.index') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>list stagiaire</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('stagiaires.create') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Ajoute stagiaire</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('absences.index') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>list absence</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('absences.alert') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>alert absence</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-book"></i>
          <p>
            Modules
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ route('demandes.index') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>list modules</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('ajoute_module') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>ajouter module</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('avancement') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>alert l’avancement  </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('ajoute_avancement') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>ajoute l’avancement de programme  </p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-header">Demandes</li>

      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon far fa-envelope"></i>
          <p>
            Mailbox
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ route('demandes.index') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Inbox</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('demandes.traiter') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>accepter</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('demandes.index') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>demande</p>
            </a>
          </li>
        </ul>
      </li>

    </ul>
  </nav>
   <!-- Footer -->
   <footer class=" footer mt-auto">
    <div class="container">
        <div class="row">
            <div class="col-md-12  ">
                <p class="text-light">&copy; {{ date('Y') }}  S.A .All rights reserved.<br/></p>
                <a href="https://github.com/LahciniAbdelhaq"> <i class="fab fa-github text-light mx-2"></i>abdelhaq lahcini</a><br>
                <a href="https://github.com/devloperSalim"><i class="fab fa-github text-light mx-2"></i>salim boulkhir</a> </p>
            </div>
        </div>
    </div>
</footer>
<!-- /.footer -->
