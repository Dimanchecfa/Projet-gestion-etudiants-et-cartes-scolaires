<?php

namespace App\Http\Livewire;

use App\Mail\WelcomeUserMail;
use App\Models\User;
use App\Notifications\RegisterNotify;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class Gestions extends Component
{

    use WithPagination;

    protected $paginationTheme = "bootstrap";
  
    public $newUser= [];
    public  $editUser= [];
     public $currentPage =PAGELIST;
    public function render()
    {
     return view('livewire.secretaires.index', [
            "users" => User::latest()->paginate(10)
        ])
        ->extends("layouts.master")
        ->section("contenu");
    }

    
    public function rules(){
        if($this->currentPage == PAGEEDITFORM){

            // 'required|email|unique:users,email Rule::unique("users", "email")->ignore($this->editUser['id'])
            return [
                "editUser.name" => "required",
                'editUser.name' => 'required',
                'editUser.email' => ['required', 'email', Rule::unique("users", "email")->ignore($this->editUser['id']) ],
                'editUser.password' => 'required',
                
            ];
        }

        return [
            'newUser.name' => 'required' ,
            'newUser.email' => 'required|email|unique:users,email',
            'newUser.password' => 'required',
        ];
    }
    

     public function goToEditUser($id){
        $this->editUser = User::find($id)->toArray();
        //ajoutzer le mot de passe dans le tableau
        $this->editUser['password'] ="password";

        

       
        

       
        //conversion de l'user en tableau
        
        $this->currentPage = PAGEEDITFORM;

    }
    public function goToAddUser(){
        $this->currentPage = PAGECREATEFORM;
    }
    
   
     
    public function goToListUser(){
        
        $this->currentPage = PAGELIST;
        $this->editUser = [];
    }




     public function addUser(){


        // Vérifier que les informations envoyées par le formulaire sont correctes
         $validationAttributes = $this->validate();
     
       
        $validationAttributes["newUser"];
        $validationAttributes["newUser"]["password"] = Hash::make($validationAttributes["newUser"]["password"]);

     
        
        
        // Ajouter un nouvel utilisateur
        User::create($validationAttributes["newUser"]);
        //attacher directement le role secretaire
        $user = User::where("email", $validationAttributes["newUser"]["email"])->first();
        $user->roles()->attach(2);
        // $user->notify(new RegisterNotify());
        //send mail
        // Mail::to($validationAttributes["newUser"]["email"])->send(new WelcomeUserMail());

        // Rediriger l'utilisateur sur la page de la liste des utilisateurs
        //vider le formulaire
        $this->newUser = [];
        $this->goToListUser();
        


       

        $this->dispatchBrowserEvent("showSuccessMessage", ["message"=>"Utilisateur créé avec succès!"]);
    }
     public function updateUser(){
        // Vérifier que les informations envoyées par le formulaire sont correctes
        $validationAttributes = $this->validate();
        $validationAttributes["editUser"] ;
       
         
      
        
        
        User::find($this->editUser["id"])->update($validationAttributes["editUser"]); 
       
        $this->editUser = [];
        $this->goToListUser();
       
      $this->dispatchBrowserEvent("showSuccessMessage", ["message"=>"Utilisateur mis a jour succès!"]);
        //  $this->dispatchBrowserEvent("showSuccessMessage", ["message"=>"Utilisateur mis a jour succès!"]);
    
    }
    
    public function confirmDelete($name, $id){
        $this->dispatchBrowserEvent("showConfirmMessage", ["message"=> [
            "text" => "Vous êtes sur le point de supprimer $name de la liste des utilisateurs. Voulez-vous continuer?",
            "title" => "Êtes-vous sûr de continuer?",
            "type" => "warning",
            "data" => [
                "user_id" => $id
            ]
        ]]);
    }

    public function deleteUser($id){
        User::destroy($id);

        $this->dispatchBrowserEvent("showSuccessMessage", ["message"=>"Utilisateur supprimé avec succès!"]);
    }



}
