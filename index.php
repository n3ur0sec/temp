<!DOCTYPE html>
<html lang="en">
<head>
    <link href='https://fonts.googleapis.com/css?family=Spectral|Chakra+Petch' rel='stylesheet' type='text/css'>
    <style>
        body { 
            background-color: black; 
            margin: 0;
            padding: 0;
            overflow: hidden;
            font-family: 'Chakra Petch', sans-serif;
            color: #fff;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: flex-start;
        }

        .container {
            text-align: center;
            margin-top: 5vh;
        }

        /* Futuristic gradient text with shadows */
        .title {
            font-family: 'Spectral', serif;
            font-weight: bold;
            font-size: 3rem;
            background: linear-gradient(90deg, #45caff, #ff1b6b);
            -webkit-background-clip: text;
            color: transparent;
            letter-spacing: 0.1em;
        }

        .subtitle {
            font-family: 'Chakra Petch', sans-serif;
            font-weight: bold;
            font-size: 1.8rem;
            color: #fff;
            background: linear-gradient(90deg, #45caff, #ff1b6b);
            -webkit-background-clip: text;
            color: transparent;
            letter-spacing: 0.04em;
        }

        img {
            margin-top: 2rem;
        }

        /* Starry background */
        .star {
            position: absolute;
            border-radius: 50%;
            background: #fff;
            opacity: 0.8;
            animation: moveStars linear infinite;
            z-index: 0;
        }

        @keyframes moveStars {
            from { transform: translateY(0); }
            to { transform: translateY(100vh); }
        }
    </style>

    <style>
      .no-link {
        text-decoration: none;
        color: inherit;
        cursor: pointer;
      }
    </style>
</head>
<body>
    <div class="container">
        <img src="https://miro.medium.com/v2/resize:fit:3554/format:webp/1*WLyLbVSNBr-booXKl8yWQQ.jpeg" width="500" height="250">
        <br><br><br>
        <div class="title">Pwned by neur0</div>
        <div class="subtitle">Turkish hackers were here</div>
        <div class="subtitle"><a href="https://t.me/neur0sec" class="no-link">Telegram: @neur0sec</a></div>
        <div class="subtitle">Cyber security ain't a joke, so better patch your security up!</div>
        <br><br><br>
        <img src="https://i.imgur.com/xDcB3YN.png" width="180" height="60" style="object-fit: scale-down; max-width: 100%" alt="Footer Image"/>
    </div>

    <div style="display: none;">
        <audio autoplay="true" loop src="https://ia800102.us.archive.org/29/items/memory-reboot/Memory%20Reboot.mp3"></audio>
    </div>

    <script>
        const numStars = 200;
        const starsContainer = document.body;

        for (let i = 0; i < numStars; i++) {
            const star = document.createElement('div');
            star.classList.add('star');
            star.style.width = `${Math.random() * 3}px`;
            star.style.height = star.style.width;
            star.style.top = `${Math.random() * 100}vh`;
            star.style.left = `${Math.random() * 100}vw`;
            star.style.opacity = Math.random();
            star.style.animationDuration = `${Math.random() * 5 + 5}s`;
            star.style.animationDelay = `${Math.random() * 10}s`;
            starsContainer.appendChild(star);
        }
    </script>
</body>
</html>
