   <nav class="mt-2 fixe">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              <li class="nav-item  {{ setMenuClass('admin.habilitations.', 'menu-open') }}">
                <a href="{{route('home')}}" class="nav-link {{setMenuActive('home')}}  text-light">
                  
              
                    Accueil
            
                </a>
              </li>
              
              
              <!--Pour fixer les portails de verifications dans les views on utilise des "can" et des 'endcan'-->
            
              <li class="nav-item {{ setMenuClass('index', 'menu-open') }}">
                <a href="{{route('index')}}" class="nav-link  {{ setMenuClass('index', 'menu-open') }}  text-light" >
                
                
                    Gestions des secretaires
                  
              
                </a>
              </li> 
              <li class="nav-item {{ setMenuClass('admin.habilitations.', 'menu-open') }}">
                <a href="" class="nav-link active  {{ setMenuActive('index') }} text-light">
                      
              
                    Gestions des secretaires
                      
                </a>
              </li>
              
           
         

{{--     
    
          <li class="nav-item {{ setMenuClass('admin.habilitations.', 'menu-open') }} ">
            <a href="#" class="nav-link {{ setMenuClass('admin.habilitations.', 'active') }}   text-light">
              <i class=" nav-icon fas fa-user-shield"></i>
              <p>
                Habilitations
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a
                href="  text-light"
                class="nav-link   text-light"
                >
                  <i class=" nav-icon fas fa-users-cog"></i>
                  <p>Utilisateurs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link  text-light">
                  <i class="nav-icon fas fa-fingerprint"></i>
                  <p>Roles et permissions</p>
                </a>
              </li>
            </ul>
          </li>
         --}}

        

        </ul>
      </nav>