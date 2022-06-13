<?php

namespace App\Http\Livewire;
use Illuminate\Validation\Rule;
use App\Models\Etudiant;
use Livewire\Component;
use Livewire\WithPagination;

class Etudiants extends Component
   
  
{
     use WithPagination;
    public $currentPage =PAGELIST;
    public $newStudent =[];
    protected $paginationTheme = "bootstrap";
    public function render()
    {
        return view('livewire.etudiants.index', [
            "etudiants" =>Etudiant::latest()->paginate(10)
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
        $this->editUser = Etudiant::find($id)->toArray();
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
    
}
