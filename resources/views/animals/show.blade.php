<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">

<div class="container">
    <br><br>

    <div class="card">

        <div class="card-header">

         <div class="row">
          <div class="col md 8">

            <div class="card-title">
                <h2> Animal:{{ $animal->animal }}</h2>
            </div>
            </div>
            <div class="col md 4">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                
               <a class="btn btn-primary" href="{{ route('animals.index') }}"><i class="fa fas-add"></i> < Regresar</a>
              
              </div>
            </div>
            </div>
        </div>

        

        <div class="card-body">
         <table class="table table-striped">

        <thead>
            <tr>
                <th>Imagen de animal</th>
                <th>Información</th>
                <th>Descripción</th>
               
                
            </tr>
        </thead>

        <tbody>
          
       
        
       <tr>
       
      <td>
        
        <img src="\images\animal.jpg">
   
      <td>
         <p><b>Edad:</b> {{ $animal->age }} Años</p>
         <p><b>Lugar de origen:</b> {{ $animal->birthplace }}</p>
         <p><b>Clima:</b> {{ $animal->climate }}</p>
         <p><b>Color:</b> {{ $animal->color }} Año(s)</p>
         <p><b>Pejale:</b> {{ $animal->fur }}</b></p>
         <p><b>Comida:</b> {{ $animal->food }}</p>
      </td>
      <td><p>{{ $animal->comemmtanim }}</p></td>
       
      
        
     
       
    </tr>
       
    </tbody>
        </table> 

        </div>
        <div class="card-footer">
            <div class="col md 4">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    
                   <a class="btn btn-primary" href="{{ route('professions.edit', $animal->id) }}"><i class="fa fas-add"></i>Editar</a>
                   <a class="btn btn-danger" href="{{ route('professions.destroy', $animal->id) }}"><i class="fa fas-add"></i>Eliminar</a>
                  </div>
                </div>
        </div>
        </div>
    </div>