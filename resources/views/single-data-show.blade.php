<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Show</title>
</head>
<body>
    <table border="1" width="90%">
        <thead>
        <tr>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
            <th>6</th>

        </tr>
        </thead>
        <tbody>
            
            <tr>
                <td>{{$mailConfig->Driver}}</td>
                <td>{{$mailConfig->Host}}</td>
                <td>{{$mailConfig->Port}}</td>
                <td>{{$mailConfig->Username}}</td>
                <td>{{$mailConfig->Password}}</td>
                <td>{{$mailConfig->Encryption}}</td>



             
            
                    </tr>
          
        </tbody>
    </table>
    
</body>
</html>