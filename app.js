addEventListener('DOMContentLoaded', () =>{
  const btn_menu = document.querySelector('.btn_menu')
  if (btn_menu){
    btn_menu.addEventListener('click',()=>{
      const menu_items = document.querySelector('.menu_items')
      menu_items.classList.toggle('show')
    })
  }
}
function captura(){
let nombre=document.getElementById("nombre").value;
let apellidos=document.getElementById("apellidos").value;
let identificacion=document.getElementById("identificacion").value;
let telefono=document.getElementById("telefono").value;
let f_entrada=document.getElementById("f_entrada").value;
let f_salida=document.getElementById("f_salida").value;
let correo=document.getElementById("correo").value;
if (nombre == "" || apellidos == "" || identificacion == "" || telefono == "" || f_entrada == "" || f_salida == "" || correo == "") {
  alert('campos vacio, por favor llena todos los datos');
}else {
  alert('enviado');
}
}
)
