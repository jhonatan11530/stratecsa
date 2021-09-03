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

.sky-form {
     /* width: 57rem;  */
    margin-bottom: 4rem;
}

/* .sky-form header {
  width: 600px;  

} */
footer .footer_logo ul li a {
        padding: 0 !important;
        }

@media only screen and (max-width: 480px){
    h2.tamaño{
        font-size: 40px !important;
    }
}
</style>
@endsection
@section('content')
    <section class="page-title" style="background-image:url(../../images/background/22.jpg)">
        <div class="auto-container">
            <div class="container">
                <h2 class="tamaño">Software a la medida</h2>
                <div class="text">Invertir en tecnología hace a las empresas<br>más rentables y eficientes.

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
                    <form class="sky-form" action="/email/cotizar/software" id="formDcorpus" method="get">
                        {{ csrf_field() }}
                            <header>Cotización desarrollo de software</header>
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
                                                <input required="" type="text" name="direccion" id="Nombre" maxlength="50"  placeholder="Dirección: (*)">
                                            </label>                                            
                                        </div>
                                        <div class="col-md-6">
                                            <label class="label"></label>
                                                <label class="input">
                                                <input required="" type="text" name="municipio" id="Nombre" maxlength="50"  placeholder="Municipio: (*)">
                                            </label>                                            
                                        </div>
                                    </div> 
                                    <div class="row"> 
                                        <div class="col col-3">
                                            <label class="labeli">Tipo de contratación:</label>
                                        </div>
                                        <div class="col col-3">
                                            <label class="checkbox-inline"><input type="checkbox" value="1" name="servicio" value="">Como servicio</label>

                                        </div>
                                        <div class="col col-3">
                                            <label class="checkbox-inline"><input type="checkbox" value="1" name="licencia" value="">Licencia de uso</label>

                                        </div>
                                        <div class="col col-3">
                                            <label class="checkbox-inline"><input type="checkbox" value="1" name="desarrollo"  value="">Desarrollo propio</label>
                                        </div>  
                                    </div>
                                    <div class="row" style="margin-bottom: 1rem;">
                                        <div class="col-md-12">
                                            <label class="label"></label>
                                            <label class="input">
                                                <textarea type="text" id="form10" class="md-textarea form-control" rows="3" name="mensaje" placeholder="Describa ampliamente su necesidad (*)"></textarea>
                                            </label>                                            
                                        </div> 
                                    </div>
                                    <center>
                                        <div class="g-recaptcha" data-sitekey="6Lf0iZkUAAAAABOKQYBbai14dw0L25JBmF6lUHVb"></div>
                                    </center>
                                    <div class="response"></div>
                                    <div id="error-g"></div>
                                    <div class="row" style="margin-top: 1rem;">
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
<script>
    $(document).ready(function(){
        $('form').submit(function(){
            var inp = $('[name^=g-recaptcha-response]').val()
            if(!inp){
                $('#error-g').html('<center><p style="color: red;">Captcha Obligatorio</p></center>')
                return false
            }
        })
    })
</script>
@endsection 
@endsection