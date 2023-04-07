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
        <li class="nav-item"><a href="/" class="nav-link link-secondary">Home</a></li>
        <li class="nav-item"><a href="{{ route('Absen.index') }}" class="nav-link">Absence</a></li>
        <li class="nav-item"><a href="/" class="nav-link">SPP</a></li>
        <li class="nav-item"><a href="/" class="nav-link">Kas</a></li>
        <li class="nav-item"><a href="/" class="nav-link">Documentation</a></li>
      </ul>
    </header>

    <!-- ===== END HEADER ===== -->

    <!-- ===== Form Create ===== -->

    <div class="container card-body">
      <div class="card-body row"></div>

      <div class="col-lg-6 w-100">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Daily Absence</h5>

            <!-- Vertical Form -->

            <form action="{{ route('Absen.store') }}" method="post" class="row g-3" enctype="multipart/form-data">
              @csrf
              @method('POST')

              <div class="col-12">
                <label for="inputNanme4" class="form-label">Name</label>
                <input type="text" class="form-control" id="inputName" placeholder="Your Name" name="name">
              </div>

              <div class="col-12">
                <label class="col-sm-2 col-form-label">Class</label>
                <div class="col-sm-12">
                  <select class="form-select" aria-label="Default select example" name="class" place>
                    <option selected>Select Your Class</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
              </div>

              <fieldset class="col-12">
                <legend class="col-form-label col-sm-2 pt-0">Major</legend>
                <div class="col-sm-10">
                  <div class="form-check">  
                    <input class="form-check-input" type="radio" name="major" id="gridRadios1" value="option1" checked>
                    <label class="form-check-label" for="gridRadios1">
                      Android Developer
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="major" id="gridRadios2" value="option2">
                    <label class="form-check-label" for="gridRadios2">
                      Network Engineer
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="major" id="gridRadios3" value="option3">
                    <label class="form-check-label" for="gridRadios3">
                      Multimedia Design
                    </label>
                  </div>
                </div>
              </fieldset>

              <div class="col-12">
                <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
                <div class="col-12">
                  <input type="date" class="form-control" name="date">
                </div>
              </div>

              <!-- Button -->
              <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-outline-secondary">Reset</button>
              </div>

            </form><!-- END Vertical Form -->

          </div>
        </div>

      </div>

      <!-- ===== END Form Create ===== -->

    </div>
  </div>

</body>

</html>