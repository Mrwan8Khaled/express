let trainSlideIndex = 0;
let busSlideIndex = 0;

showTrainSlides();
showBusSlides();

function showTrainSlides() {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    trainSlideIndex++;
    if (trainSlideIndex > slides.length) { trainSlideIndex = 1 }
    slides[trainSlideIndex - 1].style.display = "block";
    setTimeout(showTrainSlides, 2000); // Change image every 2 seconds
}

function showBusSlides() {
    let i;
    let slides = document.getElementsByClassName("BusSlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    busSlideIndex++;
    if (busSlideIndex > slides.length) { busSlideIndex = 1 }
    slides[busSlideIndex - 1].style.display = "block";
    setTimeout(showBusSlides, 2000); // Change image every 2 seconds
}
