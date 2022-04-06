//Para Prueba
var EmaPrueba="david@gmail.com";
var PasPrueba="12345";

function Agregar()
{
    Swal.fire({
        icon: 'success',
        title: 'Listo',
        text:'¡Su Cuenta Se Creo Correctamente!',
        inputAttributes: {
            autocapitalize: 'off'
        },
        confirmButtonText: 'Aceptar',
    })
        .then((result) => {
            window.open("../index.html", "_self")
        })

}
function Verificar(){
    var Ema = document.getElementById("I1").value;
    var Pas = document.getElementById("I2").value;
    if(EmaPrueba != Ema){
        Swal.fire({
            icon: 'error',
            title: '¡Error!.',
            text: '¡Correo Incorrecto!',
        })
    }else {
        if(PasPrueba!= Pas) {
            Swal.fire({
                icon: 'error',
                title: '¡Error!.',
                text: '¡Contraseña Incorrecta!',
            })
        }else {
            window.open("../index.html", "_self")
        }
    }
}

function Comprar(){
    Swal.fire({
        icon: 'success',
        title: 'Compra Realizada',
        text:'Podrá Recoger Su Pedido Entre Los Días -- -- -- En Nuestro Establecimiento Con Su Respectivo Comprobante.\n' +
            'Descargue Su Comprobante\n',
        backdrop: `rgba(0,0,0,0.4)
        url("../Pictures/bg2.png")
        left top
        no-repeat`,
        inputAttributes: {
            autocapitalize: 'off'
        },
        confirmButtonText: 'Descargar',
    })
        .then((result) => {
            window.open("../index.html", "_self");
            Download("Ticket De Compra.txt","Con Este Comprobante Puedes Recojer Su Compra Entre Los Dias 00/00/00 y 00/00/00");
        })
}

function Tarjeta(){
    Swal.fire({
        title: 'Tarjeta De Credito',
        html: '<center><link href="../CSS\'s/Imput\'s.css" rel="stylesheet" type="text/css"><div class="page"><label class="field field_v2"><input class="field__input" placeholder="..."><span class="field__label-wrap"><span class="field__label">Numero De Tarjeta</span></span></label><label class="field field_v2"><input class="field__input" placeholder="..."><span class="field__label-wrap"><span class="field__label">MM</span></span></label><label class="field field_v2"><input class="field__input" placeholder="..."><span class="field__label-wrap"><span class="field__label">AA</span></span></label><label class="field field_v2"><input class="field__input" placeholder="..."><span class="field__label-wrap"><span class="field__label">CVC</span></span></label></div></center>',
        backdrop: `
            rgba(0,0,123,0.4)`,
        confirmButtonText: 'Aceptar',
    })
        .then((result) => {

        })
}

function Cita(){
    Swal.fire({
        icon: 'success',
        title: 'Cita Realizada',
        text:'Deberá Llevar El Equipo A Nuestro Establecimiento Con Su Respectivo Comprobante, De No Ser Así No Se Podrá Realizar La Cita.\n' +
            'Descargue Su Comprobante\n',
        backdrop: `rgba(0,0,0,0.4)
        url("../Pictures/bg2.png")
        left top
        no-repeat`,
        inputAttributes: {
            autocapitalize: 'off'
        },
        confirmButtonText: 'Descargar',
    })
        .then((result) => {
            window.open("../index.html", "_self");
            Download("Cita.txt","Este Comprobante Debera Presentarlo Para Validar Su Cita");
        })
}
function InformacionUnoPRI(){
    Swal.fire({
        title: 'Informacion Del Producto',
        html: '<center><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"><style>.img-Productos {width:150px !important;height:200px !important;</style><div class="container"><div class="col-10"><div class="p-3 border bg-light"><div class="col-lg-12"><center><img alt="Cambiar imagen" class="img-Productos" onmouseout="this.src=\'Pictures/Producto.jpg\' " onmouseover="this.src=\'Pictures/Producto2.jpg\';" src="Pictures/Producto.jpg"></center><br><center><h4>Producto<br></h4></center><h6>Especificaciones<br></h6><h7><b>Precio: </b> $6999<br><b>Procesador: </b> AMD Ryzen 5 5600G<br><b>RAM: </b> 8GB<br><b>Almacenamiento: </b> SSD 480GB<br><b>Sistema Operativo: </b> Windows<br><b>Disponible: </b> <h7 style="color: green">Si</h7><br></h7></div></div></div></div></center>',
        backdrop: `
            rgba(0,0,123,0.4)`,
        confirmButtonText: 'Aceptar',
    })
        .then((result) => {

        })
}

