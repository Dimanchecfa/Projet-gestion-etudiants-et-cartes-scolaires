 <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header bg-danger text-light"><h3 class="text-center font-weight-light my-4">Inscription de la Secretaire</h3></div>
                                    <div class="card-body">
                                         <form role="form" wire:submit.prevent="updateStudent()">
                                                 @csrf
                                            <div class="form-floating mb-3">
                                                <input  wire:model="editStudent.matricule" class="form-control  @error('editStudent.matricule') is-invalid @enderror" id="inputEmail" type="text" value="{{ old('email') }}"  placeholder="name@example.com"  required autocomplete="email"/>
                                                <label for="inputEmail">Matricule</label>
                                                @error('editStudent.matricule')
                                                   <span class="text-danger"> {{ $message}}</span>

                                                @enderror
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input wire:model="editStudent.nom" class="form-control  @error('editStudent.nom') is-invalid @enderror" value="{{ old('editStudent.name') }}" id="inputFirstName" type="text" placeholder="Enter votre Nom Complet" required autocomplete="nom"/>
                                                        <label for="inputFirstName">Nom</label>
                                                        @error('editStudent.name')
                                                            <span class="text-danger"> {{ $message}}</span>
                                                        @enderror
                                                    </div>

                                                
                                                </div>
                                                <div class="col-md-6">
                                                    
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input wire:model="editStudent.prenom" class="form-control  @error('editStudent.prenom') is-invalid @enderror" value="{{ old('editStudent.name') }}" id="inputFirstName" type="text" placeholder="Enter votre Nom Complet" required autocomplete="nom"/>
                                                        <label for="inputFirstName">Prenom</label>
                                                        @error('editStudent.prenom')
                                                            <span class="text-danger"> {{ $message}}</span>
                                                        @enderror
                                                    </div>

                                                
                                                </div>
                                              
                                               
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input  wire:model="editStudent.email" class="form-control  @error('editStudent.email') is-invalid @enderror" id="inputEmail" type="email"value="{{ old('email') }}"  placeholder="name@example.com"  required autocomplete="email"/>
                                                <label for="inputEmail">Email </label>
                                                @error('editStudent.email')
                                                   <span class="text-danger"> {{ $message}}</span>
                                                    
                                                @enderror
                                            </div>
                                           
                                             <div class="row mb-3">
                                                <div class="col-md-6">
                                                    
                                                    <div class="form-floating mb-3 mb-md-0">
                                                         
                                                        <select id="slct1"  wire:model="editStudent.cycle" class="form-select @error("editStudent.cycle")
                                                            is-invalide @enderror"disabled >
                                                            
                                                            <option value="1">license</option>

                                                            
                           
                                                        </select>
                                                        <label id="slct1" style="font-size:20px">Cycle</label>
                                                        @error('editStudent.cycle')
                                                        <span class="text-danger"> {{ $message}}</span>
                                                        @enderror
                                                    </div>
                                                   

                                                
                                                </div>
                                                <div class="col-md-6">
                                                    
                                                   <div class="form-floating mb-3 mb-md-0">
                                                         
                                                         <select id="slct2" name="slct2"  wire:model="editStudent.niveau" class="form-select @error("editStudent.niveau")
                                                            is-invalide @enderror" disabled>
                                                               
                                                          
                                                            <option value="LICENSE 1">L1</option>
                                                           
                                                             
                                                        </select>
                                                        <label id="slct2" style="font-size:20px">Niveau</label>
                                                       
                                                        @error('editStudent.niveau')
                                                        <span class="text-danger"> {{ $message}}</span>
                                                        @enderror
                                                    </div>

                                                
                                                </div>
                                              
                                               
                                            </div>
                                               
                                            
                                            <div class="row mt-4 mb-0">
                                                <div class="d-grid col-md-4"><button  type="submit"  class="btn btn-primary btn-block" >{{ __('INSCRIRE') }}</button></div>
                                                <div class="d-grid col-md-8"><button type="button" wire:click.prevent="goToListStudent()"class="btn btn-danger">Retourner a la liste des utilisateurs</button></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
