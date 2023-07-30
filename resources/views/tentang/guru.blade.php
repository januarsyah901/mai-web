<!DOCTYPE html>
<html lang="en">

<head>
    @include('partial.head')
</head>

<body>
        <div class="content-wrapper">
            <header class="wrapper bg-gray">
                <nav class="navbar navbar-expand-lg center-nav transparent navbar-light">
                    @include('partial.nav')
                </nav>
                <!-- /.navbar -->
            </header>
            <!-- /section -->
        </div>
        <section class="wrapper bg-light">
          <div class="container py-14 py-md-16">
            <div class="row gx-md-8 gx-xl-12 gy-10 align-items-center">
              {{-- <div class="col-md-8 col-lg-6 offset-lg-0 col-xl-5 offset-xl-1 position-relative">
                <div class="shape bg-dot primary rellax w-17 h-21" data-rellax-speed="1" style="top: -2rem; left: -1.4rem;"></div>
                <figure class="rounded"><img src="/assets/assets/img/photos/mai/{{ $foto }}.jpg" alt=""></figure>
              </div> --}}
              <!--/column -->
              <div class="col-lg-6">
                <h2 class="display-4 mb-8">{{ $nama }}</h2>
                <h3>{{ $jabatan }}</h3>
                <div class="d-flex flex-row">
                  <div>
                    <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
                  </div>
                  <div>
                    <h5 class="mb-1">Pendidikan Terakhir</h5>
                    <address>{{ $pendidikan }}</address>
                  </div>
                </div>
                {{-- <div class="d-flex flex-row">
                  <div>
                    <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
                  </div>
                  <div>
                    <h5 class="mb-1">Phone</h5>
                    <p>{{ $notel}}</p>
                  </div>
                </div> --}}
                <div class="d-flex flex-row">
                  <div>
                    <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-envelope"></i> </div>
                  </div>
                  <div>
                    <h5 class="mb-1">E-mail</h5>
                    <p class="mb-0"><a href="{{ $email }}" class="link-body">{{ $email}}</a></p>
                  </div>
                </div>
              </div>
              <div class="m-5">
                <a href="/tentang/keguruan" class="btn btn-primary">back</a>
              </div>
              
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
          <!-- /.container -->
        </section>
        <!-- /section -->
        
    <!-- /.content-wrapper -->
    @include('partial.footer')
</body>

</html>
