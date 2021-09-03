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
}
</style>
@endsection
@section('content')
    <section class="page-title" style="background-image:url(../../images/background/22.jpg)">
        <div class="auto-container">
            <div class="container">
                <h2 class="tamaño">Enlace de datos</h2>
                <div class="text">Enlace de datos te brinda soluciones que te <br> permiten manejar en línea tus operaciones.
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
                    <form class="sky-form" action="/email/cotizar/datos" id="formDcorpus" method="get">
                        {{ csrf_field() }}
                            <header>Cotización de enlace de datos</header>
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
                                    <div class="row" style="margin-top:1rem;">
                                        <div class="col-sm-12">
                                            <h5><b> Datos técnicos del punto</b></h5>
                                        </div>
                                    </div>
                                    <div id="example1">                                   
                                        <div class="row">
                                             <div class="col-md-6">
                                                <label class="label"></label>
                                                    <label class="input">
                                                    <input required="" type="text" name="direccion[]" id="Nombre" maxlength="50"  placeholder="Dirección o coordenadas del sitio: (*)">
                                                </label>                                            
                                            </div> 
                                            <div class="col-md-6">
                                                <label class="label"></label>
                                                    <label class="input">
                                                        <input required="" type="text" name="capacidad[]" id="Nombre" maxlength="50"  placeholder="Capacidad requerida">
                                                    
                                                </label>                                            
                                            </div> 
                                        </div>
                                        <div class="row">
                                            <div class="col col-4">
                                                <label class="labeli">Tipo de servicio:</label>
                                            </div>
                                            <div class="col col-4">
                                                <label class="checkbox-inline"><input name="fibra[]" type="checkbox" value="1">Fibra</label>

                                            </div>
                                            <div class="col col-4">
                                                <label class="checkbox-inline"><input name="cobre[]" type="checkbox" value="1">Radio enlace</label>

                                            </div>
                                        </div>
                                        <div class="row" style="margin-top: 2rem;">
                                            <div class="col-md-1">
                                                <a class="btn btn-secondary" id="str_agregar" type="button"><span class="fa fa-plus"></span></a>
                                            </div>
                                            <div class="col-md-11">
                                                <span>Si desea agregar mas puntos en la cotización, dele click al botón <b>+</b> y complete la información</span>
                                            </div>
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
<script type="text/javascript">
    var Cont=1;
        $('#str_agregar').click(function(){
            var html=   '<div class="row" style="margin-top:1rem;">'+
                            '<div class="col-sm-12">'+
                                '<h5><b> Datos del otro punto</b></h5>'+
                            '</div>'+
                        '</div>'+
                        '<div class="row">'+
                        '<div class="col-md-6">'+
                            '<label class="label"></label>'+
                            '<label class="input">'+                                               
                                '<input required="" type="text" name="direccion[]" id="Nombre" maxlength="50"  placeholder="Dirección o coordenadas del sitio: (*)">'+
                            '</label>'+                                            
                        '</div> '+
                        '<div class="col-md-6">'+
                            '<label class="label"></label>'+
                            '<label class="input">'+
                                '<input required="" type="text" name="capacidad[]" id="Nombre" maxlength="50"  placeholder="Capacidad requerida">'+                                                    
                            '</label>'+                                            
                        '</div>'+ 
                    '</div>'+
                    '<div class="row">'+                        
                        '<div class="col col-4">'+
                            '<label class="labeli">Tipo de servicio:</label>'+
                        '</div>'+
                        '<div class="col col-4">'+
                            '<label class="checkbox-inline"><input name="fibra[]" type="checkbox" value="1">Fibra</label>'+
                        '</div>'+
                        '<div class="col col-4">'+
                            '<label class="checkbox-inline"><input name="cobre[]" type="checkbox" value="1">Radio enlace</label>'+

                        '</div>'+
                    '</div>';

            $('#example1').append(html);
            Cont = Cont+1;
        })
        $('#str_delete').click(function(){
            $('input:checkbox').each(function(a,e){
                if (!$(this).attr('name')) {
                    if ($(e).is(':checked')) {
                        var tr=$(this).parent().parent();
                        $(tr).empty();
                    }
                }
            })
            $("input[name=checked]").prop('checked', false);
            $('input[name^="cantidad"]').trigger("change");
        })
        
   
</script>

@endsection 
@endsection