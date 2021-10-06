let h1 = document.querySelector("h1");

// Increase text size + rotate
setTimeout(function () {
    h1.style.fontSize = "120px";
    h1.style.backgroundColor = "white";
    h1.style.border = "3px dashed black";
    h1.style.padding = "15px";
    h1.style.position = "absolute"
    h1.style.top = "50%";
    h1.style.left = "50%";
    h1.style.transform = 'rotate(20deg)';
}, 0);
setTimeout(function () {
    h1.style.position = "relative";
    h1.style.border = "none";
    h1.style.top = "initial";
    h1.style.left = "initial";
    h1.style.backgroundColor = "white";
    h1.style.padding = "0";
    h1.style.transform = 'rotate(0deg)';
    h1.style.fontSize = "50px";
}, 1000);

let h2 = document.querySelectorAll("h2");

for (let i = 0; i < h2.length; i++) {
    setInterval(function () {
        h2[i].style.fontWeight = "bold"
        h2[i].style.textShadow = "3px 3px 4px #216ed3";
    }, 2000);

    setInterval(function () {
        h2[i].style.fontWeight = "normal"
        h2[i].style.textShadow = "0 0 0 white";
    }, 6000);
}

let h3 = document.querySelectorAll("h3");

for (let i = 0; i < h3.length; i++) {
    setInterval(function () {
        h3[i].style.textDecoration = "none"
        h3[i].style.opacity = "0.5";
        h3[i].style.backgroundColor = "black";
    }, 2000);

    setInterval(function () {
        h3[i].style.textDecoration = "underline"
        h3[i].style.opacity = "1";
        h3[i].style.backgroundColor = "transparent";
    }, 6000);
}

if (document.getElementById("details1") && document.getElementById("details2")) {
    nbClick("details1", "section1");
    nbClick("details2", "section2");
}

let figure  = document.querySelector("figure");
let figCaption  = document.querySelector("figcaption");
if (figure && figCaption) {
    // add a class
    figure.classList = "figure";
    figCaption.classList = "figCaption";
    document.getElementById("div1").classList = "card-container";
    document.getElementById("div2").classList = "card";
    document.getElementById("div3").classList = "card-front";
    document.getElementById("div4").classList = "card-back";
    let fig2 = document.querySelectorAll("figcaption");
    fig2[1].classList = "figcaption2";
}

// Ajax skill
let xhr2 = new XMLHttpRequest();
xhr2.open("GET", "/api/skill");
xhr2.responseType = "json";

xhr2.onload = function () {
    let response = xhr2.response;

    let createUl = document.createElement("ul");
    let first =  document.getElementById("first");
    first.prepend(createUl);

    for (let i = 0; i < response.length; i++) {
        let createLi = document.createElement("li");
        createLi.innerHTML = response[i]['skill'];
        createUl.append(createLi);
    }
}
xhr2.send();

// Ajax personal data
let xhr = new XMLHttpRequest();
xhr.open("GET", "/api/personaldata");
xhr.responseType = "json";

xhr.onload = function () {
    let response = xhr.response;

    let createDl = document.createElement("dl");
    let second =  document.getElementById("second");
    second.prepend(createDl);

    for (let i = 0; i < response.length; i++) {
        let createDt = document.createElement("dt");
        createDt.innerHTML = response[i]['title'] + " :";
        createDl.append(createDt);
        let createDd = document.createElement("dd");
        createDd.innerHTML = response[i]['information'];
        createDl.append(createDd);
        if (createDd.innerHTML === response[3]['information']) {
            let createA = document.createElement("a");
            createA.href = "https://github.com/ChloeArd";
            createA.innerHTML = response[3]['information'];
            let dd = document.querySelectorAll("dd");
            dd[3].innerHTML = "";
            dd[3].append(createA);
        }
    }
}
xhr.send();

// Ajax section1
let xhr3 = new XMLHttpRequest();
xhr3.open("GET", "/api/section1");
xhr3.responseType = "json";

