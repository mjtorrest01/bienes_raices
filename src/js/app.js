document.addEventListener('DOMContentLoaded', function(){
    eventListener();
});

function eventListener(){
    const mobileMenu = document.querySelector('.mobile-menu');

    mobileMenu.addEventListener('click', navegacionReponsive);
}

function navegacionReponsive(){
    const navegacion = document.querySelector('.navegacion');

    navegacion.classList.toggle('mostrar');

    /* ejecuta la funcion con 'toggle' 
    if(navegacion.classList.contains('mostrar')){
        navegacion.classList.remove('mostrar');
    } else{
        navegacion.classList.add('mostrar');
    }
    */
}