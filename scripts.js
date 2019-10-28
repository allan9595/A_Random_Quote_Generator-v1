
function setRandomBackgroundColor(){
    let randomRGBOne = Math.floor(Math.random() * Math.floor(255));
    let randomRGBTwo = Math.floor(Math.random() * Math.floor(255));
    let randomRGBThree = Math.floor(Math.random() * Math.floor(255));
    let color = `rgb(${randomRGBOne}, ${randomRGBTwo}, ${randomRGBThree})`;
    document.body.style.background = color;
}

setInterval(function() {
    location.reload(true);
    setRandomBackgroundColor();
},4000);


