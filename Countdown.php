<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer Countdown</title>
    <link rel="stylesheet" href="CC's.css">
</head>
<body>
     <header>
        <?php include 'CCs_menu.php'; ?>
        <h1>Coding Company Countdown</h1>
    </header>
    <main>
        <div>Time left:</div>
        <div id="countdown"></div>
        <div id="message"></div>
    </main>

    <?php
        $launchDate = strtotime('October 30, 2027');
        $formattedDate = date("c", $launchDate);
    ?>
    
    <script>
        let countdownTimer = new Date("<?php echo $formattedDate; ?>").getTime();
        let countdown = document.getElementById("countdown");

        //this code will run every second to have a "live" countdown
        let intervalid = setInterval(() => {
            //get the current time in milliseconds
        let currentTime = new Date().getTime();

        console.log("currentTime=" + currentTime);

        // get the difference in milliseconds between lauch date and current time
        // this number will be positive if the launch has not happened yet
        // if this number is negative, the launch has already happened
        let timeDiff = countdownTimer - currentTime;

        console.log("timeDiff=" + timeDiff);

        // define constants to make our time calculation formulas more readable
        const MS_IN_A_SECOND = 1000;
        const MS_IN_A_MINUTE =  MS_IN_A_SECOND * 60;
        const MS_IN_AN_HOUR =  MS_IN_A_MINUTE * 60;
        const MS_IN_A_DAY = MS_IN_AN_HOUR * 24;

        // Get the countdown in terms of days, hours, minutes, and seconds
        //calculate days remaining
        let days = Math.floor(timeDiff / MS_IN_A_DAY);
        //calculate hours remaining
        let hours = Math.floor((timeDiff % MS_IN_A_DAY) / MS_IN_AN_HOUR);
        //calculate minutes remaining
        let minutes = Math.floor((timeDiff % MS_IN_AN_HOUR) / MS_IN_A_MINUTE);
        //calculate seconds remaining
        let seconds = Math.floor((timeDiff % MS_IN_A_MINUTE) / MS_IN_A_SECOND);
        
        console.log("days=" + days);
        console.log("hours=" + hours);
        console.log("minutes=" + minutes);
        console.log("seconds=" + seconds);

        countdown.textContent = days + " days, " + hours + " hours, "
            + minutes + " minutes, " + seconds + " seconds";

            let descMessage = "";

            if(timeDiff <= 0) {
                descMessage = "Incoming!";
            }
            else if (days < 2){
                descMessage = "Head to the launch event!";
            }
            else if (days < 7){
                descMessage = "The launch is coming soon!";
            }
            else {
                descMessage = "The launch is more than a week away.";
            }
            document.getElementById("message").textContent = descMessage;
        }, 1000); // 1000 milliseconds = 1 second
    </script>
        
</body>
</html>