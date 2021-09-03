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
    width: 57rem;
    margin-bottom: 4rem;
}

.sky-form header {
  
    width: 600px;

}
</style>
@endsection
@section('content')
    <section class="page-title" style="background-image:url(../../images/background/22.jpg)">
        <div class="auto-container">
            <div class="container">
                <h2>Encuesta satisfacción</h2>
                <div class="text">Invertir en tecnologia hace a las empresas más<br>
                    rentables y eficientes.

              </div>
                <div class="big-letter">Stra<span>tec</span>sa
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container" style="margin-top: 3rem;">
            
        </div>
    </section>


@section('scripts') 

@endsection 
@endsection