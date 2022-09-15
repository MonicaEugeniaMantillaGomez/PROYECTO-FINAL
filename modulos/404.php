<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>404 comfenalcocursos</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
    <link rel="shortcut icon" href="https://comfenalcocursos.000webhostapp.com/folder.gif" type="image/gif">
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      html,
      body {
        background: #fff;
      }

      .site-logo {
        position: fixed;
        left: 50%;
        transform: translateX(-50%);
        font-family: "Grifinito L";
        font-size: 2em;
        text-transform: uppercase;
        line-height: 100px;
      }

      .navbar {
        position: fixed;
        width: 100%;
        height: 100px;
        padding: 0 40px;
        display: flex;
        justify-content: space-between;
        font-family: "Space Grotesk";
        line-height: 100px;
      }

      .site-menu {
        display: flex;
        font-size: 1em;
      }

      .menu-item {
        margin-left: 60px;
      }

      @media (max-width: 900px) {
        .navbar {
          display: none;
        }
      }

      .header-container {
        position: absolute;
        width: 100%;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .header>span {
        font-family: "Maelstrom Sans";
        font-size: 40vw;
        position: relative;
      }

      .footer {
        position: fixed;
        bottom: 5em;
        width: 100%;
        display: flex;
        justify-content: center;
      }

      .footer span {
        position: relative;
        top: 30px;
        text-decoration: none;
        font-family: "Space Grotesk", Helvetica, sans-serif;
        font-weight: 400;
        font-size: 1.4em;
        transition: 1s;
      }

      .footer span a {
        text-decoration: none;
        color: #000;
      }

      .footer-wrapper:after {
        content: "";
        position: absolute;
        top: 30px;
        left: 0;
        width: 110%;
        height: 100%;
        background: #fff;
        margin: 0 auto;
        transition: 1s;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="site-logo">Miguel Angel Castro Escamilla</div>
      <div class="navbar">
        <div class="site-info">Comfenalco - 000webhost</div>
      </div>

      <div class="header-container">
        <div class="header">
          <span>4</span>
          <span>0</span>
          <span>4</span>
        </div>
      </div>
      <div class="footer">
        <span><a id="host" href="">Volver</a></span>
        <div class="footer-wrapper"></div>
      </div>
    </div>

    <script>
      let URLdomain = location.origin;
      document.querySelector("#host").href = URLdomain;
      
      gsap.from(".navbar > div", 1.6, {
        opacity: 0,
        y: 60,
        ease: Expo.easeInOut,
        delay: 2.4,
      });
      gsap.from(".site-logo", 1.6, {
        opacity: 0,
        y: 40,
        ease: Expo.easeInOut,
        delay: 2.4,
      });
      gsap.from(".header > span", 1.5, {
        top: "-100vh",
        ease: "bounce.out",
        delay: 1,
        stagger: 0.2,
      });
      gsap.to(".footer span", 0.4, {
        y: -40,
        ease: Expo.easeInOut,
        delay: 2.4,
      });
    </script>
  </body>
</html>