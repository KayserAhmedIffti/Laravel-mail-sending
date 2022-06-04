<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>From Shakib bhai task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <p>The Task1</p>
    <form>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"> Name</label>
            <input type="email" class="form-control" name="adminEmail" id="exampleInputEmail1" aria-describedby="emailHelp">
            
          </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label"> Email</label>
          <input type="email" class="form-control" name="adminEmail" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label"> Password</label>
          <input type="password" class="form-control" name="adminPassword" id="exampleInputPassword1">
        </div>
     
        <button type="submit" class="btn btn-primary">Signin</button>
      </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>