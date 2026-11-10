
    // Récupération des éléments
    const btnAchete = document.querySelector('.btner1.activated');
    const btnVends = document.querySelector('.btner1:not(.activated)');
    const imgEin = document.getElementById('ein_img');
    const imgZwei = document.getElementById('zwei_img');

    // Fonction pour gérer le changement d'état
    function toggleButtons() {
        // Changer la classe activated
        btnAchete.classList.remove('activated');
        btnVends.classList.add('activated');

        // Changer l'affichage des images
        imgEin.style.display = 'none';
        imgZwei.style.display = 'block';
    }

    // Fonction pour gérer le retour à l'état initial
    function toggleBack() {
        // Changer la classe activated
        btnVends.classList.remove('activated');
        btnAchete.classList.add('activated');

        // Changer l'affichage des images
        imgZwei.style.display = 'none';
        imgEin.style.display = 'block';
    }

    // Ajout des événements de clic sur les boutons
    btnAchete.addEventListener('click', toggleBack);
    btnVends.addEventListener('click', toggleButtons);


    






    const slidesContainer = document.querySelector('.single_slide_content');
    const slides = document.querySelectorAll('.single_slide1');
    
    // Clone les éléments pour créer un défilement infini
    slides.forEach(slide => {
        const clone = slide.cloneNode(true);
        slidesContainer.appendChild(clone);
    });
    
    // Ajuste la largeur du conteneur pour qu'il prenne en compte tous les éléments
    const totalWidth = Array.from(slidesContainer.children).reduce((acc, slide) => acc + slide.offsetWidth, 0);
    slidesContainer.style.width = `${totalWidth}px`;
    
    let position = 0;
    let direction = 'left'; // Direction initiale
    let animationFrameId; // ID de l'animation
    
    // Fonction pour animer le défilement
    function animate() {
        if (direction === 'left') {
            position -= 1; // Défile vers la gauche
            if (Math.abs(position) >= slides[-1].offsetWidth) {
                direction = 'right'; // Change la direction
            }
        } else {
            position += 1; // Défile vers la droite
            if (position >= 0) {
                direction = 'left'; // Change la direction
            }
        }
    
        slidesContainer.style.transform = `translateX(${position}px)`;
        animationFrameId = requestAnimationFrame(animate); // Appelle la fonction pour la prochaine animation
    }
    
    // Démarre l'animation
    animate();
    
    // Gestion du défilement avec la souris
    let isMouseDown = false;
    let startX;
    let currentX;
    
    // Lorsque la souris est enfoncée
    slidesContainer.addEventListener('mousedown', (e) => {
        isMouseDown = true;
        startX = e.clientX; // Position de départ du curseur
        cancelAnimationFrame(animationFrameId); // Arrête l'animation
    });
    
    // Lorsque la souris est déplacée
    slidesContainer.addEventListener('mousemove', (e) => {
        if (!isMouseDown) return; // Si la souris n'est pas enfoncée, on sort
        currentX = e.clientX; // Position actuelle du curseur
        const diffX = startX - currentX; // Différence de position
        position -= diffX; // Défilement basé sur la position de la souris
        slidesContainer.style.transform = `translateX(${position}px)`; // Applique le défilement
        startX = currentX; // Met à jour la position de départ
    });
    
    // Lorsque la souris est relâchée
    slidesContainer.addEventListener('mouseup', () => {
        isMouseDown = false; // Réinitialise l'état
    });
    
    // Lorsque la souris quitte le conteneur
    slidesContainer.addEventListener('mouseleave', () => {
        isMouseDown = false; // Réinitialise l'état
        animate(); // Relance l'animation
    });


























    // const slidesContainer = document.querySelector('.single_slide_content');
    // const slides = document.querySelectorAll('.single_slide1');
    
    // // Clone les éléments pour créer un défilement infini
    // slides.forEach(slide => {
    //     const clone = slide.cloneNode(true);
    //     slidesContainer.appendChild(clone);
    // });
    
    // // Ajuste la largeur du conteneur pour qu'il prenne en compte tous les éléments
    // const totalWidth = Array.from(slidesContainer.children).reduce((acc, slide) => acc + slide.offsetWidth, 0);
    // slidesContainer.style.width = `${totalWidth}px`;
    
    // let position = 0;
    // let direction = 'left'; // Direction initiale
    
    // // Fonction pour animer le défilement
    // function animate() {
    //     if (direction === 'left') {
    //         position -= 1; // Défile vers la gauche
    //         if (Math.abs(position) >= slides[-1].offsetWidth) {
    //             direction = 'right'; // Change la direction
    //         }
    //     } else {
    //         position += 1; // Défile vers la droite
    //         if (position >= 0) {
    //             direction = 'left'; // Change la direction
    //         }
    //     }
    
    //     slidesContainer.style.transform = `translateX(${position}px)`;
    //     requestAnimationFrame(animate); // Appelle la fonction pour la prochaine animation
    // }


    
    
    // Démarre l'animation
    // animate();

    // const slidesContainer = document.querySelector('.single_slide_content');
    // const slides = document.querySelectorAll('.single_slide1');
    
    // // Clone les éléments pour créer un défilement infini
    // slides.forEach(slide => {
    //     const clone = slide.cloneNode(true);
    //     slidesContainer.appendChild(clone);
    // });
    
    // // Ajuste la largeur du conteneur pour qu'il prenne en compte tous les éléments
    // slidesContainer.style.width = `${slides.length * 400}px`; // Ajuste selon la largeur de tes slides