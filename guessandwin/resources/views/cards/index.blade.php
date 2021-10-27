@extends('layouts.plantilla.newgame')

@section('componentes')

<!-- sidebar fijo  -->

<div class="row">
  
  <div class="col-sm-2">
            <table class="table">
        <thead>
            <tr>
            <th scope="col">JUGADORES</th>      
            </tr>
        </thead>
        <tbody>
            @foreach ($players as $player)
            <tr>               
            <td class="w-34"><img src="img/user.png" width="35px" hright="30px"  alt="">           
                {{$player -> name}}            
            </td>             
            </tr>
            @endforeach

        </tbody>
        </table>
            @if ($turno == 1 )
                @include('cards.option')
            @endif
    </div>
   
    <div class="col-sm-7">

        <div class="row mt-2 ">
            @foreach ($cards as $card)                
                    
                    <div class="card ml-4" style="width: 10rem;">
                        @if ($card->image)
                            <img src="{{ asset($card->image) }}" class="card-img-top" alt="{{$card->image}}"  height="150">
                        @endif
                        <div class="card-body">
                            <p class="card-text">{{ $card->name }}</p>
                        </div>
                    </div>
            @endforeach
        </div>  
    </div>

    <div class="col-sm-3">
        <!-- Sidebar-->
        <div class=" bg-dark" id="sidebar-wrapper">
                
            <TABLE class="table">
                <TR>
                    <TH colspan="3" class="text-center">Cartas</TH>
                </TR>
                <TR>
                    <TH class="text-center">Programadores</TH> 
                    <TH class="text-center">Módulos</TH>
                    <TH class="text-center">Errores</TH>
                </TR>
                <TR>
                    <TD><input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                        <label class="btn btn-outline-success d-grid gap-2" for="btncheck1">Pedro</label></TD>
                    <TD><input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                        <label class="btn btn-outline-success d-grid gap-2" for="btncheck2">Nomina</label></TD>
                    <TD><input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
                        <label class="btn btn-outline-success d-grid gap-2" for="btncheck3">404</label></TD>
                </TR>
                <TR>
                    <TD><input type="checkbox" class="btn-check" id="btncheck4" autocomplete="off">
                        <label class="btn btn-outline-success d-grid gap-2" for="btncheck4">Juan</label></TD>
                    <TD><input type="checkbox" class="btn-check" id="btncheck5" autocomplete="off">
                        <label class="btn btn-outline-success d-grid gap-2" for="btncheck5">Facturación</label></TD>
                    <TD><input type="checkbox" class="btn-check" id="btncheck6" autocomplete="off">
                        <label class="btn btn-outline-success d-grid gap-2" for="btncheck6">Stack overflow</label></TD> 
                </TR>
                <TR>
                    <TD><input type="checkbox" class="btn-check" id="btncheck7" autocomplete="off">
                        <label class="btn btn-outline-success d-grid gap-2" for="btncheck7">Carlos</label></TD>
                    <TD><input type="checkbox" class="btn-check" id="btncheck8" autocomplete="off">
                        <label class="btn btn-outline-success d-grid gap-2" for="btncheck8">Recibos</label></TD>
                    <TD><input type="checkbox" class="btn-check" id="btncheck9" autocomplete="off">
                        <label class="btn btn-outline-success d-grid gap-2" for="btncheck9">Memory out of range</label></TD>
                </TR>
                <TR>
                    <TD><input type="checkbox" class="btn-check" id="btncheck10" autocomplete="off">
                        <label class="btn btn-outline-success d-grid gap-2" for="btncheck10">Juanita</label></TD>
                    <TD><input type="checkbox" class="btn-check" id="btncheck11" autocomplete="off">
                        <label class="btn btn-outline-success d-grid gap-2" for="btncheck11">Comprobante contable</label></TD>
                    <TD><input type="checkbox" class="btn-check" id="btncheck12" autocomplete="off">
                        <label class="btn btn-outline-success d-grid gap-2" for="btncheck12">Null pointer</label></TD>
                </TR>
                <TR>
                    <TD><input type="checkbox" class="btn-check" id="btncheck13" autocomplete="off">
                        <label class="btn btn-outline-success d-grid gap-2" for="btncheck13">Antonio</label></TD>
                    <TD><input type="checkbox" class="btn-check" id="btncheck14" autocomplete="off">
                        <label class="btn btn-outline-success d-grid gap-2" for="btncheck14">Usuarios</label></TD>
                    <TD><input type="checkbox" class="btn-check" id="btncheck15" autocomplete="off">
                        <label class="btn btn-outline-success d-grid gap-2" for="btncheck15">Syntax error</label></TD>
                </TR>
                <TR>
                    <TD><input type="checkbox" class="btn-check" id="btncheck16" autocomplete="off">
                        <label class="btn btn-outline-success d-grid gap-2" for="btncheck16">Carolina</label></TD>
                    <TD><input type="checkbox" class="btn-check" id="btncheck17" autocomplete="off">
                        <label class="btn btn-outline-success d-grid gap-2" for="btncheck17">Contabilidad</label></TD>
                    <TD><input type="checkbox" class="btn-check" id="btncheck18" autocomplete="off">
                        <label class="btn btn-outline-success d-grid gap-2" for="btncheck18">Encoding error</label></TD>
                </TR>
                <TR>
                    <TD><input type="checkbox" class="btn-check" id="btncheck19" autocomplete="off">
                        <label class="btn btn-outline-success d-grid gap-2" for="btncheck19">Manuel</label></TD>  <TD></TD> <TD></TD> 
                </TR>
            </TABLE>
        </div>
    </div>
  </div>

@endsection

