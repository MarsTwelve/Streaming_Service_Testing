<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{background-color: wheat;}
        h1 {
            font-family:system-ui;
            color: darkslategray
        }
        form {
            width: 450px;
            padding: 10px;
            border: 1px solid darkslategrey;
            border-radius: 5px;
        }
        label {
            display: flex;
            align-items: center;
            gap: 15px;
            font-family: 'Courier New', Courier, monospace;
            color: darkslategrey;
            font-size: 18px;
            margin-bottom: 5px;  
        }
        input[type="text"]{
            width: 100%;
            padding: 5px;
            border: 1px solid whitesmoke;
            border-radius: 3px;
            box-sizing: border-box;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.8);
        }
        input[type="number"]{
        width: 65%;
        padding: 5px;
        border: 1px solid whitesmoke;
        border-radius: 3px;
        box-sizing: border-box;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.8);
        }
        input[type="submit"]{
            font-family: 'Courier New', Courier, monospace;
            width: 100%;
            background-color: wheat;
            text-decoration: none;
            color: darkslategray;
            padding: 12px 20px;
            text-align: center;
            display: inline-block;
            font-size: 18px;
            margin: 8px 2px;
            cursor: pointer;  
            border: 2px solid darkslategrey;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.8);
        }
        select {
            appearance: none;
            font-family: 'Courier New', Courier, monospace;
            -webkit-appearance: none;
            -moz-appearance: none;
            background-color: wheat;
            color: black;
            border: 1px solid slategrey;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.4);
            padding: 5px;
            border-radius: 2px;
        }
        button {
            font-family: 'Courier New', Courier, monospace;
            background-color: wheat;
            text-decoration: none;
            color: darkslategray;
            padding: 12px 20px;
            text-align: center;
            display: inline-block;
            font-size: 18px;
            margin: 8px 2px;
            cursor: pointer;  
            border: 2px solid darkslategrey;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.8);
        }
    </style>
</head>
<body>
<h1>ScreenMatch Movie Scores</h1>
<form action="/MovieRating/addMovieRating" method="post">
    <fieldset>
        <label for="name">Title:
            <input type="text" name="title" id="title" required>
        </label>
    </fieldset>

    <fieldset>
        <label for="name">Your Score:
            <input type="number" name="score" id="score" required step="0.1">
        </label>
    </fieldset>
    <input type="submit" value="Send Score!">
</form>
    <div>
        <button type="button" onclick="window.location.href='/MovieRating'">Back to menu</button>
    </div>
</body>
</html>
