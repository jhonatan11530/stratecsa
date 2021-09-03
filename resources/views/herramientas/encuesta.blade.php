@extends('layouts.plantilla-sitio')
@section('styles')

<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ URL::asset('formulario/css/responsive-tabs.css')}}">
<link rel="stylesheet" href="{{ URL::asset('formulario/css/demo.css')}}" />
<link rel="stylesheet" href="{{ URL::asset('formulario/css/sky-forms.css')}}" />
<link rel="stylesheet" href="{{ URL::asset('formulario/css/sky-forms-blue.css')}}" />
<style type="text/css">
.sky-form .input, .sky-form .select, .sky-form .textarea, .sky-form .checkbox, .sky-form .checkbox, .checkbox-inline, .sky-form .toggle, .sky-form .button {
    position: relative;
    margin-top: 1rem;
}

.labeli{
       font: 15px/19px 'Open Sans', Helvetica, Arial, sans-serif;    
        color: #666; 
        text-align: left;
        margin-top: 1rem;
}

.sky-form{
    padding: 2rem;
    margin-bottom: 4rem;
}

.form-group{
    margin-bottom: 1rem;
}

.sky-form h3{
    margin-bottom: 1rem;
        margin-top: 1rem;

}

.sky-form .input, .sky-form .select, .sky-form .textarea, .sky-form .checkbox, .sky-form .checkbox, .checkbox-inline, .sky-form .toggle, .sky-form . {
    position: relative;
    color: grey;
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
                <h2>Encuesta de satisfacción</h2>
                <div class="text">Para Stratecsa es muy importante conocer su opinión sobre el servicio que le<br>brindamos.
              </div>
                <div class="big-letter">Stra<span>tec</span>sa
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container" style="margin-top: 3rem;">
            <div class="row">
                <div class="row">        
                    <div class="head-title text-center">
                        <h3 style="font-weight: 700;color: #292a2e; font-size: 30px; margin-bottom: 1rem; margin: 1em;">Encuesta de <span class="text-azulCorp">satisfacción</span></h3>                        <div class="separator3"></div>
                        <p  class="text-mega m-top-10" style="margin: 3em; text-align: justify;">Para Stratecsa es muy importante conocer su opinión sobre el servicio que le brindamos, por esa razón solicitamos su amable colaboración diligenciando la siguiente encuesta, con el fin de mejorar continuamente nuestros procesos en pro de ofrecerle un excelente servicio. *Obligatorio.
                        </p>
                    </div>
                </div>
            </div>
    <hr>
<form class="sky-form" action="/enviar/encuesta" method="get">
    <section class="row">
      <section class="col-md-12">
        <h3>DATOS BASICOS</h3>
        <p></p>
      </section>
    </section>
    <section class="row">
      <section class="col-md-12">
        <section class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="fechaActual">Correo electronico: *</label>
              <input type="text" class="form-control" id="fechaActual" name="correo" placeholder="Correo electronico" required>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="fechaActencion">Razón Social cliente: *</label>
              <input type="text" class="form-control" id="fechaAtencion" name="razon_social" placeholder="Razon social" required>
            </div>
          </div>
        </section>
        <section class="row">
          <div class="col-md-8">
            <div class="form-group">
              <label for="nombreCompleto">Nombre Completo: *</label>
              <input type="text" class="form-control" id="nombreCompleto" name="nombre" maxlength="128" placeholder="Nombre Compelto" required>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form_group">
              <label for="edadEncuestado">Nit: *</label>
              <input type="text" class="form-control" id="edadEncuestado" name="nit" placeholder="Nit" maxlength="10" required/>
            </div>
          </div>
        </section>
        <section class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label for="idIdentificacion">Identificación:</label>
              <input type="number" id="idIdentificacion" class="form-control" name="identidad" placeholder="Numero de Identificación" maxlength="15"/>
            </div>
          </div>
          <div class="col-md-4">
            <label for="telefono">Telefono: *</label>
            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Numero Telefonico" maxlength="12" required/>
          </div>
          <div class="col-md-4">
            <label for="epsPaciente">Cargo del encuestado: *</label>
            <input type="text" class="form-control" id="epsPaciente"name="cargo"  placeholder ="Cargo" required />
          </div>
        </section>
      </section>
    </section>
    <hr />

    <!--  Servicios  -->
    <section class="row">
      <div class="col-md-12">
        <h3>SERVICIO.</h3>
        <p style="margin-bottom: 2rem; font-size: 15px;" >Con el fin de determinar su nivel de satisfacción como cliente, por favor seleccione su opinión sobre los siguientes aspectos, de acuerdo con la escala de medición:</p>
      </div>
    </section>
    <!--  PREGUNTA 1  -->
    <section class="row">
      <div class="col-md-8">
        <p>1- ¿Cómo califica las soluciones brindadas por Soporte Técnico?</p>
      </div>
      <div class="col-md-4">
        <select class="form-control" id="pregunta13" name="califica_soluciones">
            <option value="1">Buenas</option>
            <option value="2">Regulares</option>
            <option value="3">Malas</option>
          </select>       
      </div>
    </section>
    <!--  PREGUNTA 2  -->
    <section class="row">
      <div class="col-md-8">
        <p>2- ¿Cómo califica los tiempos de respuesta de soporte técnico? </p>
      </div>
      <div class="col-md-4">
        <select class="form-control" id="pregunta13" name="califica_soporte">
            <option value="1">Buenas</option>
            <option value="2">Regulares</option>
            <option value="3">Malas</option>
          </select>       
      </div>
    </section>
    <!--  PREGUNTA 3  -->
    <section class="row">
      <div class="col-md-8">
        <p>3- ¿Cómo califica la asesoría recibida por nuestra dependencia comercial? </p>
      </div>
      <div class="col-md-4">
        <select class="form-control" id="pregunta13" name="califica_comercial">
            <option value="1">Buenas</option>
            <option value="2">Regulares</option>
            <option value="3">Malas</option>
          </select>       
      </div>
    </section>
    <!--  PREGUNTA 4  -->
    <section class="row">
      <div class="col-md-8">
        <p>4- ¿Cómo califica la calidad del servicio que le estamos prestando?</p>
      </div>
      <div class="col-md-4">
        <select class="form-control" id="pregunta13" name="califica_calidad_servicio">
            <option value="1">Buenas</option>
            <option value="2">Regulares</option>
            <option value="3">Malas</option>
          </select>       
      </div>
    </section>
    <!--  PREGUNTA 6  -->
    <section class="row">
      <div class="col-md-8">
        <p>5- ¿Considera que Stratecsa merece su fidelidad?</p>
      </div>
      <div class="col-md-4">
        <select class="form-control" id="pregunta13" name="califica_fidelidad">
            <option value="1">SI</option>
            <option value="2">NO</option>
          </select>       
      </div>
    </section><br>
    <hr>
    <!--  Durante la Atención  -->
    <section class="row">
      <div class="col-md-12">
        <h3>ATENCIÓN COMERCIAL.</h3>
        <p style="margin-bottom: 2rem; font-size: 15px;" >Indicar el nivel de satisfacción que tiene considerando una escala del 1 al 5, donde 5 es totalmente satisfecho y 1 es nada satisfecho.</p>
      </div>
    </section>
    <!--  PREGUNTA 5  -->
    <section class="row">
      <div class="col-md-6">
        <p>6- Las propuestas/Cotizaciones que le envía el comercial son claras, responden a su solicitud?</p>
      </div>
      <div class="col-md-1">
        <label class="checkbox-inline">
        <input type="checkbox" name="pregunta6a" id="pregunta1a" value="1"> 1
      </label>
      </div>
      <div class="col-md-1">
        <label class="checkbox-inline">
        <input type="checkbox" name="pregunta6b" id="preguntab" value="2"> 2
      </label>
      </div>
      <div class="col-md-1">
        <label class="checkbox-inline">
        <input type="checkbox" name="pregunta6c" id="preguntac" value="3"> 3
      </label>
      </div>
      <div class="col-md-1">
        <label class="checkbox-inline">
        <input type="checkbox" name="pregunta6d" id="preguntac" value="4"> 4
      </label>
      </div>
      <div class="col-md-1">
        <label class="checkbox-inline">
        <input type="checkbox" name="pregunta6e" id="preguntac" value="5"> 5
      </label>
      </div>
    </section>

     <!--  PREGUNTA 6  -->
    <section class="row">
      <div class="col-md-6">
        <p>7- El comercial es cumplido en la entrega de propuestas / Cotizaciones?</p>
      </div>
      <div class="col-md-1">
        <label class="checkbox-inline">
        <input type="checkbox" name="pregunta7a" id="pregunta1a" value="1"> 1
      </label>
      </div>
      <div class="col-md-1">
        <label class="checkbox-inline">
        <input type="checkbox" name="pregunta7b" id="preguntab" value="2"> 2
      </label>
      </div>
      <div class="col-md-1">
        <label class="checkbox-inline">
        <input type="checkbox" name="pregunta7c" id="preguntac" value="3"> 3
      </label>
      </div>
      <div class="col-md-1">
        <label class="checkbox-inline">
        <input type="checkbox" name="pregunta7d" id="preguntac" value="4"> 4
      </label>
      </div>
      <div class="col-md-1">
        <label class="checkbox-inline">
        <input type="checkbox" name="pregunta7e" id="preguntac" value="5"> 5
      </label>
      </div>
    </section>

     <!--  PREGUNTA 6  -->
    <section class="row">
      <div class="col-md-6">
        <p>8- Cómo califica el tiempo de respuesta a las solicitudes que le realiza al comercial?</p>
      </div>
      <div class="col-md-1">
        <label class="checkbox-inline">
        <input type="checkbox" name="pregunta8a" id="pregunta1a" value="1"> 1
      </label>
      </div>
      <div class="col-md-1">
        <label class="checkbox-inline">
        <input type="checkbox" name="pregunta8b" id="preguntab" value="2"> 2
      </label>
      </div>
      <div class="col-md-1">
        <label class="checkbox-inline">
        <input type="checkbox" name="pregunta8c" id="preguntac" value="3"> 3
      </label>
      </div>
      <div class="col-md-1">
        <label class="checkbox-inline">
        <input type="checkbox" name="pregunta8d" id="preguntac" value="4"> 4
      </label>
      </div>
      <div class="col-md-1">
        <label class="checkbox-inline">
        <input type="checkbox" name="pregunta8e" id="preguntac" value="5"> 5
      </label>
      </div>
    </section>



      <section class="row">
      <div class="col-md-12">
        <h3>IMPLEMENTACIÓN DE SERVICIOS / PUESTA EN MARCHA</h3>
        <p style="margin-bottom: 2rem; font-size: 15px;" >Indicar el nivel de satisfacción que tiene considerando una escala del 1 al 5, donde 5 es totalmente satisfecho y 1 es nada satisfecho.</p>
      </div>
    </section>
    <!--  PREGUNTA 5  -->
    <section class="row">
      <div class="col-md-6">
        <p>9-  La documentación presentada es clara (acta de materiales, pruebas de entrega lógicas)</p>
      </div>
      <div class="col-md-1">
        <label class="checkbox-inline">
        <input type="checkbox" name="pregunta9a" id="pregunta1a" value="1"> 1
      </label>
      </div>
      <div class="col-md-1">
        <label class="checkbox-inline">
        <input type="checkbox" name="pregunta9b" id="preguntab" value="2"> 2
      </label>
      </div>
      <div class="col-md-1">
        <label class="checkbox-inline">
        <input type="checkbox" name="pregunta9c" id="preguntac" value="3"> 3
      </label>
      </div>
      <div class="col-md-1">
        <label class="checkbox-inline">
        <input type="checkbox" name="pregunta9d" id="preguntac" value="4"> 4
      </label>
      </div>
      <div class="col-md-1">
        <label class="checkbox-inline">
        <input type="checkbox" name="pregunta9e" id="preguntac" value="5"> 5
      </label>
      </div>
    </section>

     <!--  PREGUNTA 6  -->
    <section class="row">
      <div class="col-md-6">
        <p>10-Cómo fue la atención por parte de nuestro personal operativo durante la puesta en marcha?</p>
      </div>
      <div class="col-md-1">
        <label class="checkbox-inline">
        <input type="checkbox" name="pregunta101" id="pregunta1a" value="1"> 1
      </label>
      </div>
      <div class="col-md-1">
        <label class="checkbox-inline">
        <input type="checkbox" name="pregunta102" id="preguntab" value="2"> 2
      </label>
      </div>
      <div class="col-md-1">
        <label class="checkbox-inline">
        <input type="checkbox" name="pregunta103" id="preguntac" value="3"> 3
      </label>
      </div>
      <div class="col-md-1">
        <label class="checkbox-inline">
        <input type="checkbox" name="pregunta104" id="preguntac" value="4"> 4
      </label>
      </div>
      <div class="col-md-1">
        <label class="checkbox-inline">
        <input type="checkbox" name="pregunta105" id="preguntac" value="5"> 5
      </label>
      </div>
    </section>

     <!--  PREGUNTA 6  -->
    <section class="row">
      <div class="col-md-6">
        <p>11- De 0 a 5 ¿Que tanto recomendaría a otras personas nuestros servicios?</p>
      </div>
      <div class="col-md-1">
        <label class="checkbox-inline">
        <input type="checkbox" name="pregunta111" id="pregunta1a" value="1"> 1
      </label>
      </div>
      <div class="col-md-1">
        <label class="checkbox-inline">
        <input type="checkbox" name="pregunta112" id="preguntab" value="2"> 2
      </label>
      </div>
      <div class="col-md-1">
        <label class="checkbox-inline">
        <input type="checkbox" name="pregunta113" id="preguntac" value="3"> 3
      </label>
      </div>
      <div class="col-md-1">
        <label class="checkbox-inline">
        <input type="checkbox" name="pregunta114" id="preguntac" value="4"> 4
      </label>
      </div>
      <div class="col-md-1">
        <label class="checkbox-inline">
        <input type="checkbox" name="pregunta115" id="preguntac" value="5"> 5
      </label>
      </div>
    </section>
<br />
    <hr />

    <!--  Satisfacción General  -->
    <section class="row">
      <div class="col-md-12">
        <h3>SATISFACCIÓN GENERAL.</h3>
        <p></p>
      </div>
    </section>
    <!--  PREGUNTA 13  -->
    <section class="row">
      <div class="col-md-12">
        <section class="row">
          <div class="col-md-8">
            <p>12- ¿Cómo calificaría su experiencia global respecto a los servicios  ha recibido por parte de Stratecsa?</p>
          </div>
          <div class="col-md-4">
            <select class="form-control" id="pregunta13" name="experiencia_global">
            <option value="5">Muy Buena</option>
            <option value="4">Buena</option>
            <option value="3">Regular</option>
            <option value="2">Mala</option>
            <option value="1">Muy Mala</option>
            <option value="0">No Responde</option>
          </select>
          </div>
        </section>
      </div>
    </section><br />
    <!--  PREGUNTA 14  -->
    <section class="row">
      <div class="col-md-12">
        <section class="row">
          <div class="col-md-8">
            <p>13- ¿Recomendaria a sus familiares y amigos Stratecsa?</p>
          </div>
          <div class="col-md-4">
            <select class="form-control" id="pregunta14" name="recomendacion">
            <option value="1">SI</option>
            <option value="0">No</option>
          </select>
          </div>
        </section>
      </div>
    </section><br />
    <hr />

    <!--  Comentarios  -->
    <section class="row">
      <div class="col-md-12">
        <h3>Comentarios.</h3>
        <p></p>
      </div>
    </section>
    <section class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label for="comment">Observaciones para agregar:</label>
          <textarea class="form-control" rows="6" id="comentarios" name="comentarios" ></textarea>
        </div>
      </div>
    </section>
    <section class="row">
      <div class="row" style="margin: 2rem;">                   
            <div class="col col-12">
                <center>
                    <button type="submit" id="enviar" class="button btn-footer">Enviar</button>                   
                </center>
            </div>
        </div>
    </section>

</form>
</div>
</section>



@section('scripts') 

@endsection 
@endsection