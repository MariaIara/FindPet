<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PushPHP - 404</title>
  <link rel="stylesheet" href="<?= base_url('public/assets/styles/home.css') ?>">
  <link rel="icon" href="<?= base_url('public/assets/images/otter-favicon.ico') ?>" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato&family=Montserrat:ital,wght@0,700;1,700&family=Open+Sans:ital,wght@0,500;1,500&display=swap" rel="stylesheet">
</head>

<style>
  * {
    font-family: sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    background-color: #050909;
    height: 100vh;
    overflow: hidden;
    position: relative;
  }

  .lato {
    font-family: "Lato", sans-serif;
    font-weight: 400;
    font-style: normal;
  }

  .open-sans {
    font-family: "Open Sans", sans-serif;
    font-weight: 500;
    font-style: normal;
  }

  .montserrat {
    font-family: "Montserrat", sans-serif;
    font-weight: 700;
    font-style: normal;
  }

  h1 {
    font-size: 4.5rem;
    background-image: linear-gradient(120deg, #a5cbc4, #8172ad);
    background-clip: text;
    -webkit-background-clip: text;
    color: transparent;
  }

  h3 {
    margin-bottom: 16px;
  }

  p {
    margin-top: 8px;
    font-size: 24px;
    color: #e6f1ef;
  }

  a {
    margin-top: 32px;
    font-size: 18px;
    color: #e6f1ef;
  }

  .container {
    max-width: 1280px;
    margin-left: auto;
    margin-right: auto;
    padding-left: 32px;
    padding-right: 32px;
  }

  .hero {
    height: 95vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    position: relative;
  }

  .hero h1,
  .hero p,
  .hero a {
    transform: translateY(-100px);
    opacity: 0;
    animation: diveIn .5s ease-out forwards;
  }

  @keyframes diveIn {
    0% {
      transform: translateY(-24px);
      opacity: 0;
    }

    100% {
      transform: translateY(0);
      opacity: 1;
    }
  }

  .hero h1 {
    animation-delay: 0.2s;
  }

  .hero p {
    animation-delay: 0.4s;
  }

  .hero a {
    animation-delay: 0.6s;
  }

  .light {
    position: absolute;
    width: 800px;
    height: 800px;
    background: rgba(57, 62, 99, 0.2);
    border-radius: 50%;
    pointer-events: none;
    filter: blur(150px);
    z-index: -100;
    transition: transform 3s ease-out;
    animation: pulse 10s infinite ease-in-out;
  }

  @keyframes pulse {

    0%,
    100% {
      opacity: 0.2;
    }

    50% {
      opacity: 0.6;
    }
  }
</style>

<body>
  <div class="light"></div>
  <main class="container hero">
    <h1 class="montserrat"><?= $title ?></h1>
    <p class="open-sans"><?= $paragraph ?></p>
    <a class="open-sans" href="/">Navigate to Home Page</a>
  </main>

  <script>
    const light = document.querySelector('.light');

    document.addEventListener('mousemove', (e) => {
      light.style.transform = `translate(${e.clientX - 400}px, ${e.clientY - 400}px)`;
    });
  </script>
</body>

</html>