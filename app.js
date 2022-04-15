addEventListener('DOMContentLoaded', () =>{
  const btn_menu = document.querySelector('.btn_menu')
  if (btn_menu){
    btn_menu.addEventListener('click',()=>{
      const menu_items = document.querySelector('.menu_items')
      menu_items.classList.toggle('show')
    })
  }
}
)



function confirmar(){
  let datos ='';
  datos+= `<div class="resultss">
  <form class="" method="post" action=".././controlador/confirmarReserva.php" >
    <label for="">Id de reserva a confirmar</label>
    <input type="text" name="idReserva" value="">
    <button type="submit" class="btn btn-primary" >Confirmar</button>
  </form>
  </div>`

  document.getElementById('resultado').innerHTML=datos;
}

function finalizar(){
  let datos ='';
  datos+= `<div class="resultss">
  <form class="" method="post" action=".././controlador/finalizarReserva.php" >
    <label for="">Id de reserva a finalizar</label>
    <input type="text" name="idReserva" value="">
    <button type="submit" class="btn btn-primary">Finalizar</button>
  </form>
  </div>`

  document.getElementById('resultado').innerHTML=datos;
}
