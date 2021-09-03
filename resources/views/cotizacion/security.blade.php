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
footer .footer_logo ul li a {
        padding: 0 !important;
        }
</style>
@endsection
@section('content')
    <section class="page-title" style="background-image:url(../../images/background/22.jpg)">
        <div class="auto-container">
            <div class="container">
                <h2>Seguridad Digital</h2>
                <div class="text">Proteja de forma eficaz su empresa.
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
                    <form class="sky-form" action="" id="formDcorpus" method="POST">
                        {{ csrf_field() }}
                            <header>Cotización de Seguridad Digital</header>
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
                                                <input required="" type="number" name="telefono" id="Nombre" maxlength="50"  placeholder="Telefono: (*)">
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
                                        <div class="col col-2">
                                            <label class="radio"><input type="radio" name="ip_30" value="ip_30" id="Sexo" checked=""><i></i>/30 (1Ip) </label>
                                        </div>
                                        <div class="col col-2">
                                            <label class="radio"><input type="radio" name="ip_29" value="ip_29" id="Sexo"><i></i>/29 (5IP)</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="label"></label>
                                                <label class="input">
                                                <select name="capacidad" class="form-control">
                                                    <option value="0">Capacidad requerida</option>
                                                    <option value="10">10MB</option>
                                                    <option value="20">20MB</option>
                                                    <option value="30">30MB</option>
                                                    <option value="40">40MB</option>
                                                    <option value="50">50MB</option>
                                                    <option value="60">60MB</option>
                                                </select>
                                            </label>                                            
                                        </div> 
                                        <div class="col col-3">
                                            <label class="labeli">Tipo de servicio:</label>
                                        </div>
                                        <div class="col col-1">
                                            <label class="checkbox-inline"><input type="checkbox" value="">Fibra</label>

                                        </div>
                                        <div class="col col-1">
                                            <label class="checkbox-inline"><input type="checkbox" value="">Cobre</label>

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