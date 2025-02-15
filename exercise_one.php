<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #5bad49, #faff6b, #c9993a, #d04646);
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
            margin: 0;
        }
        .container {
            max-width: 700px;
            background: white;
            padding: 20px;
            margin: 50px auto;
            border-radius: 20px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #05417a;
        }
        p {
            font-size: 18px;
            line-height: 1.6;
        }
        .weather-box {
            background: #f4f4f4;
            margin-top: 10px;
            padding: 10px;
            border-left: 5px solid #333;
            border-radius: 5px;
            font-style: italic;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>WEATHER REPORT</h1>

        <?php
        $weather_conditions = array("rain", "sunshine", "clouds", "hail", "sleet", "snow", "wind");

        echo "<div class='weather-box'><p>We've seen all kinds of weather this month. 
                At the beginning of the month, we had <b>" . 
             $weather_conditions[5] . "</b> and <b>" . $weather_conditions[6] . "</b>. Then came <b>" . 
             $weather_conditions[1] . "</b> with a few <b>" . $weather_conditions[2] . "</b> and some <b>" . 
             $weather_conditions[0] . "</b>. At least we didn't get any <b>" . 
             $weather_conditions[3] . "</b> or <b>" . $weather_conditions[4] . "</b>.</p></div>";
        ?>
    </div>
</body>
</html>