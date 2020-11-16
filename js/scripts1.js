
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

