
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Receipe Blog</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/album/album.css" rel="stylesheet">
  </head>

  <body>
    <main role="main">
      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Receipe Blog</h1>
          <p class="lead text-muted">Read our interesting receipe articles and enjoy yourself.</p>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
            @foreach($receipes as $receipe)
              <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                  <div class="card-body">
                    <h3>{{ $receipe->name }} </h3>
                    <p class="card-text">{{ $receipe->categories->name}}</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <a href="detail/{{$receipe->id}}"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
         </div>
         {{$receipes->links()}}
      </div>

    </main>

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
  </body>
</html>
