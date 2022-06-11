<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion bg-primary" id="sidenavAccordion">
                  
                    <div class="sb-sidenav-menu">
                        <div class="nav mt-4">
                           
                            <a class="nav-link text-light fw-bold" href="index.html">
                                <div class="sb-nav-link-icon text-light"><i class="fas fa-home"></i></div>
                              Acceuil
                            </a>
                           
                              @can("directeur")
                                
                              
                         
                            <a class="nav-link text-light fw-bold" href="{{route('directeur.gestion.secretaires.index')}}">
                                <div class="sb-nav-link-icon text-light"><i class="fas fa-home"></i></div>
                             Gestion secretaires
                            </a>
                            
                              @endcan
                           @can("secretaire")

                            <a class="nav-link text-light fw-bold" href="index.html">
                                <div class="sb-nav-link-icon text-light"><i class="fas fa-home"></i></div>
                            gestion etudiants
                            </a>

                           @endcan
                           
                           
                    </div>
                   
                </nav>
            </div>