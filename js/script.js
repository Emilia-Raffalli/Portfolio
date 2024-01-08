


console.log('hello');

// document.getElementById("logo").addEventListener("click", function() {
//     this.classList.toggle("rotate");
// });

document.addEventListener('DOMContentLoaded', function () {
    const checkbox = document.getElementById('check');
    const buttonNavElts = document.querySelectorAll('.nav-bullet');
    let menuList = document.querySelector('.nav-top ul');
    let navElt = document.querySelector('.nav-top');





    //Enregistrement de l'état du menu dans le local storage
    const storedMenuState = JSON.parse(localStorage.getItem('menuState'));

    if (storedMenuState) {
        checkbox.checked = storedMenuState.checked;
        menuList.style.display = storedMenuState.checked ? 'block' : 'none';
        navElt.style.backgroundColor = storedMenuState.checked ? 'white' : 'transparent';

        buttonNavElts.forEach(function(buttonNavElt, index) {
            buttonNavElt.style.backgroundColor = storedMenuState.backgroundColors[index] || 'transparent';
        });
    }




    buttonNavElts.forEach(function(buttonNavElt, index) {
        const savedColor = sessionStorage.getItem('button_${index}');
        buttonNavElt.style.backgroundColor = savedColor || 'transparent';
    });

    checkbox.addEventListener('change', function () {
        if (checkbox.checked) {
            menuList.classList.add('visible');

            menuList.style.display = 'block';
            navElt.style.backgroundColor = 'white'; 

        } else {
            // Si elle n'est pas cochée, masquer la liste ul
            menuList.style.display = 'none';
            navElt.style.backgroundColor = 'transparent'; 
            menuList.style.display('none');

        }
    });

    menuList.addEventListener('click', function () {
       // ajout de la classe visible
        menuList.classList.toggle('visible');
    });




    buttonNavElts.forEach(function(buttonNavElt, index) {
        buttonNavElt.addEventListener('click', function() {
            buttonNavElts.forEach(function(btn) {
                btn.style.backgroundColor = 'transparent';
                btn.style.transform = 'rotate(0deg)';
                btn.style.transition = 'background-color 0.3s, transform 0.5s';
            });
    
            this.style.backgroundColor = '#F64C72';
            this.style.transform = 'rotate(-45deg) scale(1.4)';
            this.style.transition = 'background-color 0.3s, transform 0.5s';
            sessionStorage.setItem(`button_${index}`, '#F64C72');
        });


    });



    // Changer de couleur au scroll / changement de logo

    window.addEventListener('scroll', function () {
        const scrollPosition = window.scrollY;
        const sections = document.querySelectorAll('header, #about, #work, #contact, footer');
    
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionBottom = sectionTop + section.offsetHeight;
    
            // position offset
            const offset = 100;
    
            const logo = document.getElementById('logo'); 
            const currentMenuElts = document.querySelectorAll('.line-menu-1, .line-menu-2');
            const checkboxElt = document.querySelector('input[type="checkbox"]');
    
            if (checkboxElt.checked) {
                currentMenuElts.forEach(currentMenuElt => {
                    currentMenuElt.style.backgroundColor = '#282dc1';
                });
                logo.classList.remove('logo-about', 'logo-work', 'logo-contact', 'logo-footer');

            } 
            if (scrollPosition >= sectionTop - offset && scrollPosition < sectionBottom) {
                    if ((section.id === 'header' || section.id === 'footer') && !checkboxElt.checked) {
                        currentMenuElts.forEach(currentMenuElt => {
                            currentMenuElt.style.backgroundColor = '#ffffff';
                        });
                    } else {
                        currentMenuElts.forEach(currentMenuElt => {
                            currentMenuElt.style.backgroundColor = '#282dc1';
                        });
                    }
    
                    logo.classList.remove('logo-about', 'logo-work', 'logo-contact', 'logo-footer');
                    logo.classList.add(`logo-${section.id}`);
            }
        });
        
    });




});





