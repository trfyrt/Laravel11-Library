<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Catalogue</title>
</head>
<body>
    <div class="container-md" style="margin: 2vw">
        <h1 style="text-align: center"><b>Library Management Laravel 11</b></h1>
        <h1 style="text-align: center">Viewing: {{ $type }}</h1>
        {{-- Button Category--}}
        <div class="btn-group">
            <a href="/catalogue/all" class="btn btn-outline-primary">All</a>
            <a href="/catalogue/books" class="btn btn-outline-primary">Books</a>
            <a href="/catalogue/cds" class="btn btn-outline-primary">CDs</a>
            <a href="/catalogue/fyps" class="btn btn-outline-primary">Final Year Projects</a>
            <a href="/catalogue/journals" class="btn btn-outline-primary">Journals</a>
            <a href="/catalogue/newspapers" class="btn btn-outline-primary">News Papers</a>
          </div>
        {{-- Button Asc/Desc--}}
        <div class="btn-group" style="float: right">
            <a href="/catalogue/{{ $type }}/asc" class="btn btn-outline-primary">Ascending</a>
            <a href="/catalogue/{{  $type }}/desc" class="btn btn-outline-primary">Descending</a>
          </div>
        {{-- List katalog --}}
        <div class="row">
            @foreach ($datas as $data)
            <div class="col-6 col-sm-4" style="padding-top: 3vh">
                <div class="card" style="height: 300px">
                    <div class="card-body">
                      <h5 class="card-title">{{ $data->title }}</h5>
                      <h6 class="card-subtitle mb-2 text-muted">by: {{ $data->author ?? $data->producer ?? $data->publisher}}</h6>
                      <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure quasi cumque non obcaecati laboriosam aut voluptas alias, provident ducimus doloribus accusantium illum fugit eos, ea voluptatibus aperiam dolorem odit voluptatum!</p>
                    </div>
                    <div class="card-footer text-muted">
                        {{ $data->year ?? $data->publicationDate }}
                    </div>
                </div>
            </div>
            @endforeach   
        </div>
    </div>

    <footer class="footer py-3 bg-light">
        <div class="container">
          <span class="text-muted">&copy;Aaron Jevon Benedict Kongdoh</span>
        </div>
      </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>