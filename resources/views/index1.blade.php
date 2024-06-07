<!DOCTYPE html>
<html lang="en">
<head>
  <title>{{$title}}</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
</head>
<body>

<div class="container">
  <h2>Customar list</h2>
  <p>Customer details:</p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Serial No</th>
        <th>Name</th>
        <th>cell</th>
        <th>Actiion</th>
      </tr>
    </thead>
    <tbody>
      <?php $serial_No=1;?>
      @foreach($users as $user)
      <tr>
        <td>{{$serial_No++}}</td>
        <td>{{$user->full_name}}</td>
        <td>john@example.com</td>
        <td><a href="">Edit</a>   <a href="">Delete</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
