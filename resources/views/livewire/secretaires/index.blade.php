<div wire:ignore.self>


@if($currentPage == PAGELIST)
  @include('livewire.secretaires.liste')'
@elseif ($currentPage == PAGECREATEFORM)
    @include('livewire.secretaires.create')
@else
    @include('livewire.secretaires.edit')
@endif   
{{--     @if($currentPage == PAGELIST)
        @include("livewire.secretaires.liste")
    @endif

    @if($currentPage == PAGECREATEFORM)
         @include("livewire.secretaires.create")
    @endif

    @if($currentPage == PAGEEDITFORM)
        @include("livewire.secretaires.edit")
    @endif --}}
 

</div>


<script>
    window.addEventListener("showSuccessMessage", event=>{
        Swal.fire({
                position: 'center',
                icon: 'success',
                toast:true,
                title: event.detail.message || "Opération effectuée avec succès!",
                showConfirmButton: false,
                timer: 5000
                }
            )
    })
</script>

<script>
    window.addEventListener("showConfirmMessage", event=>{

       Swal.fire({
        title: event.detail.message.title,
        text: event.detail.message.text,
        icon: event.detail.message.type,
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Continuer',
        cancelButtonText: 'Annuler'
        }).then((result) => {
        if (result.isConfirmed) {
            //delete user
           if(event.detail.message.data){
                @this.deleteUser(event.detail.message.data.user_id);
            }
              
        }
        })
    })

</script>
