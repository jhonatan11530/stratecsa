jQuery.noConflict();
(function( $ ) {
  $(function(){
  	var msn;
  	var name;  
  	var contador = 0;
  	var id;
    var nombre;
    var contador2 = 0;  	
    var cargo;
    var conectados = {};
    var id_cookie = getCookie("hash_id");
    var name_cookie;
    var name_tipo;
    var name_correo;

    validar();
    function get_contador(){ return contador; }
    function get_id(){ return id;  }
    function get_name(){ return nombre;  }
    function set_id(id){ return id;  }
    function set_name(name){  return nombre;  }
    function get_conectados(){ return conectados;  }
    function set_conectados(conectados){ console.log(conectados); return conectados;  }

    var socket = io.connect('https://stratecsa.com:1223',{secure:true});     
    //var socket = io.connect('https://make1email.com:1223',{secure:true});     

    $("form").submit(function(event){
    	event.preventDefault();
   	});

    function add_user(i,name,id){
      var d = new Date();
      var contactos_='<li>'+
              '<a class="users-list-name" id="contact_'+i+'" href="#">'+
                '<span class="span_user" id='+id+'></span>'+
                '<div class="col-md-4 col-sm-4 col-xs-6">';
      if (name.tipo == "Usuario" || name.tipo == "UsuarioLogOut") {
        contactos_+='<img src="/img/users/_17-810120247.jpg" alt="User Image">';       
      }
      else if(name.tipo == "soporte"){      
        contactos_+='<img class="direct-chat-img" src="/img/users/avatar.jpg" alt="message user image">';
      }
      else{
        contactos_+='<img src="/img/users/_17-810120247.jpg" alt="User Image">'; 
      }
                  
      contactos_+='</div>'+
                '<div class="col-md-8 col-sm-8 col-xs-6">'+name.name+
                  '<span class="users-list-date">'+name.tipo+'</span>'+
                  '<span class="users-list-date">'+name.pagina+'</span>'+
                  '<span class="users-list-date">'+d.toDateString()+'</span>'+
                '</div>'+
              '</a>'+
            '</li>';
      return contactos_;
    }     					

    function tab(id,user,id_user) {

      var tab = '<li class="active">'+
                '<a href="#window_'+id+'" data-toggle="tab" >'+              
                  user+
                  '<button type="button" class="btn btn-box-tool btn_close" data-widget="remove" id="'+id+'">'+
                    '<i class="fa fa-times"></i>'+
                  '</button>'+
                '</a>'+
              '</li>';
      return tab;    
    }

    function tab_content(id,user,id_user) {

      var content = '<div class="tab-pane active chat wind'+id_user+'" id="window_'+id+'">'+
                      '<div class="box box-warning direct-chat direct-chat-warning">'+  
                        '<h3 class="box-title" style="display:none;">'+user+'</h3>'+                    
                        '<div class="box-body">'+
                          '<div class="direct-chat-messages" id="msgs'+id+'">'+                
                          '</div>'+
                        '</div>'+  
                        '<div class="box-footer">'+
                          '<div class="input-group">'+
                            '<input type="text" id="input_text'+id+'" name="message" placeholder="Mensaje..." class="form-control">'+
                            '<span class="input-group-btn input_'+id+'" id='+id_user+'>'+
                            '<span class="input-group-btn">'+
                              '<button type="button" class="btn btn-warning btn-flat btn_enviar_'+id_user+'" id="'+id+'">Enviar</button>'+
                            '</span>'+
                          '</div>'+
                        '</div>'+    
                      '</div>'+  
                    '</div>';
      return content;
    }

  	function ventana_chat(id,user,id_user){

      var ventana = '<div class="col-md-3 col-sm-3 col-xs-12 chat wind'+id_user+'" id="window_'+id+'">'+   
                  '<div class="box box-warning direct-chat direct-chat-warning">'+
                    '<div class="box-header with-border">'+
                      '<h3 class="box-title">'+user+'</h3>'+
                      '<div class="box-tools pull-right">'+          
                        '<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>'+
                        '</button>'+
                        '<button type="button" class="btn btn-box-tool btn_close" data-widget="remove" id="'+id+'"><i class="fa fa-times"></i>'+
                        '</button>'+
                      '</div>'+
                    '</div>'+
                    '<div class="box-body">'+
                      '<div class="direct-chat-messages" id="msgs'+id+'">'+                
                      '</div>'+
                    '</div>'+  
                    '<div class="box-footer">'+
                      '<div class="input-group">'+
                        '<input type="text" id="input_text'+id+'" name="message" placeholder="Mensaje..." class="form-control">'+
                        '<span class="input-group-btn input_'+id+'" id='+id_user+'>'+
                        '<span class="input-group-btn">'+
                          '<button type="button" class="btn btn-warning btn-flat btn_enviar_'+id_user+'" id="'+id+'">Enviar</button>'+
                        '</span>'+
                      '</div>'+
                    '</div>'+    
                  '</div>'+
                '</div>';
      return ventana;
  	}

    function recibe_mensaje(who,msn,tipo){
      
      var d = new Date();
      var mensaje_salida = '<div class="direct-chat-msg right">'+
            '<div class="direct-chat-info clearfix">'+
              '<span class="direct-chat-name pull-right">'+who+'</span>'+
              '<span class="direct-chat-timestamp pull-left">'+d.toDateString()+'</span>'+
            '</div>';
      if (tipo == "usuario" || tipo == "usuariologout") {
        mensaje_salida+='<img class="direct-chat-img" src="/img/users/_17-810120247.jpg" alt="message user image">';
      }
      else if(tipo == "soporte"){      
        mensaje_salida+='<img class="direct-chat-img" src="/img/users/avatar.jpg" alt="message user image">';
      }
      else if(tipo == "administrador"){
        mensaje_salida+='<img class="direct-chat-img" src="/img/users/_17-810120247.jpg" alt="message user image">';
      }   

      mensaje_salida+='<div class="direct-chat-text">'+msn+
            '</div>'+
          '</div>';
      return mensaje_salida;
    }

  	function envia_mensaje(msn){

      var d = new Date();
      var mensaje_entrada = '<div class="direct-chat-msg">'+
              '<div class="direct-chat-info clearfix">'+
                '<span class="direct-chat-name pull-left">Yo</span>'+
                '<span class="direct-chat-timestamp pull-right">'+d.toDateString()+'</span>'+
              '</div>';
      if (getCookie("hash_tipo") == "usuario" || getCookie("hash_tipo") == "usuariologout") {      
        mensaje_entrada+='<img class="direct-chat-img" src="/img/users/_17-810120247.jpg" alt="message user image">';
      }
      else if(getCookie("hash_tipo") == "soporte"){      
        mensaje_entrada+='<img class="direct-chat-img" src="/img/users/avatar.jpg" alt="message user image">';    
      }
      else if(getCookie("hash_tipo") == "administrador"){      
        mensaje_entrada+='<img class="direct-chat-img" src="/img/users/_17-810120247.jpg" alt="message user image">';      
      }
      mensaje_entrada+='<div class="direct-chat-text">'+msn+
              '</div>'+
            '</div>';		
      return mensaje_entrada;	
  	}

  	function windows_new(i,name,id_user,tipo){

      $(".chats").prepend(ventana_chat(i,name,id_user));    

      $(document).on('click','.btn_enviar_'+id_user+'',function(){
        var id_text = $(this).attr('id');
        var msg = $('#input_text'+id_text+'').val(); 
        var id_ = $('.input_'+id_text+'').attr('id');
        $('#msgs'+id_text+'').append(envia_mensaje(msg));    
        var dest = $('.wind'+id_user+' .box-title').text();
        console.log(id_text);
        console.log(msg);
        console.log(id_);
        console.log(dest);
        console.log(get_id());
        if (get_id() == "" || get_id() == undefined || nombre == undefined) {
          socket.emit("chat", {"msg":msg,"name":getCookie("hash_name"),"id":id_,"id_origin":getCookie("hash_id"),"tipo":tipo,"destino":dest});
        }
        else{
          socket.emit("chat", {"msg":msg,"name":$.trim(nombre.name),"id":id_,"id_origin":get_id(),"tipo":tipo,"destino":dest});
        }

        msg = "";
        $('#input_text'+id_text+'').val(""); 
      });

      $(document).on('keypress','.wind'+id_user+' input[name=message]',function(e){
        if(e.which == 13){        
          var id_text = $(this).attr('id');
          var msg = $(this).val(); 
          var exp = id_text.split('t');      
          var ind = exp.length - 1;        
          var txt = exp[ind];
          var id_ = $('.input_'+txt).attr('id');   
          var dest = $('.wind'+id_user+' .box-title').text();
          console.log(id_text);
          console.log(msg);
          console.log(id_);
          console.log(dest);
          console.log(get_id());
          if (msg != "") {
            $('#msgs'+txt+'').append(envia_mensaje(msg));
                
            if (get_id() == "" || get_id() == undefined || nombre == undefined) {
              socket.emit("chat", {"msg":msg,"name":getCookie("hash_name"),"id":id_,"id_origin":getCookie("hash_id"),"tipo":tipo,"destino":dest});
            }
            else{
              socket.emit("chat", {"msg":msg,"name":$.trim(nombre.name),"id":id_,"id_origin":get_id(),"tipo":tipo,"destino":dest});
            }
            msg = "";
            $(this).val("");  
          }             
        }
      });
    }

    function windows_soporte(i,name,id_user,tipo) {

      $("#titleTab").find('li').each(function(a,c){      
        $(c).removeClass('active');
      });

      $("#contenido").find(".tab-pane").each(function(a,c){      
        $(c).removeClass('active');
      });
        
      $("#titleTab").append(tab(i,name,id_user));
      $("#contenido").append(tab_content(i,name,id_user));

      $(document).on('click','.btn_enviar_'+id_user+'',function(){
        var id_text = $(this).attr('id');
        var msg = $('#input_text'+id_text+'').val(); 
        var id_ = $('.input_'+id_text+'').attr('id');
        var dest = $('.wind'+id_user+' .box-title').text();
        $('#msgs'+id_text+'').append(envia_mensaje(msg));  
        console.log(id_text);
        console.log(msg);
        console.log(id_);
        console.log(dest);
        console.log(get_id());
        socket.emit("chat", {"msg":msg,"name":$.trim(nombre.name),"id":id_,"id_origin":get_id(),"tipo":tipo,"destino":dest});
        msg = "";
        $('#input_text'+id_text+'').val("");    
      });

      $(document).on('keypress','.wind'+id_user+' input[name=message]',function(e){
        if(e.which == 13){        
          var id_text = $(this).attr('id');
          var msg = $(this).val(); 
          var exp = id_text.split('t');      
          var ind = exp.length - 1;        
          var txt = exp[ind];
          var id_ = $('.input_'+txt).attr('id');   
          var dest = $('.wind'+id_user+' .box-title').text();
          console.log(id_text);
          console.log(msg);
          console.log(id_);
          console.log(dest);
          console.log(get_id());
          if (msg != "") {
            $('#msgs'+txt+'').append(envia_mensaje(msg));
            socket.emit("chat", {"msg":msg,"name":$.trim(nombre.name),"id":id_,"id_origin":get_id(),"tipo":tipo,"destino":dest});
            msg = "";
            $(this).val("");  
          }             
        }
      });
    }

    $(document).on('click',".btn_close",function(){    
      conta = $(this).attr('id');   
      $('#window_'+conta+'').remove();
      $("#input_text"+conta).remove();
      $(".input_"+conta).remove();
      $(".wind"+conta).remove();
      $(this).parents('li').remove();    
    });

    $(document).on('click','#removeChat',function(){
      
      console.log(getCookie("hash_name"));
      console.log(getCookie("hash_id"));
      socket.emit('logout',{"id":getCookie("hash_id"),"name_cookie":getCookie("hash_name")});
      eraseCookie("hash_name");
      eraseCookie("hash_id");
      eraseCookie("hash_correo");
      $("#inferior").css('display','none');
      $("#inferior .box.box-warning").css('display','');
      $("input:hidden[name=logChat]").val("");
    });

    $(document).on('click','#logout',function(){ 

      socket.emit('logout',{"id":getCookie("hash_id"),"name_cookie":getCookie("hash_name")});
      eraseCookie("hash_name");
      eraseCookie("hash_id");
      eraseCookie("hash_correo");
      $("#inferior").css('display','none');
      $("#inferior .box.box-warning").css('display','');
      $("input:hidden[name=logChat]").val("");
    });

    $(document).on('click','#chat',function(){
      
      $(".users-list").css('display','');    
      $(".users-list").css('height','300');    
      var rolUser = $("input:hidden[name=rolUser]").val();
      var UserLog, emailUser;       
      
      if (rolUser == undefined) {
        rolUser =  "Usuario";
        UserLog = $("#dataNombre").val();
        emailUser = $("#dataCorreo").val();  
        $("#inferior #dataChat").remove();
        $("#dataChat").remove();
      }
      else{
        $("#inferior").css('display','');
        UserLog = $("input:hidden[name=User]").val();
        emailUser = $("input:hidden[name=emailUser]").val();
      }
      
      setCookie("hash_name", UserLog, 1);
      name_cookie = checkCookie("hash_name");
      setCookie("hash_tipo", rolUser, 1);      
      name_tipo = getCookie("hash_tipo");
      setCookie("hash_correo", emailUser, 1);
      name_correo = getCookie("hash_correo");

      if( name_cookie != "" && name_tipo != "" && name_correo != ""){ 
        socket.emit("join", {"id":id_cookie,"name":name_cookie,"tipo":name_tipo,"correo":name_correo,"pagina":"Stratecsa"});          
      }
    });

    function validar(){   

      if (getCookie("hash_name") != "") {
        console.log("validar");  
        setTimeout(function(){
          var idLog = $('input:hidden[name=logChat]').val();
          socket.emit("getData",{"id":idLog});            
        },3000);          
      }else{
        console.log(" vacio ");
      }    
    }

    // cada vez que emiten un mensaje al usuario, se abre una ventana nueva o añade los mensajes a la ventana si ya estaba abierta
    socket.on("chat",function(msn){   

      if(msn.id === get_id() || msn.id === getCookie("hash_id")){

        var is_exist = $(".chat").hasClass('wind'+msn.id_origin);
        if(is_exist){       
          $('.wind'+msn.id_origin).find('.direct-chat-messages').append(recibe_mensaje(msn.name,msn.msg,msn.tipo));            
          var id = $('.wind'+msn.id_origin).find('.direct-chat-messages').attr('id');
          console.log(id);
        }else{
          contador ++;
          console.log(getCookie("hash_tipo"));
          if (getCookie("hash_tipo") == "soporte") {
            windows_soporte(contador,msn.name,msn.id_origin,getCookie("hash_tipo"));   
          }else{ windows_new(contador,msn.name,msn.id_origin,getCookie("hash_tipo")); }          
          $('#msgs'+contador+'').append(recibe_mensaje(msn.name,msn.msg,msn.tipo));                      
        }
      }
    });
    
    socket.on("disconnect", function(data){    
      console.log('disconnect');
      console.log(name_cookie);
      console.log(getCookie("hash_name"));
      console.log(data);     
    });
          
    socket.on("id_user",function(id_){
      console.log(id_);
      id = id_.id;
      id = id.replace("/#","");
      nombre = id_.nombre;
      setCookie("hash_id",id,3);
      setCookie("hash_name",id_.nombre.name,3);
      setCookie("hash_tipo",id_.nombre.tipo,3);
      setCookie("hash_correo",id_.nombre.correo,3);
      $("input:hidden[name=logChat]").val(id);
      $.ajax({
        type:'POST',
        url:'/scripts/chat.php',
        data: {"datos":id_,"option":"check"},
        headers: { 'X-CSRF-Token' : $('input:hidden[name=_token]').val() },
        async: false,  
        success:function(data) {
          console.log(data);
        }
      });
    });

    function messages(){
      if (getCookie("hash_name") != "") {
        socket.emit("historial",getCookie("hash_id"));      
      }    
    }

    socket.on("messages",function(data){
      console.log("messages");

      var usuario = data.dataUser;
      var mensajes = data.mensajes;
      var people = data.people;
      var users = data.usuarios;
      var ventana = {};
      var i = 0;
      var datenow = new Date();
      datenow = datenow.getFullYear() + "/" + (datenow.getMonth() + 1) + "/" + datenow.getDate();

      console.log(mensajes);

      if (mensajes.length != 0) {      
        /*
          $.each(mensajes,function(a,b){                
            console.log('a: ' + a);
            console.log('b: ' + b);
            $.each(users,function(c,d){
              console.log('c: '+ c);
              console.log('d: '+ d);
              if (b.id_sender == d._id || b.id_addressee == d._id) {
                if (getCookie("hash_name") != d.name) {              
                  console.log("!= ");
                  $.each(people,function(e,f){
                    if (f.nombre.name == d.name) {
                      i++;
                      ventana[i] = f;
                    }
                  });                
                }
              }
            });
          });

          Object.size = function(obj) {
            var size = 0, key;
            for (key in obj) {
              if (obj.hasOwnProperty(key)) size++;
            }
            return size;
          };
          
          var size = Object.size(ventana);    
          var arr = [];

          console.log(ventana);
          
          for (var i = 1; i <= size; i++) { arr.push(ventana[i]);}

          var uniqueArray = arr.filter(function(item, pos) {
            if (!this.hasOwnProperty(item[1])) {
              return this[item[1]] = true;
            }
            return false;
          }, {});

          console.log(uniqueArray);

          $.each(uniqueArray,function(a,c){
            contador++;
            console.log('a: '+ a);
            console.log('c: '+ c);
            windows_new(contador,c.nombre.name,c.id,getCookie("hash_tipo"));
            $.each(mensajes,function(b,d){  
              console.log('b: '+ b);
              console.log('d: '+ d);
              var fecha = new Date(d.created);
              var newfecha =  fecha.getFullYear() + "/" + (fecha.getMonth() + 1) + "/" + fecha.getDate();      
              console.log('newfecha: ' + newfecha);
              console.log('datenow: '+ datenow);
              if (newfecha === datenow) { 
                $.each(users,function(e,f){
                  console.log('e: '+ e);
                  console.log('f: '+ f);
                  var txt = $('.btn_enviar_'+c.id).attr('id');                                           
                  if (d.id_sender == f._id) {              
                    if (f.name == c.nombre.name) {                
                      $('#msgs'+txt).append(recibe_mensaje(c.nombre.name,d.msg,c.nombre.tipo));                 
                    }
                    else{
                      $('#msgs'+txt).append(envia_mensaje(d.msg));              
                    }
                  }
                });
              }
            });
          });
        */

        $.each(mensajes,function(a,b){                        
          var fecha = new Date(b.created);
          var newfecha =  fecha.getFullYear() + "/" + (fecha.getMonth() + 1) + "/" + fecha.getDate();      
          console.log('newfecha: ' + newfecha);
          console.log('datenow: ' + datenow);

          if (newfecha === datenow) {              
            $.each(users,function(c,d){
              console.log('c: ' + c);
              console.log('d: ' + d);
              console.log('id_sender: ' + b.id_sender);
              console.log('id_addressee: ' + b.id_addressee);
              if (b.id_sender == d._id || b.id_addressee == d._id) {
                if (getCookie("hash_name") != d.name) {              
                  $.each(people,function(e,f){
                    if (f.nombre.name == d.name) {
                      i++;
                      ventana[i] = f;
                    }
                  });                
                }
              }
            });
          }
        });

        Object.size = function(obj) {
          var size = 0, key;
          for (key in obj) {
            if (obj.hasOwnProperty(key)) size++;
          }
          return size;
        };
        
        var size = Object.size(ventana);    
        var arr = [];
        
        console.log(ventana);

        for (var i = 1; i <= size; i++) { arr.push(ventana[i]);}

        var uniqueArray = arr.filter(function(item, pos) {
          if (!this.hasOwnProperty(item[1])) {
            return this[item[1]] = true;
          }
          return false;
        }, {});

        console.log(uniqueArray);
        
        $.each(uniqueArray,function(a,c){
          console.log('a: ' + a);
          console.log('c: ' + c);
          contador++;
          windows_new(contador,c.nombre.name,c.id,getCookie("hash_tipo"));
          $.each(mensajes,function(b,d){  
            console.log('b: '+ b);
            console.log('d: '+ d);
            var fecha = new Date(d.created);
            var newfecha =  fecha.getFullYear() + "/" + (fecha.getMonth() + 1) + "/" + fecha.getDate();      
            console.log('newfecha: ' + newfecha);
            console.log('datenow: ' + datenow);
            if (newfecha === datenow) {            
              $.each(users,function(e,f){
                console.log('e: ' + e);
                console.log('f: ' + f);
                var txt = $('.btn_enviar_'+c.id).attr('id');                                           
                if (d.id_sender == f._id) {              
                  if (f.name == c.nombre.name) {                
                    $('#msgs'+txt).append(recibe_mensaje(c.nombre.name,d.msg,c.nombre.tipo));                 
                  }
                  else{
                    $('#msgs'+txt).append(envia_mensaje(d.msg));              
                  }   
                }
              });
            }
          });
        });
      }
    });   

    socket.on('id',function(data){});
    socket.on("update-people", function(people){
      $(".users-list.clearfix").html("");        
      var cont = 0;

      $.each(people, function(client,nombre){
        if(nombre.id != get_id()){        
          contador++;      
          if (getCookie("hash_tipo") != nombre.nombre.tipo) {                                    
            cont++;
            console.log('entro');
            console.log(nombre);              
            $('.users-list.clearfix').append(add_user(contador,nombre.nombre,nombre.id));                
            $('#contact_'+contador+'').click(function(){
              var client_id = $(this).children().attr('id');
              if(!$(".chat").hasClass("wind"+client_id)){
                contador++;
                if (getCookie("hash_tipo") == "soporte") {
                  windows_soporte(contador,nombre.nombre.name,client_id,getCookie("hash_tipo"));   
                }else{ windows_new(contador,nombre.nombre.name,client_id,getCookie("hash_tipo")); }                                              
              }  
            });        
          }        
        }      
      });
      $(".label.label-warning").html(cont);
    });

    socket.on("validSession",function(data){
      console.log('validSession');       

      var people = [];
      var c = 0;

      if (getCookie("hash_id") != "") {
        $.each(data,function(a,b){
          if (getCookie("hash_id") == a) {      
            c++;    
            people.push({id:b.id,correo:b.nombre.correo,name:b.nombre.name,tipo:b.nombre.tipo,'pagina':'Stratecsa'});
          }
        });
        socket.emit("Session",people);
        messages();
      }

      console.log(c);
      
      if (c == 0) {
        $.ajax({
          type:'POST',
          url:'/scripts/chat.php',
          data: {"option":"delete"},
          headers: { 'X-CSRF-Token' : $('input:hidden[name=_token]').val() },
          async: false,  
          success:function(data) {
            console.log(data);
          }
        });
      }
    });

    function eraseCookie(name) { setCookie(name,"",-1)}

    function setCookie(cname, cvalue, exdays) {
      var d = new Date();
      d.setTime(d.getTime() + (exdays*24*60*60*1000));
      var expires = "expires="+ d.toUTCString();
      document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function getCookie(cname) {    
      var name = cname + "=";
      var decodedCookie = decodeURIComponent(document.cookie);
      var ca = decodedCookie.split(';');
      for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') { c = c.substring(1); }
        if (c.indexOf(name) == 0) {
          return c.substring(name.length, c.length);
        }
      }
      return "";
    }

    function checkCookie(cname,val) {
      var user = getCookie(cname);
      if (user != "") { /*alert("Bienvenido: " + user); */} 
      else {
        user = prompt("Por favor ingrese su "+val+":", "");
        if (user != "" && user != null) {
          setCookie(cname, user, 3);
        }
      }
      return user;
    }    

    var stop = false;
    var bPreguntar = true;

    $(document).on('click','a, button',function(){
      bPreguntar = false;
    });

    //window.onbeforeunload = goodbye;
    $(window).on('beforeunload', function(e){

      if (bPreguntar == true) { // If F5 is not pressed
        return "Do you really want to leave?";
      }

      if (!e.stopPropagation) {
        console.log(getCookie("hash_name"));
        if (getCookie("hash_name") != "" && getCookie("hash_name") != undefined) {
          $("#logout").trigger("click");    
          eraseCookie("hash_name");
          eraseCookie("hash_id");
          eraseCookie("hash_correo");            
        }
      }
      bPreguntar = true;
    });

    function goNavigate(){
      $(window).off('beforeunload');
    }

    socket.on("salir",function(data){

      socket.emit("logout", data);
      eraseCookie("hash_name");
      eraseCookie("hash_id");
      eraseCookie("hash_correo");   

      if (getCookie("hash_tipo") == "Usuario" ) {
        var log = $("input:hidden[name=User]").val();
        eraseCookie("hash_tipo");  
        if (log == undefined) {
          location.reload();  
        }    
        else{
          alert("Este usuario ya se encuentra logueado.");
          window.location.href = '/logout';   
        }
      }
      else{                      
        eraseCookie("hash_tipo");      
        alert("Este usuario ya se encuentra logueado.");
        window.location.href = '/logout'; 
      }    
    });
    
    socket.on("MsgChat",function(data){
      console.log("MsgChat");
      console.log(data);
    });    

    setTimeout(function(){    
      console.log($('div.chats').find('div.chat'));
      $('div.chats').find('div.chat').each(function(a,c){      
        var id = $(c).attr('id'); 
        console.log($('#'+id+' .box.direct-chat'));     
        $('#'+id+' .box.direct-chat').addClass('collapsed-box');
      });
    },2000);      
  });
})(jQuery); 