<!doctype html>
<html lang="en">
  <head>
    <title>Online Shop Kalsel</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  </head>
  <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="#">Online Shop Kalsel</a>
          <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
              aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavId">
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                  
              </ul>
              <a name="login" id="login" class="text-light" href="#"><u>Masuk/daftar</u></a>
          </div>
      </nav>
<div class="container">
    <div class="row">
        
        <div class="col-lg-9">
            <div class="jumbotron">
                <table class="table">
                    <thead>
                        <tr>
                            <th></th>
                            <th></th>
                            <th colspan='2'></th>
                        </tr>

                    </thead>
                    <tbody>
                        <?php
    if ($data->num_rows() >= 1) {
        foreach ($data->result() as $a ) {
            echo "<tr>
                <td>$a->gambar</td>
                <td>$a->nama_produk</td>
                <td>$a->harga</td>
                <td>".anchor(base_url('home/cart'), '<button class="btn btn-success"><i class="fas fa-shopping-cart    "></i> Beli</button>', 'attributes');"</td>
            </tr>";
        }
    }else{
        echo "tidak ada";
    }

?>
                        
                    </tbody>
                </table>


            </div>
        </div>



    </div>

</div>


      <!--  -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  </body>
</html>