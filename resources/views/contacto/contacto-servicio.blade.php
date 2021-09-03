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

</style>
@endsection
@section('content')
    <section class="page-title" style="background-image:url(../../images/background/22.jpg)">
        <div class="auto-container">
            <div class="container">
                <h2>Cotización</h2>
                <div class="text">Contamos con multiples servicios que le ayudarán <br>
                    a la solución de sus problemas IT.
              </div>
                <div class="big-letter">Stra<span>tec</span>sa
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container" style="margin-top: 3rem;">
            <div class="row">
                <div class="col-md-8">
                    <form class="sky-form" action="/email/cotizar/datos" id="formDcorpus" method="get">
                        {{ csrf_field() }}
                            <header>Solictud de cotización</header>
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
                                         <div class="col-md-12">
                                            <label class="label"></label>
                                                <label class="input">
                                                  <textarea type="text" id="form10" class="md-textarea form-control" rows="3" placeholder="Escriba su necesidad (*)"></textarea>

                                            </label>                                            
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
                <div class="col-md-4" style="
                    padding-bottom: 4rem;
                    position: relative;
                ">
                    <img src="{{ URL::asset('images/robot.png') }}" style=" position: inherit;left: -6rem;">   
                </div>

    
            </div>
        </div>
    </section>


@section('scripts') 

@endsection 
@endsection