xhr3.onload = function () {
    let response = xhr3.response;

    for (let i = 0; i < response.length; i++) {
        document.getElementById("image1").src = response[0]['image'];
        document.getElementById("name").innerHTML = response[0]['name'];
        document.getElementById("text").innerHTML = response[0]['text'];
        document.getElementById("personal").innerHTML = response[0]['title1'];
        document.getElementById("languages").innerHTML = response[0]['title2'];
        document.getElementById("skill").innerHTML = response[0]["title3"];
    }
}
xhr3.send();

// Ajax Section2
let xhr4 = new XMLHttpRequest();
xhr4.open("GET", "/api/section2");
xhr4.responseType = "json";

xhr4.onload = function () {
    let response = xhr4.response;

    for (let i = 0; i < response.length; i++) {
        document.getElementById("name2").innerHTML = response[0]['name'];
        document.getElementById("profile").innerHTML = response[0]['profile'];
        document.getElementById("title4").innerHTML = response[0]['title1'];
        document.getElementById("title5").innerHTML = response[0]['title2'];
        document.getElementById("title6").innerHTML = response[0]['title3'];
    }
}
xhr4.send();

// Ajax Formations
let xhr5 = new XMLHttpRequest();
xhr5.open("GET", "/api/formation");
xhr5.responseType = "json";

xhr5.onload = function () {
    let response = xhr5.response;

    let createUl = document.createElement("ul");
    let formation =  document.getElementById("formation");
    formation.prepend(createUl);

    for (let i = 0; i < response.length; i++) {
        let createLi = document.createElement("li");
        createLi.innerHTML = response[i]['endDate'] + "<br>" + response[i]['formation'];
        createUl.prepend(createLi);
    }
}
xhr5.send();

// Ajax Experiences
let xhr6 = new XMLHttpRequest();
xhr6.open("GET", "/api/experience");
xhr6.responseType = "json";

xhr6.onload = function () {
    let response = xhr6.response;

    if (response.length === 0) {
        document.getElementById("aside").innerHTML = "Aucune expériences pour l'instant.";
    }
    else {
        let createUl = document.createElement("ul");
        let aside =  document.getElementById("aside");
        aside.prepend(createUl);

        for (let i = 0; i < response.length; i++) {
            let createLi = document.createElement("li");
            createLi.innerHTML = response[i]['startDate'] + " - " + response[i]['endDate'] + "<br>" + response[i]['experience'];
            createUl.append(createLi);
        }
    }
}
xhr6.send();

// Ajax Languages
let xhr7 = new XMLHttpRequest();
xhr7.open("GET", "/api/language");
xhr7.responseType = "json";

xhr7.onload = function () {
    let response = xhr7.response;
    console.log(response);
    for (let i = 0; i < response.length; i++) {
        document.querySelectorAll("th")[i].innerHTML = response[i]['language'];
        document.querySelectorAll("td")[i].innerHTML = response[i]['pourcentage'];
    }
}
xhr7.send();


let span = document.querySelectorAll("span");
if (span) {
    // each letter changes color and font style when hovering the mouse over a label
    let color = ['blue', 'red', 'yellow', 'orange', 'green', 'black', 'brown', 'gray', 'brown', 'blueviolet', 'coral', 'pink'];
    let font = ['bold', 'normal'];

    document.getElementById("label1").addEventListener("mouseover",letterColorAndFont);
    document.getElementById("label2").addEventListener("mouseover",letterColorAndFont);
    document.getElementById("label3").addEventListener("mouseover",letterColorAndFont);
    document.getElementById("label4").addEventListener("mouseover",letterColorAndFont);

    function letterColorAndFont () {
        let time = 500;
        for (let x = 0; x < span.length; x++) {
            setTimeout(function () {
                let randomColor = color[Math.floor(Math.random() * color.length)];
                let randomFont = font[Math.floor(Math.random() * font.length)];
                span[x].style.color = randomColor;
                span[x].style.fontWeight = randomFont;
                span[x].style.fontStyle = "italic";
                span[x].style.fontSize = "25px";
            }, time);
            time = time + 500;
        }
    }
}

function nbClick(id1, id2) {
    let click = 0;
    document.getElementById(id1).addEventListener("click", function () {
        if (click === 0) {
            document.getElementById(id2).style.display = "none";
            click++;
        }
        else {
            document.getElementById(id2).style.display = "flex";
            click = 0;
        }
    });
}