
if(document.all)
{ 
    document.onkeydown = function(){
    if(window.event && (window.event.keyCode == 122 || window.event.keyCode == 116 || window.event.ctrlKey)){
    window.event.keyCode = 505;
    }
    if(window.event.keyCode == 505){
    return false;
    }
    }
}

function validarperiodo(){
var periodo  = document.getElementById("periodo").selectedIndex;    

if(periodo == "") {
    alert("El Período Académico es REQUERIDO");
    return false;
    }
}

function validarformulario(){						// Validacion para el Acceso al sistema

var nombre_apellido     = document.getElementById("nombre_apellido").value;
var cedula_ident        = document.getElementById("cedula_ident").value;
var cod_institu         = document.getElementById("cod_institu").value;
var unidad_curric       = document.getElementById("unidad_curric").value;
var cod_uc              = document.getElementById("cod_uc").value;
var trayecto_uc         = document.getElementById("trayecto_uc").value;
var secc_uc             = document.getElementById("secc_uc").value;
var estud_aprob         = document.getElementById("estud_aprob").value; 
var estud_reprob        = document.getElementById("estud_reprob").value;
var t_estd_secc         = document.getElementById("t_estd_secc").value; 


if (nombre_apellido==0){
    if(/^\s+$/.test(nombre_apellido)){
    alert("Por favor Ingrese el (los) Nombre (s) y Apellido (s) COMPLETOS...!!!")
    document.fregistro.nombre_apellido.focus()
     return false;        
    }
}

if (cedula_ident==0){
    if(document.fregistro.cedula_ident.value.length==0){
    alert("Por Favor Inngrese el Número de la Cédula de Identidad");
    document.fregistro.cedula_ident.focus()
    return false;
    }
}

if (cod_institu==0){
    if(document.fregistro.cod_institu.value.length==0){
    alert("Por Favor Inngrese el Número de la Cédula de Identidad");
    document.fregistro.cod_institu.focus()
    return false;
    }
}

if (unidad_curric==0){
    if(document.fregistro.unidad_curric.value.length==0){
    alert("Por Favor Inngrese el Número de la Cédula de Identidad");
    document.fregistro.unidad_curric.focus()
    return false;
    }
}


if (cod_uc==0){
    if(document.fregistro.cod_uc.value.length==0){
    alert("Por Favor Inngrese el Número de la Cédula de Identidad");
    document.fregistro.cod_uc.focus()
    return false;
    }
}

if (trayecto_uc==0){
    if(document.fregistro.trayecto_uc.value.length==0){
    alert("Por Favor Inngrese el Número de la Cédula de Identidad");
    document.fregistro.trayecto_uc.focus()
    return false;
    }
}

if (secc_uc==0){
    if(document.fregistro.secc_uc.value.length==0){
    alert("Por Favor Inngrese el Número de la Cédula de Identidad");
    document.fregistro.secc_uc.focus()
    return false;
    }
}

if (estud_aprob==0){
    if(document.fregistro.estud_aprob.value.length==0){
    alert("Por Favor Inngrese el Número de la Cédula de Identidad");
    document.fregistro.estud_aprob.focus()
    return false;
    }
}

if (estud_reprob==0){
    if(document.fregistro.estud_reprob.value.length==0){
    alert("Por Favor Inngrese el Número de la Cédula de Identidad");
    document.fregistro.estud_reprob.focus()
    return false;
    }
}

if (t_estd_secc==0){
    if(document.fregistro.t_estd_secc.value.length==0){
    alert("Por Favor Inngrese el Número de la Cédula de Identidad");
    document.fregistro.t_estd_secc.focus()
    return false;
    }
}
}

function letra(e){

key = e.keyCode || e.which;
tecla = String.fromCharCode(key).toUpperCase();
letras = " ÁÉÍÓÚABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
especiales = [8,9,37,39,46];

tecla_especial = false
for(var i in especiales){
    if(key == especiales[i]){
       tecla_especial = true;
       break;
    }
}

if(letras.indexOf(tecla)==-1 && !tecla_especial){
   return false;
}
}

