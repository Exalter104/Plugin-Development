<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Stopwatch</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }

        .timer {
            font-size: 40px;
            margin: 20px;
        }

        button {
            font-size: 20px;
            padding: 10px;
            margin: 5px;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <h1>Simple Stopwatch</h1>
    <div class="timer" id="display">0.0</div>
    <button onclick="startTimer()">Start</button>
    <button onclick="stopTimer()">Stop</button>
    <button onclick="resetTimer()">Reset</button>

    <script>
        let timer; // Variable to store the timer
        let time = 0; // Time counter
        let running = false; // To check if timer is running

        function startTimer() {
            if (!running) {
                running = true;
                timer = setInterval(() => {
                    time += 0.1;
                    document.getElementById("display").innerText = time.toFixed(1);
                }, 100);
            }
        }

        function stopTimer() {
            running = false;
            clearInterval(timer);
        }

        function resetTimer() {
            running = false;
            clearInterval(timer);
            time = 0;
            document.getElementById("display").innerText = "0.0";
        }
    </script>

</body>

</html>