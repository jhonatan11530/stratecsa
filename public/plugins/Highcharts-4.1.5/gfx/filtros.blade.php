@extends('plantilla')
@section('contenido') 
<div class="container-fluid responsive">
<div class="responsive">
  <h1>Reportes por Aprendiz</h1>  
</div>
<br><br>
 <!-- daterange picker -->
<link href="{{url()}}/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
<div class="panel-body">
  {{ Form::open(array('url' => 'reporte_aprendiz','name'=>'form' ,'id'=>'formu','target'=>'_blank')) }} 
 <div class="row">
  {{ Form::hidden('url', url(), array('id' => 'url'))}}
    <div class="col-md-6">
      <div class="form-group"><!-- Creamos un select para escoger cual vendedor es dueño del producto -->
            {{Form::label('programa', 'Programa de Formación')}}
            <select class="form-control" id="programa" name="programa" required>
              <option value="">Seleccione...</option>
                @foreach($programas as $programa)
                  <option value="{{$programa->id}}">{{$programa->nombre}}</option>
                @endforeach 
            </select>
      </div> 
    </div>
    <br>
    <div id="reportes" class="col-md-6">
    <div class="row">
      <div id="Caso" class="col-md-2">
        {{Form::submit('Casos', array('class'=>'btn btn-success','onclick'=>'verificar(this.id);','id'=>'casos','disabled'=>'true','target'=>'_blank'))}} 
      </div>
      <div id="Rel" class="col-md-2">
        {{Form::submit('Relatoria', array('class'=>'btn btn-success','onclick'=>'verificar(this.id);','id'=>'rel','disabled'=>'true','target'=>'_blank'))}} 
      </div>
       <div id="Info" class="col-md-2">
        {{Form::submit('Información Basica', array('class'=>'btn btn-success','onclick'=>'verificar(this.id);','id'=>'info','disabled'=>'true','target'=>'_blank'))}} 
      </div>
    </div>
    </div> 
</div>
<br><br>
    <div class="row">
    <div class="col-md-12" id="user">     
    </div>
    </div>
      {{ Form::close() }}
</div>
@stop 
@section('pie')
<script src="{{url()}}/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
<script src=".{{url()}}/plugins/timepicker/bootstrap-timepicker.min.js" type="text/javascript"></script>
<script type="text/javascript">

  function verificar(val){

    var prog= document.getElementById("programa");
    var user= prog.options[prog.selectedIndex].text;

    if (user == "Seleccione..."){ alert('Debe seleccionar un programa'); }
    else{
      if (val == "casos") { $("#Caso").append("<input type='hidden' name='sub' value='"+val+"'>"); }
      if(val == "info"){ $("#info").append("<input type='hidden' name='sub' value='"+val+"'>"); }
      if(val == "rel"){ $("#rel").append("<input type='hidden' name='sub' value='"+val+"'>"); }
    }
  } 

  $("#programa").on('change', function(e){
      if (this.value){
        $("#user").append('<img src="../img/ajax-loader.gif" alt="Loader">');

        $.get('reporte_aprendiz/obtenerUsuario?id='+ this.value, function(data){
           $("#user").html('<div class="row"><div class="col-md-6"><label for="usuario">Usuarios</label></div><div class="col-md-6"><div class="form-group form-group-sm has-feedback"><input id="buscar" onkeyup="filtrar(\'user\', this.value)" type="text" class="form-control input-sm" placeholder="Buscar..."><span class="glyphicon glyphicon-search form-control-feedback" aria-hidden="true"></span></div></div></div>');
          if (data != "") {
            //alert('si hay datos');
            $("#user").append('<div class="tabla"><table id="tabla" class="table table-striped table-bordered table-hover"><tbody>');
              $.each(data, function(index, fila){
                $("#user table").append('<tr><td class="centrado"><input name="usuario[]" type="checkbox" onclick="capturar(this);" value="'+fila.id+'" id="con'+fila.id+'"></input></td><td><label for="con'+fila.id+'">'+fila.nombre+' '+fila.apellido+'</label></td></tr>');
              });
            $("#user img").remove();
            $("#user table").append('</tbody></table></div>');
          }else{
            //alert('no hay datos');
            $("#user").append('<div class="tabla"><table id="tabla" class="table table-striped table-bordered table-hover"><tbody>');
                $("#user table").append('<tr><td class="centrado">No hay resultados</td></tr>');
            $("#user img").remove();
            $("#user table").append('</tbody></table></div>'); 
          }
        });
      }else{
        $("#user *").remove();
      }
    }); 

  function filtrar(elem, val){
      if (val != ""){
        $.each($("#"+elem+" #tabla tbody tr"), function(ind, fila){
          
          var label = fila.getElementsByTagName("label");
          var texto = label[0].innerHTML.toUpperCase();
          
          if(texto.match(val.toUpperCase()))
            fila.style.display = "table-row";
          else
            fila.style.display = "none";
        });
      }else{
        $.each($("#"+elem+" #tabla tbody tr"), function(ind, fila){
          
          var label = fila.getElementsByTagName("label");
          var texto = label[0].innerHTML.toUpperCase();
          
          if(texto.match(val.toUpperCase()))
            fila.style.display = "table-row";
          else
            fila.style.display = "none";  
        });
      }
  }   

  function capturar(val){
      if (val.checked) {
          document.getElementById("casos").disabled = false;
          document.getElementById("info").disabled = false;
          document.getElementById("rel").disabled = false;
      }
      else{
        document.getElementById("casos").disabled = true;
        document.getElementById("info").disabled = true;
        document.getElementById("rel").disabled = true;
      }
  }
  
</script>
@stop