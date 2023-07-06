<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>DASHBOARD</title>
  </head>
  <body>
    <h1>DASHBOARD</h1>
    <a href="/create" button type="button" name="submit" class="btn btn-success">Add User</a>
    <script>
      function confirmDelete() {
          if (confirm("Ingin hapus user?")) {
            return true;
          } else {
            return false;
          }
        }
      </script>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Action</th>
     </tr>
  </thead>
  <tbody>
    <?php
   foreach ($data as $row) {
    echo '<tr>';
    echo '<th scope="row">' . $row['id'] . '</th>';
    echo '<td>' . $row['username'] . '</td>';
    echo '<td>' . $row['email'] . '</td>';
    echo '<td>' . $row['password'] . '</td>';
    echo '<td>';
    echo '<a href="/update/' . $row['id'] . '" class="btn btn-primary">Update</a>';
    echo '<a href="/delete/' . $row['id'] . '" class="btn btn-danger" onclick="return confirmDelete();">Delete</a>';
    echo '</td>';
    echo '</tr>';
}
?>
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

    </tbody>
</table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>