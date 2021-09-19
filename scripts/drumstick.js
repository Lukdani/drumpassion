let isDrawn = false;
let degrees = 45;
let currentDegrees = degrees;

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
        }
        else if (randomNumber < 4) {
            element.classList.remove("drawnStick-1");
            element.classList.remove("drawnStick-3");
            element.classList.toggle("drawnStick-2");
        }
        else if (randomNumber < 5) {
            element.classList.remove("drawnStick-1");
            element.classList.remove("drawnStick-2");
            element.classList.toggle("drawnStick-3");
        }
        else {
            element.style.visibility = "hidden";
            setTimeout(() => {element.style.visibility = ""}, 900);
            removeDrawnClass(element)
            return;
        }
        element.style.transform = `rotate(${degrees + 60}deg)`;
        isDrawn = !isDrawn;
    }
    else if (isDrawn) {
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