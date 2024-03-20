<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

      <li class="nav-item">
        <a href="#" class="nav-link"> 
          <i class="fa-solid fa-people-group"></i>
          <p>
            Groups
            <i class="fas fa-angle-left right"></i> 
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ route('list_groupe') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>All groups  </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('add_group') }}" class="nav-link">
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
            <a href="{{ route('list_stagiaire') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>list stagiaire</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('add_stagiaire') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Ajoute stagiaire</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('list_groupe') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>ajoute absence</p>
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
            <a href="{{ route('list_module') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>list modules</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
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
            <a href="{{ route('list_demande') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Inbox</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>accepter</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>refuser</p>
            </a>
          </li>
        </ul>
      </li>
       
    </ul>
  </nav>