 <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header bg-danger text-light"><h3 class="text-center font-weight-light my-4">Inscription de la Secretaire</h3></div>
                                    <div class="card-body">
                                         <form role="form" wire:submit.prevent="addUser()">
                                                 @csrf
                                            <div class="row mb-3">
                                                
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input wire:model="newUser.name" class="form-control  @error('newUser.name') is-invalid @enderror" value="{{ old('newUser.name') }}" id="inputFirstName" type="text" placeholder="Enter votre Nom Complet" required autocomplete="nom"/>
                                                        <label for="inputFirstName">Nom</label>
                                                        @error('newUser.name')
                                                            <span class="text-danger"> {{ $message}}</span>
                                                        @enderror
                                                    </div>
                                              
                                               
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input  wire:model="newUser.email" class="form-control  @error('newUser.email') is-invalid @enderror" id="inputEmail" type="email"value="{{ old('email') }}"  placeholder="name@example.com"  required autocomplete="email"/>
                                                <label for="inputEmail">Email </label>
                                                @error('newUser.email')
                                                   <span class="text-danger"> {{ $message}}</span>
                                                    
                                                @enderror
                                            </div>
                                           
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input      wire:model="newUser.password" class="form-control  @error('newUser.password') is-invalid @enderror" name="password" id="inputPassword" type="password" placeholder="Mot de passe" required autocomplete="new-password"/>
                                                        <label for="inputPassword">Mot de passe</label>
                                                        @error('newUser.password')
                                                          <span class="text-danger"> {{ $message}}</span>
                                                            
                                                        @enderror
                                                    </div>
                                               
                                                {{-- <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input    class="form-control  @error('newUser.password_confirmation') is-invalid @enderror" name="password_confirmation" id="inputPasswordConfirm" type="password" placeholder="Confirm password"  required autocomplete="new-password" />
                                                        <label for="inputPasswordConfirm">Confirmer mot de passe</label>
                                                        @error('newUser.password_confirmation')
                                                          <span class="text-danger"> {{ $message}}</span>
                                                        @enderror
                                                    </div>
                                                </div> --}}
                                            
                                            <div class="row mt-4 mb-0">
                                                <div class="d-grid col-md-4"><button  type="submit"  class="btn btn-primary btn-block" >{{ __('INSCRIRE') }}</button></div>
                                                <div class="d-grid col-md-8"><button type="button" wire:click.prevent="goToListUser()"class="btn btn-danger">Retourner a la liste des utilisateurs</button></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>