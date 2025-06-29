<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gus Javar Disko</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: radial-gradient(circle, #1a1a1d, #000);
            color: white;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        h1 {
            font-size: 28px;
            text-align: center;
            text-transform: uppercase;
            animation: fadeIn 1.2s ease-out;
        }

        .blink {
            color: #ff00ff;
            animation: blink 0.7s infinite alternate;
        }

        @keyframes blink {
            0% {
                color: #ff00ff;
                text-shadow: 0 0 10px #ff00ff;
            }
            100% {
                color: #00ffff;
                text-shadow: 0 0 10px #00ffff;
            }
        }

        img {
            width: 80%;
            max-width: 600px;
            border-radius: 20px;
            margin-top: 20px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.8);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .jedag-jedug {
            animation: jedagJedug 0.5s infinite alternate;
        }

        @keyframes jedagJedug {
            0% {
                transform: scale(1);
                box-shadow: 0 0 20px #ff00ff;
            }
            50% {
                transform: scale(1.1);
                box-shadow: 0 0 40px #00ffff;
            }
            100% {
                transform: scale(1);
                box-shadow: 0 0 20px #ff00ff;
            }
        }

        button {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 18px;
            color: white;
            background: #ff00ff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.2s;
        }

        button:hover {
            background: #00ffff;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><span class="blink">ROBINSON UNDERSTAND OF AMERICA OR GOLDEN GUS JAVAR SAMBI CILIK GAYAM GUNDANG WETAN PASURUAN EAST JAVA INDONESIA</span></h1>
        <img id="photo" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSrf8Zyn71ULigemeIYoepT-viiIKtMfI6NZw&s    ">
        <button onclick="toggleJedagJedug()">Jedag Jedug</button>
    </div>

    <script>
        let isJedagJedug = false;

        function toggleJedagJedug() {
            const photo = document.getElementById('photo');
            isJedagJedug = !isJedagJedug;
            if (isJedagJedug) {
                photo.classList.add('jedag-jedug');
            } else {
                photo.classList.remove('jedag-jedug');
            }
        }
    </script>
</body>
</html>
