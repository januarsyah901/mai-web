{{-- @dd($personal) --}}
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
                  <h1 class="display-2 mb-3 px-lg-14">Tenaga Kependidikan</h1>
                </div>                
                <!--/column -->
              </div>
              <!--/.row -->
              <section class="wrapper bg-light">
                <div class="container py-14 py-md-16">
                  <div class="pricing-wrapper position-relative">
                    <div class="shape bg-dot primary rellax w-16 h-18" data-rellax-speed="1" style="top: 2rem; right: -2.4rem;"></div>
                    <div class="shape rounded-circle bg-line red rellax w-18 h-18 d-none d-lg-block" data-rellax-speed="1" style="bottom: 0.5rem; left: -2.5rem;"></div>
                    <div class="col-md-10 col-xl-9 col-xxl-7 mx-auto text-center">
                      <h2 class="display-1 mb-3 px-lg-14">Pengelola</h2>
                    </div>                
                    <div class="row gy-6 mt-3 mt-md-5">
                      <div class="col-md-6 col-lg-4">
                        <div class="pricing card text-center">
                          <div class="card-body">
                            @foreach ($personal as $person)
                            @if ($person["category_id"] == 'inti2')
                            <img class="rounded-circle w-20 mb-4" src="/assets/assets/img/photos/mai/gusbarra.png" srcset="/assets/assets/img/photos/mai/gusbarra.png" alt="Dr. H. Muhammad Al-Barra, Lc, M. Hum" />
                            <h4 class="mb-1"><a class="text-navy" href="/tentang/keguruan/{{ $person["slug"] }}">{{ $person["nama"] }}</a></h4>
                            <div class="meta mb-2"><a class="text-navy" href="/tentang/keguruan/{{ $person["slug"] }}">{{ $person["jabatan"]  }}</a></div>
                            @endif
                            @endforeach
                          </div>
                          <!--/.card-body -->
                        </div>
                        <!--/.pricing -->
                      </div>
                      <!--/column -->
                      <div class="col-md-6 col-lg-4 popular">
                        <div class="pricing card text-center">
                          <div class="card-body">
                            @foreach ($personal as $person)
                            @if ($person["category_id"] == 'inti1')
                           <img class="rounded-circle w-20 mb-4" src="/assets/assets/img/photos/mai/quotes.png" srcset="/assets/assets/img/photos/mai/quotes.png" alt="KH. Asep Saifuddin Chalim .MA" /> 
                            <h4 class="mb-1"><a class="text-navy" href="/tentang/keguruan/{{ $person["slug"] }}">{{ $person["nama"] }}</a></h4>
                            <div class="meta mb-2"><a class="text-navy" href="/tentang/keguruan/{{ $person["slug"] }}">{{ $person["jabatan"]  }}</a></div>
                            @endif
                            @endforeach
                          </div>
                          <!--/.card-body -->
                        </div>
                        <!--/.pricing -->
                      </div>
                      <!--/column -->
                      <div class="col-md-6 col-lg-4">
                        <div class="pricing card text-center">
                          <div class="card-body">
                            @foreach ($personal as $person)
                            @if ($person["category_id"] == 'inti3')
                           <img class="rounded-circle w-20 mb-4" src="/assets/assets/img/photos/mai/keguruan/{{ $person["foto"] }}.jpg" srcset="/assets/assets/img/photos/mai/keguruan/{{ $person["foto"] }}.jpg" alt="Dr. H. Mauhibur Rahman, Lc." />
                            <h4 class="mb-1"><a class="text-navy" href="/tentang/keguruan/{{ $person["slug"] }}">{{ $person["nama"] }}</a></h4>
                            <div class="meta mb-2"><a class="text-navy" href="/tentang/keguruan/{{ $person["slug"] }}">{{ $person["jabatan"]  }}</a></div>
                            @endif
                            @endforeach
                          </div>
                          <!--/.card-body -->
                        </div>
                        <!--/.pricing -->
                      </div>
                      <!--/column -->
                    </div>
                    <!--/.row -->
                  </div>
                  <!--/.pricing-wrapper -->
                </div>
                <!-- /.container -->
              </section>
              <!-- /section -->
              <div class="position-relative">
                <div class="shape rounded-circle bg-soft-yellow rellax w-16 h-16" data-rellax-speed="1" style="bottom: 0.5rem; right: -1.7rem;"></div>
                <div class="shape rounded-circle bg-line red rellax w-16 h-16" data-rellax-speed="1" style="top: 0.5rem; left: -1.7rem;"></div>
                {{-- muadalah --}}
                <h2 class="display-4 mb-3 px-lg-14 px-3">Muadalah / Pesantren</h2>
                <div class="carousel owl-carousel gap-small" data-margin="0" data-dots="true" data-autoplay="false" data-autoplay-timeout="5000" data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "3"}, "1400":{"items": "4"}}'>
                  @foreach ($personal as $person)
                  @if ($person["category_id"] == 'muadalah')
                  <div class="item">
                    <div class="item-inner">
                      <div class="card">
                        <div class="card-body">
                          {{-- <img class="rounded-circle w-20 mb-4" src="/assets/assets/img/photos/mai/keguruan/{{ $person["foto"] }}.jpg" srcset="/assets/assets/img/photos/mai/keguruan/{{ $person["foto"] }}.jpg" alt="" /> --}}
                          <h4 class="mb-1"><a class="text-navy" href="/tentang/keguruan/{{ $person["slug"] }}">{{ $person["nama"] }}</a></h4>
                          <div class="meta mb-2"><a class="text-navy" href="/tentang/keguruan/{{ $person["slug"] }}">{{ $person["jabatan"]  }}</a></div>
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
                {{-- end muadalah --}}
                {{-- bahasa indo --}}
                <h2 class="display-4 mb-3 px-lg-14 px-3">Bahasa Indonesia</h2>
                <div class="carousel owl-carousel gap-small" data-margin="0" data-dots="true" data-autoplay="false" data-autoplay-timeout="5000" data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "3"}, "1400":{"items": "4"}}'>
                  @foreach ($personal as $person)
                  @if ($person["category_id"] == 'bahasa-indonesia')
                  <div class="item">
                    <div class="item-inner">
                      <div class="card">
                        <div class="card-body">
                          {{-- <img class="rounded-circle w-20 mb-4" src="/assets/assets/img/photos/mai/keguruan/{{ $person["foto"] }}.jpg" srcset="/assets/assets/img/photos/mai/keguruan/{{ $person["foto"] }}.jpg" alt="" /> --}}
                          <h4 class="mb-1"><a class="text-navy" href="/tentang/keguruan/{{ $person["slug"] }}">{{ $person["nama"] }}</a></h4>
                          <div class="meta mb-2"><a class="text-navy" href="/tentang/keguruan/{{ $person["slug"] }}">{{ $person["jabatan"]  }}</a></div>
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
                {{-- end bahasa indo --}}
                {{-- bahasa inggris --}}
                <h2 class="display-4 mb-3 px-lg-14 px-3">Bahasa Inggris</h2>
                <div class="carousel owl-carousel gap-small" data-margin="0" data-dots="true" data-autoplay="false" data-autoplay-timeout="5000" data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "3"}, "1400":{"items": "4"}}'>
                  @foreach ($personal as $person)
                  @if ($person["category_id"] == 'bahasa-inggris')
                  <div class="item">
                    <div class="item-inner">
                      <div class="card">
                        <div class="card-body">
                          {{-- <img class="rounded-circle w-20 mb-4" src="/assets/assets/img/photos/mai/keguruan/{{ $person["foto"] }}.jpg" srcset="/assets/assets/img/photos/mai/keguruan/{{ $person["foto"] }}.jpg" alt="" /> --}}
                          <h4 class="mb-1"><a class="text-navy" href="/tentang/keguruan/{{ $person["slug"] }}">{{ $person["nama"] }}</a></h4>
                          <div class="meta mb-2"><a class="text-navy" href="/tentang/keguruan/{{ $person["slug"] }}">{{ $person["jabatan"]  }}</a></div>
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
                {{-- end bahasa inggris --}}
                {{-- matematika --}}
                <h2 class="display-4 mb-3 px-lg-14 px-3">Matematika</h2>
                <div class="carousel owl-carousel gap-small" data-margin="0" data-dots="true" data-autoplay="false" data-autoplay-timeout="5000" data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "3"}, "1400":{"items": "4"}}'>
                  @foreach ($personal as $person)
                  @if ($person["category_id"] == 'matematika')
                  <div class="item">
                    <div class="item-inner">
                      <div class="card">
                        <div class="card-body">
                          {{-- <img class="rounded-circle w-20 mb-4" src="/assets/assets/img/photos/mai/keguruan/{{ $person["foto"] }}.jpg" srcset="/assets/assets/img/photos/mai/keguruan/{{ $person["foto"] }}.jpg" alt="" /> --}}
                          <h4 class="mb-1"><a class="text-navy" href="/tentang/keguruan/{{ $person["slug"] }}">{{ $person["nama"] }}</a></h4>
                          <div class="meta mb-2"><a class="text-navy" href="/tentang/keguruan/{{ $person["slug"] }}">{{ $person["jabatan"]  }}</a></div>
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
                {{-- end matematika --}}
                {{-- biologi --}}
                <h2 class="display-4 mb-3 px-lg-14 px-3">Biologi</h2>
                <div class="carousel owl-carousel gap-small" data-margin="0" data-dots="true" data-autoplay="false" data-autoplay-timeout="5000" data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "3"}, "1400":{"items": "4"}}'>
                  @foreach ($personal as $person)
                  @if ($person["category_id"] == 'biologi')
                  <div class="item">
                    <div class="item-inner">
                      <div class="card">
                        <div class="card-body">
                          {{-- <img class="rounded-circle w-20 mb-4" src="/assets/assets/img/photos/mai/keguruan/{{ $person["foto"] }}.jpg" srcset="/assets/assets/img/photos/mai/keguruan/{{ $person["foto"] }}.jpg" alt="" /> --}}
                          <h4 class="mb-1"><a class="text-navy" href="/tentang/keguruan/{{ $person["slug"] }}">{{ $person["nama"] }}</a></h4>
                          <div class="meta mb-2"><a class="text-navy" href="/tentang/keguruan/{{ $person["slug"] }}">{{ $person["jabatan"]  }}</a></div>
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
                {{-- end biologi --}}
                {{-- kimia --}}
                <h2 class="display-4 mb-3 px-lg-14 px-3">Kimia</h2>
                <div class="carousel owl-carousel gap-small" data-margin="0" data-dots="true" data-autoplay="false" data-autoplay-timeout="5000" data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "3"}, "1400":{"items": "4"}}'>
                  @foreach ($personal as $person)
                  @if ($person["category_id"] == 'kimia')
                  <div class="item">
                    <div class="item-inner">
                      <div class="card">
                        <div class="card-body">
                          {{-- <img class="rounded-circle w-20 mb-4" src="/assets/assets/img/photos/mai/keguruan/{{ $person["foto"] }}.jpg" srcset="/assets/assets/img/photos/mai/keguruan/{{ $person["foto"] }}.jpg" alt="" /> --}}
                          <h4 class="mb-1"><a class="text-navy" href="/tentang/keguruan/{{ $person["slug"] }}">{{ $person["nama"] }}</a></h4>
                          <div class="meta mb-2"><a class="text-navy" href="/tentang/keguruan/{{ $person["slug"] }}">{{ $person["jabatan"]  }}</a></div>
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
                {{-- end kimia --}}
                {{-- fisika --}}
                <h2 class="display-4 mb-3 px-lg-14 px-3">Fisika</h2>
                <div class="carousel owl-carousel gap-small" data-margin="0" data-dots="true" data-autoplay="false" data-autoplay-timeout="5000" data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "3"}, "1400":{"items": "4"}}'>
                  @foreach ($personal as $person)
                  @if ($person["category_id"] == 'fisika')
                  <div class="item">
                    <div class="item-inner">
                      <div class="card">
                        <div class="card-body">
                          {{-- <img class="rounded-circle w-20 mb-4" src="/assets/assets/img/photos/mai/keguruan/{{ $person["foto"] }}.jpg" srcset="/assets/assets/img/photos/mai/keguruan/{{ $person["foto"] }}.jpg" alt="" /> --}}
                          <h4 class="mb-1"><a class="text-navy" href="/tentang/keguruan/{{ $person["slug"] }}">{{ $person["nama"] }}</a></h4>
                          <div class="meta mb-2"><a class="text-navy" href="/tentang/keguruan/{{ $person["slug"] }}">{{ $person["jabatan"]  }}</a></div>
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
                {{-- end fisika --}}
                {{-- ekonomi --}}
                <h2 class="display-4 mb-3 px-lg-14 px-3">Ekonomi</h2>
                <div class="carousel owl-carousel gap-small" data-margin="0" data-dots="true" data-autoplay="false" data-autoplay-timeout="5000" data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "3"}, "1400":{"items": "4"}}'>
                  @foreach ($personal as $person)
                  @if ($person["category_id"] == 'ekonomi')
                  <div class="item">
                    <div class="item-inner">
                      <div class="card">
                        <div class="card-body">
                          {{-- <img class="rounded-circle w-20 mb-4" src="/assets/assets/img/photos/mai/keguruan/{{ $person["foto"] }}.jpg" srcset="/assets/assets/img/photos/mai/keguruan/{{ $person["foto"] }}.jpg" alt="" /> --}}
                          <h4 class="mb-1"><a class="text-navy" href="/tentang/keguruan/{{ $person["slug"] }}">{{ $person["nama"] }}</a></h4>
                          <div class="meta mb-2"><a class="text-navy" href="/tentang/keguruan/{{ $person["slug"] }}">{{ $person["jabatan"]  }}</a></div>
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
                {{-- end ekonomi --}}
                {{-- sosiologi --}}
                <h2 class="display-4 mb-3 px-lg-14 px-3">Sosiologi</h2>
                <div class="carousel owl-carousel gap-small" data-margin="0" data-dots="true" data-autoplay="false" data-autoplay-timeout="5000" data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "3"}, "1400":{"items": "4"}}'>
                  @foreach ($personal as $person)
                  @if ($person["category_id"] == 'sosiologi')
                  <div class="item">
                    <div class="item-inner">
                      <div class="card">
                        <div class="card-body">
                          {{-- <img class="rounded-circle w-20 mb-4" src="/assets/assets/img/photos/mai/keguruan/{{ $person["foto"] }}.jpg" srcset="/assets/assets/img/photos/mai/keguruan/{{ $person["foto"] }}.jpg" alt="" /> --}}
                          <h4 class="mb-1"><a class="text-navy" href="/tentang/keguruan/{{ $person["slug"] }}">{{ $person["nama"] }}</a></h4>
                          <div class="meta mb-2"><a class="text-navy" href="/tentang/keguruan/{{ $person["slug"] }}">{{ $person["jabatan"]  }}</a></div>
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
                {{-- end sosiologi --}}
                {{-- geogragfi --}}
                <h2 class="display-4 mb-3 px-lg-14 px-3">Geogragfi</h2>
                <div class="carousel owl-carousel gap-small" data-margin="0" data-dots="true" data-autoplay="false" data-autoplay-timeout="5000" data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "3"}, "1400":{"items": "4"}}'>
                  @foreach ($personal as $person)
                  @if ($person["category_id"] == 'geografi')
                  <div class="item">
                    <div class="item-inner">
                      <div class="card">
                        <div class="card-body">
                          {{-- <img class="rounded-circle w-20 mb-4" src="/assets/assets/img/photos/mai/keguruan/{{ $person["foto"] }}.jpg" srcset="/assets/assets/img/photos/mai/keguruan/{{ $person["foto"] }}.jpg" alt="" /> --}}
                          <h4 class="mb-1"><a class="text-navy" href="/tentang/keguruan/{{ $person["slug"] }}">{{ $person["nama"] }}</a></h4>
                          <div class="meta mb-2"><a class="text-navy" href="/tentang/keguruan/{{ $person["slug"] }}">{{ $person["jabatan"]  }}</a></div>
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
                {{-- end geogragfi --}}
                {{-- sejarah --}}
                <h2 class="display-4 mb-3 px-lg-14 px-3">Sejarah</h2>
                <div class="carousel owl-carousel gap-small" data-margin="0" data-dots="true" data-autoplay="false" data-autoplay-timeout="5000" data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "3"}, "1400":{"items": "4"}}'>
                  @foreach ($personal as $person)
                  @if ($person["category_id"] == 'sejarah')
                  <div class="item">
                    <div class="item-inner">
                      <div class="card">
                        <div class="card-body">
                          {{-- <img class="rounded-circle w-20 mb-4" src="/assets/assets/img/photos/mai/keguruan/{{ $person["foto"] }}.jpg" srcset="/assets/assets/img/photos/mai/keguruan/{{ $person["foto"] }}.jpg" alt="" /> --}}
                          <h4 class="mb-1"><a class="text-navy" href="/tentang/keguruan/{{ $person["slug"] }}">{{ $person["nama"] }}</a></h4>
                          <div class="meta mb-2"><a class="text-navy" href="/tentang/keguruan/{{ $person["slug"] }}">{{ $person["jabatan"]  }}</a></div>
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
                {{-- end sejarah --}}
                {{-- Pendidikan Kewarganegaraan --}}
                <h2 class="display-4 mb-3 px-lg-14 px-3">Pendidikan Kewarganegaraan</h2>
                <div class="carousel owl-carousel gap-small" data-margin="0" data-dots="true" data-autoplay="false" data-autoplay-timeout="5000" data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "3"}, "1400":{"items": "4"}}'>
                  @foreach ($personal as $person)
                  @if ($person["category_id"] == 'ppkn')
                  <div class="item">
                    <div class="item-inner">
                      <div class="card">
                        <div class="card-body">
                          {{-- <img class="rounded-circle w-20 mb-4" src="/assets/assets/img/photos/mai/keguruan/{{ $person["foto"] }}.jpg" srcset="/assets/assets/img/photos/mai/keguruan/{{ $person["foto"] }}.jpg" alt="" /> --}}
                          <h4 class="mb-1"><a class="text-navy" href="/tentang/keguruan/{{ $person["slug"] }}">{{ $person["nama"] }}</a></h4>
                          <div class="meta mb-2"><a class="text-navy" href="/tentang/keguruan/{{ $person["slug"] }}">{{ $person["jabatan"]  }}</a></div>
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
                {{-- end Pendidikan Kewarganegaraan --}}
                {{-- TIK --}}
                <h2 class="display-4 mb-3 px-lg-14 px-3">TIK</h2>
                <div class="carousel owl-carousel gap-small" data-margin="0" data-dots="true" data-autoplay="false" data-autoplay-timeout="5000" data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "3"}, "1400":{"items": "4"}}'>
                  @foreach ($personal as $person)
                  @if ($person["category_id"] == 'tik')
                  <div class="item">
                    <div class="item-inner">
                      <div class="card">
                        <div class="card-body">
                          {{-- <img class="rounded-circle w-20 mb-4" src="/assets/assets/img/photos/mai/keguruan/{{ $person["foto"] }}.jpg" srcset="/assets/assets/img/photos/mai/keguruan/{{ $person["foto"] }}.jpg" alt="" /> --}}
                          <h4 class="mb-1"><a class="text-navy" href="/tentang/keguruan/{{ $person["slug"] }}">{{ $person["nama"] }}</a></h4>
                          <div class="meta mb-2"><a class="text-navy" href="/tentang/keguruan/{{ $person["slug"] }}">{{ $person["jabatan"]  }}</a></div>
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
                {{-- end TIK --}}
                {{-- TPA --}}
                <h2 class="display-4 mb-3 px-lg-14 px-3">TPA</h2>
                <div class="carousel owl-carousel gap-small" data-margin="0" data-dots="true" data-autoplay="false" data-autoplay-timeout="5000" data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "3"}, "1400":{"items": "4"}}'>
                  @foreach ($personal as $person)
                  @if ($person["category_id"] == 'tpa')
                  <div class="item">
                    <div class="item-inner">
                      <div class="card">
                        <div class="card-body">
                          {{-- <img class="rounded-circle w-20 mb-4" src="/assets/assets/img/photos/mai/keguruan/{{ $person["foto"] }}.jpg" srcset="/assets/assets/img/photos/mai/keguruan/{{ $person["foto"] }}.jpg" alt="" /> --}}
                          <h4 class="mb-1"><a class="text-navy" href="/tentang/keguruan/{{ $person["slug"] }}">{{ $person["nama"] }}</a></h4>
                          <div class="meta mb-2"><a class="text-navy" href="/tentang/keguruan/{{ $person["slug"] }}">{{ $person["jabatan"]  }}</a></div>
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
                {{-- end TPA --}}
                {{-- olahraga --}}
                <h2 class="display-4 mb-3 px-lg-14 px-3">Olahraga</h2>
                <div class="carousel owl-carousel gap-small" data-margin="0" data-dots="true" data-autoplay="false" data-autoplay-timeout="5000" data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "3"}, "1400":{"items": "4"}}'>
                  @foreach ($personal as $person)
                  @if ($person["category_id"] == 'olahraga')
                  <div class="item">
                    <div class="item-inner">
                      <div class="card">
                        <div class="card-body">
                          {{-- <img class="rounded-circle w-20 mb-4" src="/assets/assets/img/photos/mai/keguruan/{{ $person["foto"] }}.jpg" srcset="/assets/assets/img/photos/mai/keguruan/{{ $person["foto"] }}.jpg" alt="" /> --}}
                          <h4 class="mb-1"><a class="text-navy" href="/tentang/keguruan/{{ $person["slug"] }}">{{ $person["nama"] }}</a></h4>
                          <div class="meta mb-2"><a class="text-navy" href="/tentang/keguruan/{{ $person["slug"] }}">{{ $person["jabatan"]  }}</a></div>
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
                {{-- end olahraga --}}
                {{-- uambn --}}
                {{-- <h2 class="display-4 mb-3 px-lg-14 px-3">UAMBN</h2> --}}
                {{-- <div class="carousel owl-carousel gap-small" data-margin="0" data-dots="true" data-autoplay="false" data-autoplay-timeout="5000" data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "3"}, "1400":{"items": "4"}}'>
                  @foreach ($personal as $person)
                  @if ($person["category_id"] == 'uambn')
                  <div class="item">
                    <div class="item-inner">
                      <div class="card">
                        <div class="card-body">
                          <img class="rounded-circle w-20 mb-4" src="/assets/assets/img/photos/mai/keguruan/{{ $person["foto"] }}.jpg" srcset="/assets/assets/img/photos/mai/keguruan/{{ $person["foto"] }}.jpg" alt="" />
                          <h4 class="mb-1"><a class="text-navy" href="/tentang/keguruan/{{ $person["slug"] }}">{{ $person["nama"] }}</a></h4>
                          <div class="meta mb-2"><a class="text-navy" href="/tentang/keguruan/{{ $person["slug"] }}">{{ $person["jabatan"]  }}</a></div>
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
                </div> --}}
                {{-- end uambn --}}
                <!-- /.owl-carousel -->
              </div>
              <!-- /.position-relative -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->
    </div>
    <!-- /.content-wrapper -->
    @include('partial.footer')
</body>

</html>
