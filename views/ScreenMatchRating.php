<!DOCTYPE html>
<html>
<head>
    <title>ScreenMatch</title>
    <style>
        body {background-color: wheat;}
        h1 {
            font-family:system-ui;
            color: darkslategray
        }
        h2 {
            font-family: 'Helvetica';
            color: darkslategray
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
    <div>
        <h1>Welcome to ScreenMatch Reviews, the hub for film ratings</h1>
        <h2>What would you like to do today?</h2>
    </div>
    <div>
        <button type="button" onclick="window.location.href='/MovieRating/addMovieRating'">Leave a rating</button>
    </div>
    <div>
        <button type="button" onclick="window.location.href='/MovieRating/readMovieRatingAvg'">Search for a specific movie</button>
    </div>
    <div>
        <button type="button" onclick="window.location.href='/MovieRating/removeMovieRating'">Delete a movie rating</button>
    </div>
    <div>
        <button type="button" onclick="window.location.href='/Movie'">Back to Main Menu</button>
    </div>
</body>
</html>
