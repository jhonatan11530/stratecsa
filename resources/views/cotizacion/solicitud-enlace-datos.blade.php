@extends('layouts.plantilla-sitio')
@section('styles')

<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ URL::asset('formulario/css/responsive-tabs.css')}}">
<link rel="stylesheet" href="{{ URL::asset('formulario/css/demo.css')}}" />
<link rel="stylesheet" href="{{ URL::asset('formulario/css/sky-forms.css')}}" />
<link rel="stylesheet" href="{{ URL::asset('formulario/css/sky-forms-blue.css')}}" />
<style type="text/css">
.sky-form .input, .sky-form .select, .sky-form .textarea, .sky-form .radio, .sky-form .checkbox, .checkbox-inline, .sky-form .toggle, .sky-form .button {
    position: relative;
    margin-top: 1rem;
}

.labeli{
       font: 15px/19px 'Open Sans', Helvetica, Arial, sans-serif;    
        color: #666; 
        text-align: left;
        margin-top: 1rem;
}

label.checkbox-inline {
    margin-top: 35px;
}

select.form-control {
    margin-top: 25px;
    color: grey;
}

label.labeli {
    margin-top: 37px;
}

footer .footer_logo ul li a {
   padding: 0 !important;
}

@media only screen and (max-width: 480px){
        h2.tamaño{
            font-size: 40px !important;
        }
</style>
@endsection
@section('content')
    <section class="page-title" style="background-image:url(../../images/background/22.jpg)">
        <div class="auto-container">
            <div class="container">
                <h2 class="tamaño">Internet Dedicado</h2>
                <div class="text">Obtendrás un servicio de internet empresarial de alta velocidad (Carrier Class).
              </div>
                <div class="big-letter">Stra<span>tec</span>sa
                </div>
            </div>
        </div>
    </section>
    <section>
       <div class="container" style="margin-top: 3rem; margin-bottom: 3rem;">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <form class="sky-form" action="/email/cotizar/dedicado" id="formDcorpus" method="get">
                        {{ csrf_field() }}
                            <header>Cotización de internet dedicado</header>
                            <fieldset>
                                <section>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="label"></label>
                                                <label class="input">
                                                <input required="" type="text" name="Nombre_empresa" id="Nombre" maxlength="50"  placeholder="Razón social de la empresa: (*)">
                                            </label>                                            
                                        </div>
                                        <div class="col-md-6">
                                            <label class="label"></label>
                                                <label class="input">
                                                <input required="" type="text" name="Nombre_contacto" id="Nombre" maxlength="50"  placeholder="Persona de contacto: (*)">
                                            </label>                                            
                                        </div>                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="label"></label>
                                                <label class="input">
                                                <input required="" type="number" name="telefono" id="Nombre" maxlength="50"  placeholder="Teléfono: (*)">
                                            </label>                                            
                                        </div>
                                        <div class="col-md-6">
                                            <label class="label"></label>
                                                <label class="input">
                                                <input required="" type="email" name="correo" id="Nombre" maxlength="50"  placeholder="Correo: (*)">
                                            </label>                                            
                                        </div>                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="label"></label>
                                                <label class="input">
                                                <input required="" type="text" name="departamento" id="Nombre" maxlength="50"  placeholder="Departamento: (*)">
                                            </label>                                            
                                        </div> 
                                        <div class="col-md-6">
                                            <label class="label"></label>
                                                <label class="input">
                                                <input required="" type="text" name="ciudad" id="Nombre" maxlength="50"  placeholder="Ciudad: (*)">
                                            </label>                                            
                                        </div>                                     
                                    </div>
                                   
                                    <div class="row">
                                         <div class="col-md-6">
                                            <label class="label"></label>
                                                <label class="input">
                                                <input required="" type="text" name="direccion" id="Nombre" maxlength="50"  placeholder="Dirección o coordenadas del sitio: (*)">
                                            </label>                                            
                                        </div> 
                                        <div class="col col-2">
                                                <label class="labeli">Dirección ip:</label>
    
                                        </div>
                                        <div class="col col-4">
                                            <label class="input">
                                            <select name="direccion_ip" class="form-control">
                                                <option value="30(1Ip)">/30 (1Ip)</option>
                                                <option value="29(5Ip)">/29 (5Ip)</option>

                                            </select> 
                                            </label>                                           
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="label"></label>
                                                <label class="input">
                                                    <input required="" type="text" name="capacidad" id="Nombre" maxlength="50"  placeholder="Capacidad requerida">
                                                
                                            </label>                                            
                                        </div> 
                                        <div class="col col-3">
                                            <label class="labeli">Tipo de servicio:</label>
                                        </div>
                                        <div class="col col-1">
                                            <label class="checkbox-inline"><input name="fibra" type="checkbox" value="1">Fibra</label>

                                        </div>
                                        <div class="col col-1">
                                            <label class="checkbox-inline"><input name="cobre" type="checkbox" value="1">Radio</label>

                                        </div>
                                    </div>
                                    <div class="row" style="margin: 2rem;">                   
                                        <div class="col col-12">
                                            <center>
                                                <button type="submit" id="enviar" class="button btn-footer">Enviar</button>                   
                                            </center>
                                        </div>
                                    </div>
                                
                            </section>                        
                        </fieldset>                                                                          
                </form>                    
            </div>
            <div class="col-md-4 hidden-xs" style="padding-bottom: 4rem;position: relative;">
                    <img src="{{ URL::asset('images/robot.png') }}" style=" position: inherit;left: -6rem;">   
                </div>                   
            </div>
        </div>
    </section>


@section('scripts') 

@endsection 
@endsection