<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            background-color: lightgreen;
            width: 800px;
            margin: auto;
        }

        fieldset {
            width: 400px;
            margin: auto;
        }
    </style>
    <script src="sh1.js"></script>
    <script src="sh2.js"></script>
</head>
<body>

<fieldset>
    <legend>Country</legend>
    <p><b>Start typing a country in the input field below:</b></p>
    <form>
       First name: <input type="text" onkeyup="showHint1(this.value)">
    </form>
    <p>Suggestions: <span id="txtHint1"></span></p>
    </fieldset>

    <fieldset>
    <legend>Name</legend>
    <p><b>Start typing a name in the input field below:</b></p>
    <form>
        First name: <input type="text" onkeyup="showHint2(this.value)">
    </form>
    <p>Suggestions: <span id="txtHint2"></span></p>
</fieldset>

</body>
</html>
