
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

function validaclave(){		// Validacion para el Acceso al sistema
    
    txtUsuario  = document.getElementById("Usuario").value;
    txtPassword = document.getElementById("Password").value;
    txtCaptcha  = document.getElementById("Captcha").value;
    
    if (txtUsuario==0){
        if(/^\s+$/.test(txtUsuario)){
            alert("Por Favor, no debe dejar nombre de usuario vacio..!!")
            document.flogueo.r_usuario.focus()
            return;        
        }
        alert("Ingrese usuario ..!!")
        document.flogueo.r_usuario.focus()
        return;
    }else{
        if(txtPassword==0){
            if(/^\s+$/.test(txtPassword)){
                alert("Por Favor, no debe dejar password vacio..!!")
                document.flogueo.password.focus()
                return;        
            }
            alert("Ingrese la Clave..!!")
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


function validaremail() {
    
    var re6 = /\S+@\S+\.\S+/;
    
    email=document.formo.email.value;
    
    if (email.length==0){
        alert("ERROR..!! no deje el email en blanco");
        document.formo.email.focus();
        return false;
    }else{
        
        if (re6.test(email)){
            alert("La direccion de email es incorrecta..!!");
            document.formo.email.focus();
            return false;
        }
    }
    document.formo.opcion.value ="correo";
    document.formo.email.value =email;
    document.formo.action="sirce_grecupera.php";
    document.formo.submit();
}

function desafio(){
    
    f=document.formo;
    xusu = f.x_usuario.value;
    xpr1 = f.r_pregunta.value;
    xre1 = f.r_respuesta.value;
    
    if ((xusu!="")&&(xpr1!="")&&(xre1!="")){
        
        if(xusu==""){
            alert("Nombre de usuario no debe esta en blanco..!");
            f.x_usuario.focus();
            return;
        }
        if(xpr1==""){
            alert("Seleccione una pregunta de seguridad..!!");
            f.r_pregunta.focus();
            return;
        }
        if(xre1==""){
            alert("Ingrese su respuesta secreta.");
            f.r_respuesta.focus();
            return;
        }
        document.formo.opcion.value ="desafio";
        document.formo.action="sirce_grecupera.php";
        document.formo.submit();
        
    }else{
        alert("Debe llenar todos los datos.");
    }	
}


//----------------------------------

function vd_envia_usuario(){
    
    var re1 = /[a-z]/;
    var re2 = /[A-Z]/;
    var re3 = /[0-9]/;
    var re4 = /[!@#)$%&*<,>;:(-._]/;
        var re5 = /^([0-9])*$/;
        var re6 = /\S+@\S+\.\S+/;
        
        // verifico el campo cedula
        if (document.form.r_cedula.value.length==0){
            alert("Favor no dejar CEDULA en blanco..!!");
            document.form.r_cedula.focus()
            return false;
        }else{
            resultado=document.form.r_cedula.value
            expre=/^\d{8}$/;
            if (!expre.test(resultado)){
                alert("Error al colocar la c\u00e9dula. Ejemplo: 21000444");
                document.form.r_cedula.focus()
                return false
            }
        }
        
        // verifico los campos nombre, apellido y telefono
        if (document.form.r_sexo.value.length==0 || document.form.r_apellidos.value.length==0 || document.form.r_nombres.value.length==0 || document.form.r_tlfcel.value.length==0 || document.form.r_tlfres.value.length==0 || document.form.r_direccion.value.length==0 || document.form.r_profesion.value.length==0 || document.form.r_personal.value.length==0 || document.form.r_usuario.value.length==0){
            alert("Favor no dejar registros en blanco..!!");
            document.form.r_apellidos.focus()
            return false
        }
    }
    
    
    // fin de la funcion vd_envia_usuario()
    function vd_envia_registro(){
        
        // verifico los campos encargado, responsable, procedencia, sexo, raza
        if (document.form.r_encargado.value.length==0 || document.form.r_responsable.value.length==0 || document.form.r_procedencia.value.length==0 || document.form.r_sexo.value.length==0 || document.form.r_raza.value.length==0 || document.form.r_fchnac.value.length==0 || document.form.r_lgrnac.value.length==0 || document.form.r_madre.value.length==0 || document.form.r_padre.value.length==0){
            alert("Favor no dejar registros en blanco..!!");
            document.form.r_encargado.focus()
            return false
        }
    }
    
    function valida_cedula(){
        
        
        if(document.form.nacionalidad.value.length==0){
            alert("No ha ingresado Nacionalidad");
            document.form.nacionalidad.focus()
            return false
        }
        
        if(document.form.r_cedula.value.length==0){
            alert("No ha digitado la Cédula!");
            document.form.r_cedula.focus()
            return false
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
    
    function validarEntero(valor){
        valor = parseInt(valor)
        if (isNaN(valor)) {
            
            return ""
        }else{
            
            return valor
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
    
    
    //colocar ceros delante del codigo
    function pad (n, length){
        var  n = n.toString();
        while(n.length < length)
        n = "0" + n;
        return n;
    }
    
    function regresar(){
        
        window.location="./sirce_menuadmin.php";
        
        
    }
    
    
    // Funciones para crear nuevos registros
    
    function dt_novo_censo(){
        window.location="./sirce_apertucenso.php";
    }
    
    function dt_novo_regusuario(){
        window.location="./sirce_regusuario.php";
    }
    
    function dt_novo_usuario(){
        window.location="./sirce_configusuario.php";
    }
    
    function dt_novo_docente(){
        window.location="./sirce_regdocente.php"; //lista
    }
    
    function dt_novo_ucalumno(){
        window.location="./sirce_incluirucalumno.php";
    }
    
    function dt_novo_incluirmallayuc(){
        window.location="./sirce_incluirmallayuc.php";
    }
    
    // fin.
    
    
    // Funciones para BUSCAR registros
    function dt_bscr_docente(){
        mipopup = window.open("./buscar_docente.php","formdoc","width=400px,heigth=5px,menubar=no,toolbar=no,scrollbars=yes,left=50,top=10,location=no,resizable=no");
        mipopup.focus()
    }
    
    function dt_bscr_usuario(){
        mipopup = window.open("./buscar_usuario.php","formu","width=200px,heigth=5px,menubar=no,toolbar=no,scrollbars=yes,left=50,top=10,location=no,resizable=no");
        mipopup.focus()
    }
    
    function dt_bscr_periodo(){
        mipopup = window.open("./buscar_periodos.php","formu","width=200px,heigth=5px,menubar=no,toolbar=no,scrollbars=yes,left=50,top=10,location=no,resizable=no");
        mipopup.focus()
    }
    // fin.
    function dt_proc_servicio(){
        document.servicios.procesar;
    }
    
    // Funciones para REGRESAR datos seleccionados
    
    function dt_rperiodo(id,peri,fini,ffin){
        
        f=opener.document.formu;
        
        f.id_periodo.value		= id;
        f.periodo.value			= peri;
        f.fecha_inicio.value	= fini;
        f.fecha_final.value		= ffin;
        window.close()
    }
    
    function dt_rusuario(x1,x2,x3,x4,x5,x6,x7,x8,x9,x10x,x11,x12,x13,x14,x15,x16,x17,x18){
        
        f=opener.document.formu;
        
        f.id_usuario.value	= x1;
        f.nombres.value		= x2;
        f.apellidos.value	= x3;
        f.r_cedula.value	= x4;
        f.nacionalidad.value	= x5;
        f.usuario.value	 	= x6;
        f.clave.value		= x7;
        f.clave2.value		= x8;
        f.telf_residencial.value	= x9;
        f.telf_celular.value	= x10;
        f.direccion.value		= x11;
        f.correo.value			= x12;
        f.pregunta_secreta1.value	= x13;
        f.repuesta_secreta1.value	= x14;
        f.pregunta_secreta2.value	= x15;
        f.repuesta_secreta2.value	= x16;
        f.r_status.value	= x17;
        f.privilegio.value	= x18;
        window.close()
    }
    
    function dt_rdocente(x1,x2,x3,x4,x5,x6,x7,x8,x9,x10x,x11,x12,x13,x14,x15,x16,x17){
        f=opener.document.formu;
        
        f.id_docente.value 	=	x1;
        f.r_coddace.value	=	x2;
        f.r_fecharegis.value=	x3;
        f.r_ndocente.value	=	x4;
        f.r_adocente.value	=	x5;
        f.r_nacion.value	=	x6;
        f.r_cedula.value	=	x7;
        f.r_dirhabita.value	=	x8;
        f.r_tlfcelular.value=	x9;
        f.r_tlfcasa.value	=	x10;
        f.r_email.value		=	x11;
        f.r_emailinst.value	=	x12;
        f.r_tpregrado.value	=	x13;
        f.r_tpostgrado.value=	x14;
        f.r_condicion.value	=	x15;
        f.r_categoria.value	=	x16;
        f.r_dedicacion.value=	x17;
        window.close();
        
    }
    // fin.
    
    function bscr_cedula(){
        document.formu.action="buscar_cedula.php";
        formu.submit();
    }
    
    // Funciones para GUARDAR datos 
    
    function dt_grbr_periodo(){
        f=document.formu;
        xidpe = f.id_periodo.value;
        xperi = f.periodo.value;
        xfini = f.fecha_inicio.value;
        xffin = f.fecha_final.value;
        
        if(xperi==""){
            alert("Favor llenar los datos!");
            formu.periodo.focus();
            return;
        }else{
            
            if(xffin <= xfini){
                alert("Fecha errada en la finalizacion del periodo..!!");
                formu.fecha_final.focus();
                return;
            }else{
                f.periodo.value=xperi;
                f.action="sirce_gperiodo.php";
                f.submit();
            }
        }
    }
    
    function dt_grbr_status(){
        
        var re1 = /[a-z]/;
        var re2 = /[A-Z]/;
        var re3 = /[0-9]/;
        var re4 = /[!@#)$%&*<,>;:(-._]/;
            
            f=document.formu;
            xidus = f.id_usuario.value;
            xusua = f.r_usuario.value;
            xpwdr = f.r_password.value;
            xpwd2 = f.r_password2.value;
            xstat = f.r_status.value;
            
            if ((xusua!="")&&(xpwdr!="")&&(xpwd2!="")&&(xstat!="")){
                
                if(xusua==""){
                    alert("Favor seleccione el usuario");
                    formu.r_usuario.focus();
                    return;
                }
                if(xpwdr != xpwd2){
                    alert("Las contraseñas no coinciden");
                    formu.r_password2.focus();
                    return;
                }else{
                    if((!re1.test(xpwdr))||(!re2.test(xpwdr))||(!re3.test(xpwdr))||(!re4.test(xpwdr))){
                        alert("La contraseña debe estar compuesta:\n          al menos una letra minisc\u00fala,\n          al menos una letra may\u00fascula,\n          al menos un n\u00famero,\n          al menos un caracter especial (!@#)$%&*<,>;:(-._)!");
                        formu.r_password.focus(); 
                        return;
                    }
                }
                if(xstat==""){
                    alert("Favor seleccione cambio de status del usuario");
                    formu.r_status.focus();
                    return;
                }
                f.r_status.value=xstat;
                f.action="sirce_gstatus.php";
                f.submit();
            }else{
                
            }
            
        }
        
        function dt_grbr_docente(){
            var re1 = /[a-z]/;
            var re2 = /[A-Z]/;
            var re3 = /[0-9]/;
            var re4 = /[!@#)$%&*<,>;:(-._]/;
                var re5 = /^([0-9])*$/;
                var re6 = /\S+@\S+\.\S+/;
                
                f=document.formu;
                xidd = f.id_docente.value;
                xcod = f.r_coddace.value;
                xfre = f.r_fecharegis.value;
                xape = f.r_adocente.value;
                xnom = f.r_ndocente.value;
                xnac = f.r_nacion.value;
                xced = f.r_cedula.value;
                xtlc = f.r_tlfcasa.value;
                xtlp = f.r_tlfcelular.value;
                xdir = f.r_dirhabita.value;
                xema = f.r_email.value;
                xemi = f.r_emailinst.value;
                xtpr = f.r_tpregrado.value;
                xtps = f.r_tpostgrado.value;
                xcon = f.r_condicion.value;
                xcat = f.r_categoria.value;
                xded = f.r_dedicacion.value;
                
                if ((xcod!="")&&(xfre!="")&&(xape!="")&&(xnom!="")&&(xnac!="")&&(xced!="")&&(xtlc!="")&&(xtlp!="")&&(xdir!="")&&(xema!="")
                &&(xemi!="")&&(xtpr!="")&&(xtps!="")&&(xcon!="")&&(xcat!="")&&(xded!="")){
                    
                    if(!re6.test(xema)){
                        alert("El formato del correo esta errado!");
                        formu.r_email.focus();
                        return;
                    }
                    if(!re6.test(xemi)){
                        alert("El formato del correo esta errado!");
                        formu.r_emailinst.focus();
                        return;
                    }
                    if(xcon==""){
                        alert("Seleccione condicion de empleado.");
                        formu.r_condicion.focus(); 
                        return;
                    }
                    if(xcat==""){
                        alert("Seleccione categoria como docente.");
                        formu.r_cat.focus(); 
                        return;
                    }
                    if(xded==""){
                        alert("Selecciones dedicacion como docente.");
                        formu.r_dedicacion.focus(); 
                        return;
                    }
                    
                    f.operacion.value="GUARDAR";
                    f.modulo.value="RDOCENTE";
                    f.action="sirce_guardar.php";
                    f.submit();
                    
                }else{
                    alert("Debe llenar todos los datos.");
                }
            }
            
            // Funciones para BORRAR datos seleccionados
            
            function dt_borr_usuario(){
                f=document.formu;
                
                xced = f.r_cedula.value;
                if (xced!=""){
                    
                    f.operacion.value="BORRAR";
                    f.modulo.value="REGISTRO";
                    f.action="srpp_us_guardar.php";
                    f.submit();
                }else{
                    alert("Debe selecciona un registro.!!");
                    return;
                }
            }
            
            
            
            function dt_grbr_usuario(){
                var re1 = /[a-z]/;
                var re2 = /[A-Z]/;
                var re3 = /[0-9]/;
                var re4 = /[!@#)$%&*<,>;:(-._]/;
                var re5 = /^([0-9])*$/;
                    var re6 = /\S+@\S+\.\S+/;
                    
                    f=document.formu;
                    xidu = f.id_usuario.value;
                    xnom = f.nombres.value;		
                    xape = f.apellidos.value;	
                    xced = f.r_cedula.value;	
                    xnac = f.nacionalidad.value;
                    xusu = f.usuario.value; 	
                    xclv = f.clave.value;	
                    xcl2 = f.clave2.value;
                    xtrs = f.telf_residencial.value;
                    xtcl = f.telf_celular.value;
                    xdir = f.direccion.value;
                    xcor = f.correo.value;
                    xpr1 = f.pregunta_secreta1.value;
                    xre1 = f.repuesta_secreta1.value;
                    xpr2 = f.pregunta_secreta2.value;
                    xre2 = f.repuesta_secreta2.value;
                    xsta = f.r_status.value;
                    xprv = f.privilegio.value;
                    
                    if ((xnom!="")&&(xape!="")&&(xced!="")&&(xnac!="")&&(xusu!="")&&(xclv!="")&&(xcl2!="")&&(xtrs!="")&&(xtcl!="")
                    &&(xdir!="")&&(xcor!="")&&(xpr1!="")&&(xre1!="")&&(xpr2!="")&&(xre2!="")&&(xsta!="")&&(xprv!="")){
                        
                        if((xclv!="")){
                            if((formu.clave.value).length<8){
                                alert("La contrase\u00F1a debe contener 8 caracteres.");
                                formu.clave.focus();
                                return;
                            }else{
                                if((!re1.test(xclv))||(!re2.test(xclv))||(!re3.test(xclv))||(!re4.test(xclv))){
                                    alert("La contraseña debe estar compuesta:\          al menos una letra minisc\u00fala,\n          al menos una letra may\u00fascula,\n          al menos un n\u00famero,\n          al menos un caracter especial (!@#)$%&*<,>;:(-._)!");
                                    formu.calve.focus(); 
                                    return;
                                }
                            }
                            if(xcl2==""){
                                alert("Confirme la contrase\u00F1a.");
                                formu.clave2.focus();
                                return;
                            }else{
                                if(formu.clave.value != formu.clave2.value){
                                    alert("Disculpe, las contrase\u00F1as no coinciden.!");
                                    formu.clave2.focus(); 
                                    return;
                                }
                            }
                        }else{
                            alert("No olvide colocar una contrase\u00F1a..");
                            formu.clave.focus(); 
                            return;
                        }
                        if(!re6.test(xcor)){
                            alert("El formato del correo esta errado!");
                            formu.correo.focus();
                            return;
                        }
                        if((xclv!="")){
                            if((formu.clave.value).length<8){
                                alert("La contrase\u00F1a debe contener 8 caracteres.");
                                formu.clave.focus();
                                return;
                            }else{
                                if((!re1.test(xclv))||(!re2.test(xclv))||(!re3.test(xclv))||(!re4.test(xclv))){
                                    alert("La contraseña debe estar compuesta:\          al menos una letra minisc\u00fala,\n          al menos una letra may\u00fascula,\n          al menos un n\u00famero,\n          al menos un caracter especial (!@#)$%&*<,>;:(-._)!");
                                    formu.calve.focus(); 
                                    return;
                                }
                            }
                            if(xcl2==""){
                                alert("Confirme la contrase\u00F1a.");
                                formu.clave2.focus();
                                return;
                            }else{
                                if(formu.clave.value != formu.clave2.value){
                                    alert("Disculpe, las contrase\u00F1as no coinciden.!");
                                    formu.clave2.focus(); 
                                    return;
                                }
                            }
                        }else{
                            alert("No olvide colocar una contrase\u00F1a..");
                            formu.clave.focus(); 
                            return;
                        }
                        if(xprv==""){
                            alert("Seleccione Nivel de usuario en el sistema.");
                            formu.privilegio.focus(); 
                            return;
                        }
                        if(xsta==""){
                            alert("Seleccione Status a registrar para el usuario.");
                            formu.r_status.focus(); 
                            return;
                        }
                        if(xpr1==""){
                            alert("Seleccione una pregunta de seguridad.");
                            formu.pregunta_secreta1.focus(); 
                            return;
                        }
                        if(xpr2=""){
                            alert("Seleccione una pregunta de seguridad.");
                            formu.pregunta_secreta2.focus(); 
                            return;
                        }
                        if(xre1==""){
                            alert("Ingrese su respuesta secreta.");
                            formu.repuesta_secreta1.focus(); 
                            return;
                        }
                        if(xre2==""){
                            alert("Ingrese su respuesta secreta.");
                            formu.repuesta_secreta2.focus(); 
                            return;
                        }
                        f.operacion.value="GUARDAR";
                        f.modulo.value="RUSUARIO";
                        f.action="sirce_guardar.php";
                        f.submit();
                        
                    }else{
                        alert("Debe llenar todos los datos.");
                    }
                }
                
                function dt_grbr_registro(){
                    f=document.formr;
                    
                    xnac = f.r_nac.value;
                    xcod = f.r_codigo.value;
                    xsex = f.r_sexo.value;
                    xnen = f.r_encargado.value;
                    xnre = f.r_responsable.value;
                    xpro = f.r_procedencia.value;
                    xlrg = f.r_lgrnac.value;
                    xfna = f.r_fchnac.value;
                    xpes = f.r_psnac.value;
                    xpdr = f.r_padre.value;
                    xmdr = f.r_madre.value;
                    
                    if ((xnac!="")&&(xcod!="")&&(xsex!="")&&(xnen!="")&&(xner!="")&&(xpro!="")&&
                    (xlrg!="")&&(xfna!="")&&(xpes!="")&&(xdpr!="")&&(xmdr!="")){
                        
                        f.operacion.value="GUARDAR";
                        f.modulo.value="REGISTRO";
                        f.action="srpp_us_guardar.php";
                        f.submit();
                        
                    }else{
                        
                        alert("Debe llenar todos los datos.");
                    }
                    
                }
                // fin 
                
                
                // Funciones para BORRAR datos seleccionados
                function dt_borr_usuario(){
                    f=document.formu;
                    
                    xced = f.r_cedula.value;
                    if (xced!=""){
                        
                        f.operacion.value="BORRAR";
                        f.modulo.value="REGISTRO";
                        f.action="srpp_us_guardar.php";
                        f.submit();
                    }else{
                        alert("Debe selecciona un registro.!!");
                        return;
                    }
                }
                
                function resaltar_On(GridView){
                    
                    if(GridView != null)
                    {
                        GridView.originalBgColor = GridView.style.backgroundColor;
                        GridView.style.backgroundColor='#990066';
                        if (navigator.appName=="Netscape") {
                            GridView.style.cursor = 'pointer';
                        } else {
                            GridView.style.cursor='hand';
                        }
                        
                    }
                }
                
                function resaltar_Off(GridView){
                    
                    if(GridView != null)
                    {
                        GridView.style.backgroundColor = GridView.originalBgColor;
                    }
                }
                
                function nuevo_usuario(){
                    
                    $("#r_nac").val("");
                    $("#r_cedula").val("");
                    $("#r_apellidos").val("");
                    $("#r_nombres").val("");
                    $("#r_fchnac").val("");
                    $("#r_tlfcel").val("");
                    $("#r_tlfres").val("");
                    $("#r_direccion").val("");
                    $("#r_email").val("");
                    $("#r_profesion").val("");
                    $("#r_personal").val("");
                    $("#r_usuario").val("");
                    $("#r_password").val("");
                    $("#r_password2").val("");
                    $("#r_pregunta").val("");
                    $("#r_respuesta").val("");
                    return;
                }
                
                function close_win() {
                    window.close();
                }
                
                function us_recuperar(){
                    
                    alert($(":radio[name=opcion]:checked").val())
                }
                
                function nobackbutton(){
                    
                    window.location.hash="no-back-button";
                    
                    window.location.hash="Again-No-back-button"; //chrome
                    
                    window.onhashchange=function(){window.location.hash="no-back-button";}
                }
                