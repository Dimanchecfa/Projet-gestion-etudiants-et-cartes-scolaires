
                    <div class="container-fluid ">
                     <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Gestions secretaires</a> /</li>
                           
                        </ol>
                        <h1 class="mt-4">Tables</h1>
                       
                       
                        <div class="card mb-4 ">
                            <div class="card-header bg-danger text-light d-flex align-items-center">
                          
                              <p class="flex-grow-1 ">   <i class="fas fa-user"></i> Listes des secretaires</p>
                                 <a class="btn btn-link text-white mr-4 d-block" 
                         
                           wire:click.prevent="goToAddUser()"><i class="fas fa-user-plus"></i>Nouvel Utilisateur
                           
                           
                           </a>
                            </div>
                            <div class="card-body">
                                <table id="myTable" class="table table-borrdered" >
                                    <thead class="text-center">
                                        <tr class="text-center">
                                            <th class="text-center">Name</th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center">Debut du contrat</th>
                                            <th class="text-center"> Action</th>
                                           
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th class="text-center">Name</th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center">Debut du contrat</th>
                                            <th class="text-center"> Action</th>
                                           
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                      
                                           @foreach ($users as $user )

                           <tr>
                             

                              <td class="text-center">
                              {{$user-> name}}
                              
                              </td>
                              <td class="text-center">
                              {{$user-> email}}
                              
                              </td>
                            
                              <td class="text-center"><span class="tag tag-success">
                                 {{$user-> created_at->diffForHumans()}}</span>
                              </td>
                              <td class="text-center" >
                                 <button class="btn btn-link" wire:click="confirmDelete('{{$user->name}}', {{$user->id}})"> <i class="fas fa-trash-alt"></i>
                              </button>
                               
                              <button class="btn btn-link" wire:click.prevent="goToEditUser({{$user->id}})">
                                 <i class="fas fa-edit"></i>
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
            
                                    {{ $users->links() }}

                                </div>
                            </div>
                          
                        </div>
                    </div>
           