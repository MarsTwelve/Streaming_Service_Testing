<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register a Movie</title>
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
        input[type="year"]{
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
<h1>ScreenMatch Film Register</h1>
<form action="/Movie/Register" method="post">
    <fieldset>
        <label for="name">Title:
            <input type="text" name="title" id="title" required>
        </label>
    </fieldset>

    <fieldset>
        <label for="name">Launch Year:
            <input type="year" name="year" id="year" required>
        </label>
    </fieldset>

    <fieldset>
        <label for="genre">Film Genre:
            <select name="genre" id="genre">
                <option value="Science-Fiction">Science-Fiction</option>
                <option value="Comedy">Comedy</option>
                <option value="Action">Action</option>
            </select>
        </label>
    </fieldset>

    <fieldset>
        <label for="premiumPlan">Included on Premium:
            <select name="premiumPlan" id="premiumPlan">
                <option value="included">Included</option>
                <option value="not_included">Not Included</option>
            </select>
        </label>
    </fieldset>

    <input type="submit" value="Send!">
</form>
    <div>
        <button type="button" onclick="window.location.href='/Movie'">Back to Main Menu</button>
    </div>
</body>
</html>
