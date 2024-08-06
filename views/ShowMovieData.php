<!DOCTYPE html>
<html>
<head>
    <title>ScreenMatch Search Results</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            border: 2px solid darkslategray;
        }

        th, td {
            font-family: 'Courier New', Courier, monospace;
            border: 1px solid darkslategray;
            color: darkslategrey;
            padding: 6px;
            text-align: center;
        }

        th {
            font-size: 18px;
        }
    </style>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Launch Year</th>
                <th>Premium Plan</th>
                <th>Genre</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td><?php echo $title; ?></td>
                    <td><?php echo $launch_year;?></td>
                    <td><?php echo $premium_plan;?></td>
                    <td><?php echo $genre;?></td>
                </tr>
        </tbody>
    </table>  
</body>
</html>
