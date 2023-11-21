document.addEventListener('DOMContentLoaded', function(){
    eventListener();

    darkMode();
});

function darkMode(){
    const botonDarkMode = document.querySelector('.dark-mode-boton'),
        prefiereDarkMode =  window.matchMedia('(prefers-color-scheme: dark)');

        //console.log(prefiereDarkMode.matches);
        
        if(prefiereDarkMode.matches){
            document.body.classList.add('dark-mode');
        } else {
            document.body.classList.remove('dark-mode');
        }

        prefiereDarkMode.addEventListener('change', function(){
            document.body.classList.toggle('dark-mode');
        })

    botonDarkMode.addEventListener('click', function(){
        document.body.classList.toggle('dark-mode');
    });
}

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