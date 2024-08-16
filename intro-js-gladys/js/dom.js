const h2 = document.body.childNodes[1];
console.log(h2.parentNode);
console.log(document.parentNode);

const h5 = document.body.childNodes[2].childNodes[2];
console.log(h5);
    

const elementosExistentes = Array.from(
    document.getElementsByClassName("existe")
);

elementosExistentes.forEach((elemento) => {
    console.log(elemento);
});


console.log(document.getElementsByClassName('nuevas'));

console.log(document.getElementById('antiguas').getElementsByClassName('existe')); // anticuada

console.log(document.querySelectorAll('p').length);

console.log(document.querySelectorAll('#contenido p'));

console.log(document.querySelectorAll('.existe'));

console.log(document.querySelector('p'));

console.log(document.querySelector('ul'));

console.log(document.getElementById('contenido').innerHTML);

//Contenido textual

// Propiedad textContent: devuelve todo el contenido de texto de un elemento DOM

//El contenido textual del elemento DOM con el ID "contenido"


console.log(document.getElementById('contenido').textContent);

console.log(document.querySelector('a').getAttribute('href'));

console.log(document.querySelector('ul').id);

const clases = document.getElementById('antiguas').classList;
console.log(clases);
console.log(clases.length);
console.log(clases[0]);