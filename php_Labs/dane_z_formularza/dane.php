<!DOCTYPE html>
<html>

<head>
     <meta charset="utf-8" />
     <title></title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
     <style type="text/css">
          #RegisterSection {
               background-color: #231d16;
               color: #d4b793;
               margin-top: 2rem;
               margin-bottom: 2rem;
               padding-top: 2rem;
               padding-bottom: 2rem;
          }

          .btn-color {
               background-color: #d4b793;
          }

          .h_padding {
               padding-bottom: 10px;
          }

          a,
          a:link {
               color: #231d16;
          }

          alink {
               color: #231d16;
          }
     </style>
</head>

<body>

     <div class="container-fluid col-12" id="RegisterSection">
          <div class="col-10 text-center">
               <div>
                    <h1 class="h1 h_padding text-center">Twoje dane</h1>
               </div>

               <?php foreach ($dane as $key => $value) { ?>
                    <tr>
                         <td><?php echo $key . ': ' . $value; ?></td><br />
                    </tr>

               <?php } ?>

          </div>
          <a href="formularz.php" class="btn btn-color">Powrót</a>
     </div>
</body>

</html>