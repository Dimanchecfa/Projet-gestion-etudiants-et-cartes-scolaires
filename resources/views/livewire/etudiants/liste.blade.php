<div>
  
                    <div class="container-fluid ">
                     <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Gestions etudiants</a> /</li>
                           
                        </ol>
                        <h1 class="mt-4">Tables</h1>
                       
                       
                        <div class="card mb-4 ">
                            <div class="card-header bg-danger text-light d-flex align-items-center">
                          
                              <p class="flex-grow-1 ">   <i class="fas fa-user"></i> Listes des etudiants</p>
                                 <a class="btn btn-link text-white mr-4 d-block" 
                         
                           wire:click.prevent="goToAddStudent()"><i class="fas fa-user-plus"></i>Nouvel etudiant
                           
                           
                           </a>
                            </div>
                            <div class="card-body table-responsive p-0 table-striped">
                                <table id="myTable" class="table table-bordered" >
                                    <thead class="text-center">
                                        <tr class="text-center">
                                            <th class="text-center" style="width:8%">Matricule</th>
                                            <th class="text-center"style="width:8%">Nom</th>
                                            <th class="text-center"style="width:8%">Prenom</th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center">Cycle</th>
                                            <th class="text-center">Niveau</th>
                                            <th class="text-center">Date d'inscription</th>
                                            <th class="text-center">Action</th>
                                           
                                        </tr>
                                    </thead>
                                    <tfoot>
                                       <tr class="text-center">
                                            <th class="text-center" style="width:8%">Matricule</th>
                                            <th class="text-center" >Nom</th>
                                            <th class="text-center" >Prenom</th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center">Cycle</th>
                                            <th class="text-center">Niveau</th>
                                            <th class="text-center" >Date d'inscription</th>
                                            <th class="text-center" >Action</th>
                                           
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                      
                                    @foreach ($etudiants as $etudiant )

                           <tr>
                             

                              <td class="text-center">
                              {{$etudiant-> matricule}}
                              
                              </td>
                              <td class="text-center">
                              {{$etudiant-> nom}}
                              
                              </td>
                              <td class="text-center">
                              {{$etudiant-> prenom}}
                              
                              </td>
                              <td class="text-center">
                              {{$etudiant-> email}}
                              
                              </td>
                              <td class="text-center">
                              {{$etudiant-> cycle}}
                              
                              </td>
                              <td class="text-center">
                              {{$etudiant-> niveau}}
                              
                              </td>
                            
                              <td class="text-center"><span class="tag tag-success">
                                 {{$etudiant-> created_at->diffForHumans()}}</span>
                              </td>
                              <td class="d-flex">
                              @can('directeur')
                                  
                             
                                 <button class="btn btn-link"
                                   wire:click="confirmDelete('{{$etudiant->nom}}', {{$etudiant->id}})"
                                  >
                                   <i class="fas fa-trash-alt"></i>
                              </button>
                               
                              <button class="btn btn-link" 
                              wire:click.prevent="goToEditStudent({{$etudiant->id}})" 
                              >
                                 <i class="fas fa-edit"></i>
                              </button>
                               @endcan
                               <button class="btn btn-link" wire:click=" ">
                                 <i class="fas fa-save "></i>
                              </button>
                              </td>
                           </tr>
                              
                           @endforeach

                                    </tbody>
                                </table>
                            </div>
                             <!--card-footer-->
                            <div class="card-footer">
                                <div class="float-right">
            
                                    {{ $etudiants->links() }}

                                </div>
                            </div>
                          
                        </div>
                    </div>
           
</div>
