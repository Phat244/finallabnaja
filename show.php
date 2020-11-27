<html>

  <head>
    <title>ITF Lab Final</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>  
  </head>

<body>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>     

<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'ihost.it.kmitl.ac.th', 'it63070244', 'BIWfyw86', 'it63070244_phat', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM finalabs');
?>
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="show.php">LAB Database ITF</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="show.php">Show</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Insert.html">Insert</a>
        </ul>
      </div>
    </div>
  </nav>
  <br>
  <br>
  <br>
  <br>
<div class="container">
<h1 class="display-1">LAB Database Final</h1>
</div>

<div class="container">
<table class="table table-bordered">
  <thead>
    <tr class="alert alert-primary" role="alert">
      <th width="220"> <div align="center">A </div></th>
      <th width="220"> <div align="center">B </div></th>
      <th width="220"> <div align="center">C </div></th>
      <th width="220"> <div align="center">all </div></th>
      <th width="50"> <div align="center">action</div></th>
    </tr>
  </thead>
  
  <tbody>
<?php while($Result = mysqli_fetch_array($res))
{?>
    <tr>
      <td align="center"><?php echo $Result['A'];?></td>
      <td align="center"><?php echo $Result['B'];?></td>
      <td align="center"><?php echo $Result['C'];?></td>
      <td align="center"><?php echo $Result['D'];?></td>
    <td>
    <form method="POST" action="delete.php">
         <input type="hidden" name="id" value="<?php echo $Result['id']; ?>" />
        <button type="submit" class="btn btn-danger" >Delete</button>
      </form>
<?php
}
?>
  </tbody>

</div>
<?php
mysqli_close($conn);
?>
</body>
</html>