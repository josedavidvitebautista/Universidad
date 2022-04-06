function Agregar() {

    var LooL1 = prompt("Nombre");
    var LooL2 = prompt("precio");
    var LooL3 = prompt("cantidad");



    //Implementacion De Una Parte Del Codigo Profe Para Que Funcione El Punto 5 y 6 Jaja :'v
    var compra = {
        nombre: LooL1,
        precio: LooL2,
        cantidad: LooL3

    }
    newarracompra.push(compra);

    //Imprime Total De Alumnos
    document.getElementById('Pt1').innerHTML = nombretodos.length;

    //Imprime La Lista De Alumnos
    document.getElementById('nom').innerHTML += compra.nombre + "<br>";
    document.getElementById('pre').innerHTML += compra.precio + "<br>";
    document.getElementById('can').innerHTML += compra.cantidad + "<br>";
}