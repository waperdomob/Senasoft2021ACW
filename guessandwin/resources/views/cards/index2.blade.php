@extends('layouts.plantilla.newgame')

@section('componentes')

<!-- sidebar fijo  -->

<div class="container">
  <div class="row">
    <div class="col-sm-3 ">
      <ul>
          <table class="table-auto">
  <thead>
    <tr>
      <th scope="col-auto mt-4">Jugadores</th> 
    </tr>
  </thead> 
   <tbody class="mt-4">
        <br>
       <tr>
            <td class="mt-4"> <img src="img/user.png" width="35px" height="30px" alt=""> Antonio</td>
        </tr>
        <br>
        <tr>
        <td class="auto"> <img src="img/user.png" width="35px" height="30px" alt=""> Antonio</td>
        </tr>
        <tr>
            <td></td>
        </tr>
       <tr>
            <td class="auto"> <img src="img/user.png" width="35px" height="30px" alt=""> Antonio</td>
        </tr>
        <tr></tr>
        <tr>
        <td class="auto"> <img src="img/user.png" width="35px" height="30px" alt=""> Antonio</td>
        </tr>
        <tr></tr>
  </tbody>
</table>

    </div>
    <div class="col-sm-6">

    
        <div class="row mt-4">
            <div class="col">
            <div class="card " style="width: 15rem;">
                    <img src="img/policarpa.jpg" class="card-img-top" height="155px"   alt="...">
                    <div class="card-body">
                        <p class="card-text">nombre personaje modulo o erros</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 15rem;">
                        <img src="img/fina.jpg" class="card-img-top"height="155px" alt="...">
                        <div class="card-body">
                            <p class="card-text">nombre personaje modulo o error</p>
                        </div>
                </div>
            </div>
        </div>   
        
        <div class="row mt-4">
            <div class="col">
            <div class="card" style="width: 15rem;">
                    <img src="img/mano.png" class="card-img-top" height="155px" alt="...">
                    <div class="card-body">
                        <p class="card-text">nombre personaje modulo o erros</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 15rem;">
                        <img src="img/err.jpg" class="card-img-top" height="155px" alt="...">
                        <div class="card-body">
                            <p class="card-text">nombre personaje modulo o erros</p>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
    <  <table class="table">
        <thead>
            <tr>
            <th scope="col">CARTA</th>
            <th scope="col">CHECK</th>
            <th scope="col">CARTA</th>
            <th scope="col">CHECK</th>
            
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Pedro</td>
                    <td>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        </div>
                    </td>

                 <td>Juan</td>
                    <td>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        </div>
                    </td>
            </tr>
           
            <tr>
                <td>Carlos</td>
                    <td>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        </div>
                    </td>
           
            
            
                <td>Juanita</td>
                    <td>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        </div>
                    </td>
            </tr>
            <tr>
            
                <td>Antonia</td>
                    <td>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        </div>
                    </td>
            
            
                <td>Carolina</td>
                    <td>
                        <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        </div>
                    </td>
            </tr>
            <tr>
            
                <td>Manuel</td>
                    <td>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        </div>
                    </td>
            </tr>
            <tr>
            
                <td>Nomina</td>
                    <td>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        </div>
                    </td>
            
            
                <td>Facturacion</td>
                    <td>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        </div>
                    </td>
            </tr>
            <tr>
            
                <td>Recibos</td>
                    <td>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        </div>
                    </td>
            
            
                <td>Comprobante contable</td>
                    <td>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        </div>
                    </td>
            </tr>
            <tr>
            
                <td>Usuarios</td>
                    <td>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        </div>
                    </td>
            
            
                <td>Contabilidad</td>
                    <td>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        </div>
                    </td>
            </tr>
            <tr>
            
                <td>404</td>
                    <td>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        </div>
                    </td>
           
                <td>stack overflow</td>
                    <td>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        </div>
                    </td>
            </tr>
            <tr>
            
                <td>memory out of range</td>
                    <td>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        </div>
                    </td>
           
            
                <td>Null pointer</td>
                    <td>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        </div>
                    </td>
            </tr>
            <tr>
            
                <td>Syntax Error</td>
                    <td>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        </div>
                    </td>
            
                <td>Encoding Error</td>
                    <td>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        </div>
                    </td>
            </tr>

        </tbody>
        </table>
    </div>
  </div>
</div>
@endsection