function solonumeros(e){

key = e.keyCode || e.which;
tecla = String.fromCharCode(key).toLowerCase();
numeros = "0123456789";
especiales = [8,9,37,39,46];

tecla_especial = false
for(var i in especiales){
    if(key == especiales[i]){
       tecla_especial = true;
       break;
    }
 }
 if(numeros.indexOf(tecla)==-1 && !tecla_especial){
    return false;
 }
}

function validarEntero(valor){
 valor = parseInt(valor)
 if (isNaN(valor)) {

    return ""
 }else{

    return valor
 }
}

//colocar ceros delante del codigo
function pad (n, length){
var  n = n.toString();
while(n.length < length)
     n = "0" + n;
return n;
}

function nobackbutton(){

window.location.hash="no-back-button";

window.location.hash="Again-No-back-button"; //chrome

window.onhashchange=function(){window.location.hash="no-back-button";}
}



function validaclave(){						// Validacion para el Acceso al sistema

    txtUsuario  = document.getElementById("Usuario").value;
    txtPassword = document.getElementById("Password").value;
    txtCaptcha  = document.getElementById("Captcha").value;

    if (txtUsuario==0){
      if(/^\s+$/.test(txtUsuario)){
        alert("Favor no dejar nombre de usuario vacio..!!")
        document.flogueo.r_usuario.focus()
         return;        
        }
        alert("Ingrese usuario ..!!")
        document.flogueo.r_usuario.focus()
        return;
    }else{
      if(txtPassword==0){
       if(/^\s+$/.test(txtPassword)){
         alert("Favor no dejar password vacio..!!")
         document.flogueo.password.focus()
         return;        
        }
        alert("Ingrese la clave..!!")
        document.flogueo.password.focus()
        return;
      }
    }

    if(txtCaptcha==0){
       if(/^\s+$/.test(txtCaptcha)){
         alert("Código CAPTCHA no debe estar vacio..!!")
         document.flogueo.tmptxt.focus()
         return;        
        }
        alert("Ingrese código CAPTCHA..!!")
        document.flogueo.tmptxt.focus()
        return;
    }else{
        document.flogueo.action="sirce_vldr_acceso.php";
        document.flogueo.submit()
    }
}

// Funcion para recuperar acceso del sistema
function recuperarclave(){
    mipopup = window.open("./sirce_recuperaclave.php","formdoc","width=400px,heigth=5px,menubar=no,toolbar=no,scrollbars=yes,left=50,top=10,location=no,resizable=no");
    mipopup.focus()
}
//fin.

function validastatus(){						// Validacion para el Cambio de Status

    txtUsuario  = document.getElementById("Usuario").value;
    txtPassword = document.getElementById("Password").value;
    txtStatus  = document.getElementById("status").value;

    if (txtUsuario==0){
		if(/^\s+$/.test(txtUsuario)){
			alert("Favor no dejar nombre de usuario vacio..!!")
			document.flogueo.Usuario.focus()
			 return;        
		}
    }
	if(txtPassword==0){
		if(/^\s+$/.test(txtPassword)){
		   alert("Favor no dejar password vacio..!!")
		   document.flogueo.password.focus()
		   return;        
		}
	}
    
    if(txtstatus==0){
        if((/^\s+$/.test(txtStatus)) || (txtUsuario!=0)){
			alert("No ha seleccionado el cambio de status")
			document.flogueo.status.focus()
			return;        
        }
        alert("Ingrese código CAPTCHA..!!")
        document.flogueo.tmptxt.focus()
        return;
    }else{
        document.flogueo.action="sirce_vldr_acceso.php";
        document.flogueo.submit()
    }
}

function validarEmail(email) {
	if (document.form.email.value.length==0){
		alert("ERROR..!! no deje el email en blanco")
		document.form.email.focus()
		return 0;
    }else{
		expre=/^[A-z0-9\\._-]+@[A-z0-9][A-z0-9-]*(\\.[A-z0-9_-]+)*\\.([A-z]{2,6})$/
		if (expre.test(email)){
			alert("La direccion de email es incorrecta.")
			return 0;
		}
	}
}

function nobackbutton(){

   window.location.hash="no-back-button";

   window.location.hash="Again-No-back-button"; //chrome

   window.onhashchange=function(){window.location.hash="no-back-button";}
}

