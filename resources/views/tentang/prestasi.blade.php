{{-- @dd($prestasis) --}}
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
        <!-- /header -->
        <section class="wrapper bg-light">
            <div class="container py-14 py-md-16">
              <div class="row mb-3">
                <div class="col-md-10 col-xl-9 col-xxl-7 mx-auto text-center">
                  <h1 class="display-2 mb-3 px-lg-14">Prestasi</h1>
                </div>                
                <!--/column -->
              </div>
              <!--/.row -->
              <div class="position-relative">
                <div class="shape rounded-circle bg-soft-yellow rellax w-16 h-16" data-rellax-speed="1" style="bottom: 0.5rem; right: -1.7rem;"></div>
                <div class="shape rounded-circle bg-line red rellax w-16 h-16" data-rellax-speed="1" style="top: 0.5rem; left: -1.7rem;"></div>
                {{-- akademik --}}
                <h2 class="display-4 mb-3 px-lg-14">Akademik</h2>
                <div class="carousel owl-carousel gap-small" data-margin="0" data-dots="true" data-autoplay="false" data-autoplay-timeout="5000" data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "3"}, "1400":{"items": "4"}}'>
                  @foreach ($prestasis as $prestasi)
                  @if ($prestasi["category_id"] == 'akademik')
                  <div class="item">
                    <div class="item-inner">
                      <div class="card">
                        <div class="card-body">
                          <img class="w-20 mb-4" src="/assets/assets/img/photos/mai/RI-2 - Copy.png" srcset="/assets/assets/img/photos/mai/RI-2 - Copy.png" alt="" />
                          <h4 class="mb-1"><a class="text-navy" href="/tentang/prestasi/{{ $prestasi["slug"] }}">{{ $prestasi["judul"] }}</a></h4>
                          </div>
                          <!--/.card-body -->
                        </div>
                        <!-- /.card -->
                      </div>
                      <!-- /.item-inner -->
                    </div>
                    @endif
                    @endforeach
                  <!-- /.item -->
                </div>
                {{-- end akdemik --}}
                {{-- non akademik--}}
                <h2 class="display-4 mb-3 px-lg-14">Non Akademik</h2>
                <div class="carousel owl-carousel gap-small" data-margin="0" data-dots="true" data-autoplay="false" data-autoplay-timeout="5000" data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "3"}, "1400":{"items": "4"}}'>
                  @foreach ($prestasis as $prestasi)
                  @if ($prestasi["category_id"] == 'nonakademik')
                  <div class="item">
                    <div class="item-inner">
                      <div class="card">
                        <div class="card-body">
                          <img class="w-20 mb-4" src="/assets/assets/img/photos/mai/RI-2 - Copy.png" srcset="/assets/assets/img/photos/mai/RI-2 - Copy.png" alt="" />
                          <h4 class="mb-1"><a class="text-navy" href="/tentang/prestasi/{{ $prestasi["slug"] }}">{{ $prestasi["judul"] }}</a></h4>
                          </div>
                          <!--/.card-body -->
                        </div>
                        <!-- /.card -->
                      </div>
                      <!-- /.item-inner -->
                    </div>
                    @endif
                    @endforeach
                  <!-- /.item -->
                </div>
                {{-- end non akademik--}}
                <!-- /.owl-carousel -->
              </div>
              <!-- /.position-relative -->
            </div>
            <!-- /.container -->
          </section>
  <!-- /section -->
  
  
  <!-- /section -->
  
  
        <!-- /section -->
    </div>
    <!-- /.content-wrapper -->
    @include('partial.footer')
</body>

</html>
