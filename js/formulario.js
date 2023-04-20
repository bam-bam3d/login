function openModals(valor){
    if(valor=="pending"){
       document.getElementById('modal2').classList.add('modal--show2');
    }
    if(valor=="not-hired"){
        document.getElementById('modal1').classList.add('modal--show');
    }
    if(valor=="error"){
        document.getElementById('subr').classList.add('subr-inactivo');
        document.getElementById('subr-x').classList.add('subr-x-activo');
    }
}

function closeModal1(){
    document.getElementById('modal1').classList.remove('modal--show');
}
function closeModal2(){
    document.getElementById('modal2').classList.remove('modal--show2');
}
    
const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');

const expresiones = {
	password: /^.{1,80}$/,
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
}
const campos = {
	password: false,
	correo: false,
}
const validarFormulario = (e) => {
    switch (e.target.name) {
		case "correo":
            if(expresiones.correo.test(e.target.value)){
                document.getElementById('grupo__correo').classList.remove('formulario__grupo-incorrecto');
                document.getElementById('grupo__correo').classList.add('formulario__grupo-correcto');
                document.getElementById('correo1').classList.remove('formulario__input-error-activo');
                // olvide contraseña
                document.getElementById('subr').classList.remove('subr-inactivo');
                document.getElementById('subr-x').classList.remove('subr-x-activo');
                campos.correo = true;
                //document.getElementById("password").focus();
            }else{
                document.getElementById('grupo__correo').classList.add('formulario__grupo-incorrecto');
                document.getElementById('grupo__correo').classList.remove('formulario__grupo-correcto');
                document.getElementById('correo1').classList.add('formulario__input-error-activo');
                document.getElementById("correo").focus();
                campos.correo = false;
            }
		break;
        case "password":
            if(expresiones.password.test(e.target.value)){
                document.getElementById('grupo__password').classList.remove('formulario__grupo-incorrecto');
                document.getElementById('grupo__password').classList.add('formulario__grupo-correcto');
                // olvide contraseña
                document.getElementById('subr').classList.remove('subr-inactivo');
                document.getElementById('subr-x').classList.remove('subr-x-activo');
               
                campos.password = true;
            }else{
                document.getElementById('grupo__password').classList.add('formulario__grupo-incorrecto');
                document.getElementById('grupo__password').classList.remove('formulario__grupo-correcto');
                // olvide contraseña
                //document.getElementById('subr').classList.add('subr-inactivo');
                document.getElementById('subr-x').classList.add('subr-x-activo');
               
                campos.password = false;
            }
		break;
	}
}
inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur', validarFormulario);
});