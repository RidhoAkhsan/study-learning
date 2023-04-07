<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body>

  <!-- ===== HEADER ===== -->

  <div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <svg class="bi me-2" width="40" height="32">
          <use xlink:href="/" />
        </svg>
        <span class="fs-4">Study learning</span>
      </a>

      <ul class="nav nav-pills">
        <li class="btn nav-item"><a href="/" class="nav-link link-secondary">Home</a></li>
        <li class="btn nav-item"><a href="{{ route('Absen.index') }}" class="nav-link">Absence</a></li>
        <li class="nav-item"><a href="/" class="nav-link">SPP</a></li>
        <li class="nav-item"><a href="/" class="nav-link">Kas</a></li>
        <li class="nav-item"><a href="/" class="nav-link">Documentation</a></li>
      </ul>
    </header>

    <!-- ===== END HEADER ===== -->

    <div class="container card">
      <div class="card-body">
        <div class="row">
          <a href="{{ route('Absen.create') }}" type="button" class="btn btn-outline-primary">Add Absensi</a>
        </div>
        <br>
        <h5 class="card-title">Daily Absence</h5>

        <!-- Table with hoverable rows -->
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Class</th>
              <th scope="col">Major</th>
              <th scope="col">Date</th>
            </tr>
          </thead>
          <tbody>
            @foreach($absen as $row)
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td>{{ $row->name }}</td>
              <td>{{ number_format($row->class) }}</td>
              <td>{{ $row->major }}</td>
              <td>{{ $row->date }}</td>
              <td>
                <div class="car-body">
                  <button class="btn btn-warning">
                    Edit
                  </button>
                  <form action="{{ route('Absen.destroy', $row->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                      Delete
                    </button>
                  </form>
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <!-- End Table with hoverable rows -->

      </div>
    </div>
  </div>
</body>

</html>