function InformacionPRI(){
    Swal.fire({
        title: 'Informacion Del Producto',
        html: '<center><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"><style>.img-Productos {width:150px !important;height:200px !important;</style><div class="container"><div class="col-10"><div class="p-3 border bg-light"><div class="col-lg-12"><center><img alt="Cambiar imagen" class="img-Productos" onmouseout="this.src=\'Pictures/Producto.jpg\' " onmouseover="this.src=\'Pictures/Producto2.jpg\';" src="Pictures/Producto.jpg"></center><br><center><h4>Producto<br></h4></center><h6>Especificaciones<br></h6><h7><b>Precio: </b> ------<br><b>Procesador: </b> ------------<br><b>RAM: </b> ---<br><b>Almacenamiento: </b> ---------<br><b>Sistema Operativo: </b> ---------<br><b>Disponible: </b> <h7> --</h7><br></h7></div></div></div></div></center>',
        backdrop: `
            rgba(0,0,123,0.4)`,
        confirmButtonText: 'Aceptar',
    })
        .then((result) => {

        })
}

function InformacionUnoSEC(){
    Swal.fire({
        title: 'Informacion Del Producto',
        html: '<center><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"><style>.img-Productos {width:150px !important;height:200px !important;</style><div class="container"><div class="col-10"><div class="p-3 border bg-light"><div class="col-lg-12"><center><img alt="Cambiar imagen" class="img-Productos" onmouseout="this.src=\'../Pictures/Producto3.jpg\' " onmouseover="this.src=\'../Pictures/Producto4.jpg\';" src="../Pictures/Producto3.jpg"></center><br><center><h4>Producto<br></h4></center><h6>Especificaciones<br></h6><h7><b>Precio: </b> $12999<br><b>Procesador: </b> Intel Core i5 8700K<br><b>RAM: </b> 12GB<br><b>Almacenamiento: </b> HDD 1TB<br><b>Sistema Operativo: </b> Windows<br><b>Disponible: </b> <h7 style="color: green">Si</h7><br></h7></div></div></div></div></center>',
        backdrop: `
            rgba(0,0,123,0.4)`,
        confirmButtonText: 'Aceptar',
    })
        .then((result) => {

        })
}

function InformacionSEC(){
    Swal.fire({
        title: 'Informacion Del Producto',
        html: '<center><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"><style>.img-Productos {width:150px !important;height:200px !important;</style><div class="container"><div class="col-10"><div class="p-3 border bg-light"><div class="col-lg-12"><center><img alt="Cambiar imagen" class="img-Productos" onmouseout="this.src=\'../Pictures/Producto3.jpg\' " onmouseover="this.src=\'Pictures/Producto4.jpg\';" src="../Pictures/Producto3.jpg"></center><br><center><h4>Producto<br></h4></center><h6>Especificaciones<br></h6><h7><b>Precio: </b> ------<br><b>Procesador: </b> ------------<br><b>RAM: </b> ----<br><b>Almacenamiento: </b> ---------<br><b>Sistema Operativo: </b> ---------<br><b>Disponible: </b> <h7>--</h7><br></h7></div></div></div></div></center>',
        backdrop: `
            rgba(0,0,123,0.4)`,
        confirmButtonText: 'Aceptar',
    })
        .then((result) => {

        })
}

function Download(filename, text) {
    var element = document.createElement('a');
    element.setAttribute('href', 'data:text/plain;charset=utf-8,' + encodeURIComponent(text));
    element.setAttribute('download', filename);

    element.style.display = 'none';
    document.body.appendChild(element);

    element.click();

    document.body.removeChild(element);
}

function openNav() {
    document.getElementById("sideNavigation").style.width = "350px";
    document.getElementById("main").style.marginLeft = "350px";
}

function closeNav() {
    document.getElementById("sideNavigation").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
}
