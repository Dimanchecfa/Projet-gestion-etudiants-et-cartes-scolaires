@extends("layouts.master")

@section("conten")
<div class="row">
    <div class="col-12 " style="height:120px">
        <div class="jumbotron ">
         <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Acceuil</a></li>
                            <li class="breadcrumb-item active"></li>
                        </ol>
                <h3 class="display-7">Bienvenu, <strong>{{ userFullName()}}</strong></h3>
                <p class="display-7"> <strong>{{ getRolesName()}}</strong></p>
                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
               
                <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                <p class="lead">
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                </p>
        </div>
                
    </div>
  
</div>
 
@endsection
