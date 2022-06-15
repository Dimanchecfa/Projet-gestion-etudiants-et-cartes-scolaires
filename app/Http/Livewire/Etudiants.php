<?php

namespace App\Http\Livewire;
use Illuminate\Validation\Rule;
use App\Models\Etudiant;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Etudiants extends Component
   
  
{
     use WithPagination;
     use WithFileUploads;
    public $currentPage =PAGELIST;
    public $newStudent =[];
    public $photo;
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

            // 'required|email|unique:users,email Rule::unique("users", "email")->ignore($this->editStudent['id'])
            return [
                "editStudent.matricule" => "required",
                "editStudent.nom" => "required",
                'editStudent.prenom' => 'required',
                'editStudent.email' => ['required', 'email', Rule::unique("etudiants", "email")->ignore($this->editStudent['id']) ],
                'editStudent.annee_academique' => 'required',
                "editStudent.cycle" => "required",
                'editStudent.niveau' => 'required',
                
                
            ];
        }

        return [
            'newStudent.matricule' => 'required' ,
            'newStudent.nom' => 'required' ,
            'newStudent.prenom' => 'required' ,
            'newStudent.email' => ['required', 'email', Rule::unique("etudiants", "email")],
            'newStudent.annee_academique' => 'required' ,
            'newStudent.cycle' => 'required' ,
            'newStudent.niveau' => 'required' ,
            
            
        ];
    }
      public function goToEditStudent($id){
        $this->editStudent = Etudiant::find($id)->toArray();
        //ajoutzer le mot de passe dans le tableau
    

        

       
        

       
        //conversion de l'user en tableau
        
        $this->currentPage = PAGEEDITFORM;

    }
     public function goToAddStudent(){
        $this->currentPage = PAGECREATEFORM;
    }
       
    public function goToListStudent(){
        
        $this->currentPage = PAGELIST;
        $this->editStudent = [];
    }

    public function addStudent(){
      $validationAttributes = $this->validate();
      $validationAttributes['newStudent'];
      if ($this->photo) {
			$validationAttributes['newStudent']['avatar'] = $this->photo->store( '/' ,'avatars'. '/'. $this->newStudent['id']);
       
  

     

    
    //  Etudiant::create($validationAttributes['newStudent']);
      
     
    }
     Etudiant::create($validationAttributes['newStudent']);
         $this->newStudent = [];
            $this->goToListStudent();

         $this->dispatchBrowserEvent("showSuccessMessage", ["message"=>"Etudiant créé avec succès!"]);
    }

      public function updateStudent(){
        // Vérifier que les informations envoyées par le formulaire sont correctes
        $validationAttributes = $this->validate();
        $validationAttributes["editStudent"] ;
       
         
      
        
        
        Etudiant::find($this->editStudent["id"])->update($validationAttributes["editStudent"]); 
       
        $this->editStudent = [];
        $this->goToListStudent();
       
      $this->dispatchBrowserEvent("showSuccessMessage", ["message"=>"Utilisateur mis a jour succès!"]);
        //  $this->dispatchBrowserEvent("showSuccessMessage", ["message"=>"Utilisateur mis a jour succès!"]);
    
    }

     public function confirmDelete($nom, $id){
        $this->dispatchBrowserEvent("showConfirmMessage", ["message"=> [
            "text" => "Vous êtes sur le point de supprimer $id  de la liste des etudiants. Voulez-vous continuer?",
            "title" => "Êtes-vous sûr de continuer?",
            "type" => "warning",
            "data" => [
                $id
            ]
        ]]);
       
    }

    public function deleteStudent($id){
        Etudiant::destroy($id);

        $this->dispatchBrowserEvent("showSuccessMessage", ["message"=>"Etudiant supprimé avec succès!"]);
    }



}
    

