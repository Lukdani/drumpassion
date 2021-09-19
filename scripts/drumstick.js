let isDrawn = false;
let degrees = 45;
let currentDegrees = degrees;
let numberOfHits = 0;

const playSound = (delay, sound) => {
    var audio = new Audio(`./sounds/${sound}.mp3`);
setTimeout(() => {
    audio.play();
}, delay);
}

const drawnStick = (elementId) => {
    const element = document.getElementById(elementId);


    removeSpinStyle(element);
    var randomNumber = Math.random() * 6;
    console.log(randomNumber);
    if (!isDrawn) {
  
        if (randomNumber < 3) {
            element.classList.remove("drawnStick-2");
            element.classList.remove("drawnStick-3");
            element.classList.toggle("drawnStick-1");
            playSound(100, "tromme")
        }
        else if (randomNumber < 4) {
            element.classList.remove("drawnStick-1");
            element.classList.remove("drawnStick-3");
            element.classList.toggle("drawnStick-2");
            playSound(50, "tromme")
        }
        else if (randomNumber < 5) {
            element.classList.remove("drawnStick-1");
            element.classList.remove("drawnStick-2");
            element.classList.toggle("drawnStick-3");
            playSound(25, "tromme")
        }
        else {
            document.getElementById('spinLeft').disabled = true;
            document.getElementById('spinRight').disabled = true;
            playSound(0, "magic")
            element.style.visibility = "hidden";
            setTimeout(() => {
                element.style.visibility = "";  
                document.getElementById('spinLeft').disabled = false;
                document.getElementById('spinRight').disabled = false;}, 900);
            removeDrawnClass(element)
            return;
        }
        element.style.transform = `rotate(${degrees + 60}deg)`;
        numberOfHits ++;
        isDrawn = !isDrawn;
    }
    else if (isDrawn) {
        playSound(0, "pull")
        removeDrawnClass(element);
        return;
    }
    element.classList.toggle("drawnStick");
    // element.style.transition = `all ease-in ${Math.random() * 5}`;
}

const removeDrawnClass = (element) => {
    if (isDrawn) element.style.transform = `rotate(${degrees}deg)`;
    isDrawn = false;
    element.classList.remove("drawnStick");
    element.classList.remove("drawnStick-1");
    element.classList.remove("drawnStick-2");
    element.classList.remove("drawnStick-3");
}

const showTooltip = (show) => {
    const element = document.getElementById("tooltip");
    try {
        const hitPhrases = ["Hit me, baby!", `Hit me a ${(numberOfHits > 1 ? `${numberOfHits +1}th time!` : (numberOfHits < 1 ? 'first time!' : 'second time!'))}`, "Just DO IT!"]

        const randomIndex = Math.floor(Math.random() * hitPhrases.length);
        element.innerHTML = !isDrawn ? hitPhrases[randomIndex] : "Pull me back up, plz 🙏";
        element.style.opacity = show ? "1" : "0";
        if (show) {
            var randomNumber = Math.random() * 2;
            element.style.left =  `${randomNumber > 1 ? "15" : "75"}%`
            randomNumber = Math.random() * 2;
            element.style.top =  `${randomNumber > 1 ? "50" : "75"}%`
            element.style.color =  `#${randomNumber > 1 ? "E55381" : "376996"}`
        }
    }
    catch {}
}

const spinStick = (element, direction) => {
    removeDrawnClass(element);
    const rotationDegrees = 360;
    degrees = direction == "Clockwise" ? degrees + rotationDegrees : degrees - rotationDegrees;
    element.style.transform = `rotate(${degrees}deg)`; 
    lastDirection = direction;
    playSound(0, "spin")
}

const removeSpinStyle = (element) => {
    element.style.transform = "";
}

const initiateEventListener = (elementId) => {
    const element = document.getElementById(elementId);
    if (element != null) {
        element.addEventListener("click", () => drawnStick(elementId));
        element.addEventListener("mouseenter", () => showTooltip(true) )
        element.addEventListener("mouseleave", () => showTooltip(false) )
    }
}

const initiateSpinClockwiseListener = (elementId, targetElementId, direction) => {
    const element = document.getElementById(elementId);
    const targetElement = document.getElementById(targetElementId);
    if (element != null && targetElement != null) {
        try {
        element.addEventListener("click", () => spinStick(targetElement, "Clockwise", "CounterClockwise"));
    }
    catch {}
    }
}

const initiateSpinCounterClockwiseListener = (elementId, targetElementId, direction) => {
    const element = document.getElementById(elementId);
    const targetElement = document.getElementById(targetElementId);
    if (element != null && targetElement != null) {
        try {
        element.addEventListener("click", () => spinStick(targetElement, "CounterClockwise", "CounterClockwise"));
    }
    catch {}
    }
}