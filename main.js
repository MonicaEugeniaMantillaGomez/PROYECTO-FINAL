let traerDatos = async(file)=>{
    let config = {
        method: "POST", 
        body: JSON.stringify({file: file})
    }
    let petecion = await fetch("api.php", config);
    let datos = await petecion.text();
    return datos;
}

addEventListener("DOMContentLoaded", async(e)=>{
    document.querySelector(".menu").insertAdjacentHTML("beforeend", await traerDatos("menu"));
    document.querySelector(".logo").insertAdjacentHTML("beforeend", await traerDatos("icono"));
    document.querySelector(".home-content").insertAdjacentHTML("beforeend", await traerDatos("inicio"));
    var typed = new Typed(".typing", {
        strings: JSON.parse(document.querySelector(".typing").dataset.lista),
        typeSpeed: 100,
        backSpeed: 60,
        loop: true
    });
    document.querySelector(".about-content").insertAdjacentHTML("beforebegin", await traerDatos("abouttitulo"));
    document.querySelector(".about-content").insertAdjacentHTML("beforeend", await traerDatos("about"));
    var typed = new Typed(".typing-2", {
        strings: JSON.parse(document.querySelector(".typing-2").dataset.lista),
        typeSpeed: 100,
        backSpeed: 60,
        loop: true
    });

    document.querySelector(".max-widthservices").insertAdjacentHTML("beforeend", await traerDatos("services"));

})