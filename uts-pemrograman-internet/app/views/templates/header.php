<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
  <title><?= $data['title']; ?></title>
  <style>
    * {
      font-family: 'Poppins', sans-serif;

    }
  </style>
</head>

<body>

  <div class="container">
    <header class="p-3 mx-auto">

      <div class="container border-bottom">
        <a href="/" class="d-flex align-items-center mt-4 mb-lg-0 text-dark text-decoration-none ">
          <h1><span class="text-primary fw-bold">datasekolah</span>.com</h1>
        </a>
        <div class="flex-wrap ">
          <ul class="nav col-12 col-lg-auto  me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="<?= BASEURL; ?>home" class="nav-link px-2 link-dark text-primary">Home</a></li>
            <li><a href="<?= BASEURL; ?>datasekolah" class="nav-link px-2 link-dark text-primary">Data Sekolah</a></li>
            <li><a href="<?= BASEURL; ?>about" class="nav-link px-2 link-dark text-primary">About</a></li>
          </ul>
        </div>
        <form action="<?= BASEURL ?>/datasekolah/search" method="post">
        <div class="input-group mb-4 mt-3 w-50 text-center justifiy-content-center align-items-center mx-auto">
          <input type="text" class="form-control" placeholder="cari sekolah.." id="keyword" name="keyword" autocomplete="off">
          <button class="btn btn-outline-primary" type="submit" id="tombolCari" name="tombolCari">Cari</button>
        </div>
        </form>
      </div>
    </header>
  </div>
  </div>

</body>
