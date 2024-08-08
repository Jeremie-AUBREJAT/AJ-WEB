function isInViewport(element) {
    var rect = element.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

function checkVisibility(selector, animationClass) {
    var progressBarList = document.querySelectorAll(selector);
    progressBarList.forEach(function(progressBar) {
        if (isInViewport(progressBar)) {
            progressBar.classList.add(animationClass);
        }
    });
}

window.addEventListener("scroll", function() {
    checkVisibility(".progress-bar", "fill-animation");
    checkVisibility(".progress-bar2", "fill-animation2");
    checkVisibility(".progress-bar3", "fill-animation3");
});

checkVisibility(".progress-bar", "fill-animation");
checkVisibility(".progress-bar2", "fill-animation2");
checkVisibility(".progress-bar3", "fill-animation3"); // Vérifier la visibilité au chargement de la page


// setInterval(function() {
//     const image1 = document.querySelector('.sliders');
//     const image2 = document.querySelector('.sliders1');
//     const image3 = document.querySelector('.sliders2');
//     const image4 = document.querySelector('.sliders3');
    
//     if (image1.classList.contains('block')) {
//         image1.classList.remove('block');
//         image1.classList.add('hidden'); 
//         image2.classList.remove('hidden');
//         image2.classList.add('block');

//         image3.classList.remove('block');
//         image3.classList.add('hidden');
//         image4.classList.remove('hidden');
//         image4.classList.add('block'); 
        
//     } else {
//         image1.classList.remove('hidden');
//         image1.classList.add('block');
//         image2.classList.remove('block');
//         image2.classList.add('hidden');
        
//         image3.classList.remove('hidden');
//         image3.classList.add('block');
//         image4.classList.remove('block');
//         image4.classList.add('hidden');
//     }
// }, 3000);
