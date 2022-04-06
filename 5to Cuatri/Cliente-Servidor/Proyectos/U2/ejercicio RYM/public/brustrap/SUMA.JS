var nombres=[];
var precios=[];
var cantidades=[];
var newcompra=[];

function Agregar(){
    var  nombres1= prompt("NOMBRE");
    nombres.push(nombres1);
    var precios1= prompt("PRECIOS");
    precios.push(precios1)
    var cantidades1= prompt("CANTIDAD");
    cantidades.push(cantidades1);

    var compra={
        nombre:nombres1,
        precio:precios1,
        cantidades:cantidades1
    }
    newcompra.push(compra);

    document.getElementById("Nombre").innerHTML+=compra.nombre+"<br>";
    document.getElementById("Precio").innerHTML+=compra.precio+"<br>";
    document.getElementById("Cantidad").innerHTML+= compra.cantidades+"<br>";

 var sumatoria=0;

  sumatoria=sumatoria+(compra.precio*compra.cantidades);
  document.getElementById("totalf").innerHTML+=sumatoria+ "<br>";

  var total=0;
  for (var i=0; i<sumatoria.leght; i++){
      total= sumatoria[i]/sumatoria.leght;
    ;
  document.getElementById("totalf").innerHTML+=total;
  }
}

function multiplicar(cantidades1,precios1){
  var multiplicar=[];
  multiplicar= cantidades1*precios1;

  console.log(multiplicar);

}