//console.log('hola');

//creamos nuestra constante para acceder doom
const formularioBuscar = document.querySelector('#searchform #s');

//agregamos clases atravez de javaScript puro
formularioBuscar.className += ' form-control ';
//console.log(formularioBuscar);

const btnBuscar = document.querySelector('#searchsubmit');
btnBuscar.className += ' btn btn-primary btn-block ';

//accediendo al widget 
const listaWidget = document.querySelector('.mi-clase ul');
//console.log(listaWidget);
//agregamos la clase
listaWidget.className += ' list-group ';

//agregamos clases a cada li de nuestra lista
// querySelectorAll seleccionamos todo
listaWidget.querySelectorAll('li').forEach(item => {
	//acada li le pasamos la clase
	item.className += ' list-group-item';
})
