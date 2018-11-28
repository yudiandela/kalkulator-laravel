<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kalkulator Sederhana</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <style>
    .clear
    {
        clear:both;
    }

    button
    {
        padding:5px 10px 5px 10px;
        margin:5px;
    }

    button.zeroButton
    {
        width:78px;
    }

    .spacer
    {
        margin-left:46px;
    }

    </style>

</head>
<body>
    <div class="calculator container py-5">
        <div class="row justify-content-center">
            <h2>Calculator</h2>
        </div>
        <div class="row justify-content-center">
            <div class="outputBox" contenteditable></div>
            <div class="buttonContainer">
            <div class="row">
                <div class="col-xs-2">
                    <button class="numberButton" type="button">7</button>
                    <button>8</button>
                    <button>9</button>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-2">
                    <button>4</button>
                    <button>5</button>
                    <button>6</button>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-2">
                    <button>1</button>
                    <button>2</button>
                    <button>3</button>
                </div>
            </div>
                <div class="row">
                    <div class="col-xs-2">
                        <button class="zeroButton">0</button>
                        <button>=</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>