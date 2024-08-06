<!DOCTYPE html>
<html>
<head>
    <title>Search Movie</title>
    <style>
        body {background-color: wheat;}
        h2 {
            font-family: 'Helvetica';
            color: darkslategray
        }
        input[type="text"]{
            width: 36%;
            padding: 5px;
            border: 1px solid whitesmoke;
            border-radius: 3px;
            box-sizing: border-box;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.8);
        }
        input[type="submit"]{
            font-family: 'Courier New', Courier, monospace;
            width: 100px;
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
    <h2>Please, Type the movie you want to search</h2>
    <form action="/Movie/Search" method="get">
        <input type="text" name="movie_title">
        <input type="submit" value="Send!">
    </form>
    <div>
        <button type="button" onclick="window.location.href='/Movie'">Back to menu</button>
    </div>
</body>
</html>