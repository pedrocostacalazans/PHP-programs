<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
    <style>
        .ciano{
            background-color: cyan;
        }

        .cinza{
            background-color: gray;
        }

        #container{
            width: 400px;
            margin: 0 auto;
        }
        ul li{
            list-style: none;
            text-align: center;
            font-family: Consolas;
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div id="container">
        <ul>
            <?php
                for ($i = 0; $i < 10; $i++) {
                    if (!($i % 2)) {
                        echo '<li class="ciano">'.$i.'</li>';
                    } else {
                        echo '<li class="cinza">'.$i.'</li>';
                    }
                }
            ?>
        </ul>
    </div>

</body>
</html>