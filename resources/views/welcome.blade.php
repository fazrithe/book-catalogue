<!DOCTYPE html>
<html>

  <head>
  <link rel="shortcut icon" href="images/KPK_Logo.svg">
  <title>View PDF</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- AJAX -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
  <!-- costume css -->
  <link rel="stylesheet" type="text/css" href="{{ asset("flip/css/flipbook.style.css") }}">
  <link rel="stylesheet" type="text/css" href="{{ asset("flip/css/font-awesome.css") }}">
  <link rel="stylesheet" type="text/css" href="{{ asset("flip/css/footer.css") }}">
  <!-- Bootstrap Css -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  <!-- Include JS -->
  <script src="{{ asset("flip/js/flipbook.min.js") }}"></script>

  <script type="text/javascript">

      $(document).ready(function () {
        $("#read").flipBook({
            //Layout Setting
            pdfUrl: '{{ asset("flip/pdf/tlg2019.pdf") }}',
            lightBox:true,
            layout:3,
            currentPage:{vAlign:"bottom", hAlign:"left"},
            // BTN SETTING
            btnShare : {enabled:false},
            btnPrint : {
              hideOnMobile:true
            },
            btnDownloadPages : {
              enabled: true,
              title: "Download pages",
              icon: "fa-download",
              icon2: "file_download",
              url: "images/pdf.rar",
              name: "allPages.zip",
              hideOnMobile:false
            },
            btnColor:'rgb(255,120,60)',
            sideBtnColor:'rgb(255,120,60)',
            sideBtnSize:60,
            sideBtnBackground:"rgba(0,0,0,.7)",
            sideBtnRadius:60,
            btnSound:{vAlign:"top", hAlign:"left"},
            btnAutoplay:{vAlign:"top", hAlign:"left"},
            // SHARING
            btnShare : {
              enabled: true,
              title: "Share",
              icon: "fa-share-alt"
            },
            facebook : {
              enabled: true,
              url: "ismanyan.github.io/Pdf_flipbook.demo.github.io/pdf/pdf.pdf"
            },
            google_plus : {
              enabled: false
            },
            email : {
              enabled: true,
              url: "https://ismanyan.github.io/Pdf_flipbook.demo.github.io/pdf/pdf.pdf",
              title: "PDF KPK",
              description: "Silahkan click link di bawah untuk melihat / mengunduf pdf"
            },
            twitter : {
              enabled: true,
              url: "https://ismanyan.github.io/Pdf_flipbook.demo.github.io/pdf/pdf.pdf"
            },
            pinterest : {
            enabled: true,
            url: "https://ismanyan.github.io/Pdf_flipbook.demo.github.io/pdf/pdf.pdf"
            }
        });

        $("#readCatalogue").flipBook({
            //Layout Setting
            pdfUrl: '{{ asset("flip/pdf/tlg2019.pdf") }}',
            lightBox:true,
            layout:3,
            currentPage:{vAlign:"bottom", hAlign:"left"},
            // BTN SETTING
            btnShare : {enabled:false},
            btnPrint : {
              hideOnMobile:true
            },
            btnDownloadPages : {
              enabled: true,
              title: "Download pages",
              icon: "fa-download",
              icon2: "file_download",
              url: "images/pdf.rar",
              name: "allPages.zip",
              hideOnMobile:false
            },
            btnColor:'rgb(255,120,60)',
            sideBtnColor:'rgb(255,120,60)',
            sideBtnSize:60,
            sideBtnBackground:"rgba(0,0,0,.7)",
            sideBtnRadius:60,
            btnSound:{vAlign:"top", hAlign:"left"},
            btnAutoplay:{vAlign:"top", hAlign:"left"},
            // SHARING
            btnShare : {
              enabled: true,
              title: "Share",
              icon: "fa-share-alt"
            },
            facebook : {
              enabled: true,
              url: "ismanyan.github.io/Pdf_flipbook.demo.github.io/pdf/pdf.pdf"
            },
            google_plus : {
              enabled: false
            },
            email : {
              enabled: true,
              url: "https://ismanyan.github.io/Pdf_flipbook.demo.github.io/pdf/pdf.pdf",
              title: "PDF KPK",
              description: "Silahkan click link di bawah untuk melihat / mengunduf pdf"
            },
            twitter : {
              enabled: true,
              url: "https://ismanyan.github.io/Pdf_flipbook.demo.github.io/pdf/pdf.pdf"
            },
            pinterest : {
            enabled: true,
            url: "https://ismanyan.github.io/Pdf_flipbook.demo.github.io/pdf/pdf.pdf"
            }
        });
      })
  </script>

  <style>
    body {
      background-color: #f6f6f6;
    }
    #author {
      font-size: 15px;
      font-weight: bold;
      color: #0186c9;
    }
    #date {
      margin-left: 10px;
      font-size: 15px;
      color: #819196;
    }
    #size {
      font-size: 15px;
      color: #819196;
    }
    #description {
      margin-top: 20px;
      font-weight: lighter;
    }

    .image {
        width: 35%;
    }

    @media only screen and (max-width: 768px) {
    .image {
        background-color: lightblue;
        width: 100%;
    }
    }
  </style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>

  <body>

  <!-- Navbar -->
  {{-- <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm">
    <div class="row">
        <div class="col">
            <a class="navbar-brand" href="index.html">
                <img src="{{ asset("img/logo.png") }}" alt="Tian Liong" width="150">
              </a>
        </div>
        <div class="col">
            <a class="navbar-brand" href="index.html">
                <img src="{{ asset("img/logo.png") }}" alt="Tian Liong" width="150">
              </a>
        </div>
    </div>

  </nav> --}}
  <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset("img/logo.png") }}" alt="Tian Liong" width="150">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="readCatalogue">{{ __('Catalogue') }}</a>
                        </li>
                    @endif

                @else

                @endguest
            </ul>
        </div>
    </div>
</nav>
  <!-- End Of Navbar -->

  <br><br><br><br>

  <!-- PDF INFORMATION -->
  <section class="justify-content-center" id="info" style="background-image: url('{{ asset('img/bg.jpg')}}');">
    <div class="container text-center">
        {{-- <div class="row"> --}}
            {{-- <div class="col-2">
            </div>
            <div class="col" id="read"> --}}
                <img src="{{ asset("flip/images/book2/1.jpg") }}" class="image" id="read">
            {{-- </div>
        </div> --}}
          {{-- <div class="col-md-7 mt-3">
            <!-- Info -->
            <h3 id="title">COMPANY PROFILE</h3>
            <p id="author" class="d-inline">Bilkis Ismail</p>
            <p id="date" class="d-inline">26 April 2019</p>
            <p id="size"><i class="fas fa-file "></i> File Size <b>1MB</b></p>
            <!-- Button -->
            <div class="button">
              <a id="read" class="btn btn-primary mt-2 text-white">Baca PDF <i class="fas fa-book-reader fa-lg"></i></a>
              <a href="{{ asset("flip/pdf/pdf.pdf") }}" class="btn btn-primary mt-2 text-white" download>Unduh PDF <i class="fas fa-download fa-lg"></i></a>
            </div>
            <!-- Description -->
            <p id="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi quo velit consequuntur, iste, impedit dignissimos vitae nesciunt et commodi quos quis iusto est iure tenetur eum amet quas temporibus esse praesentium incidunt sequi ratione. Fuga ab quas itaque enim, molestiae, totam, necessitatibus magni dolores eligendi obcaecati libero omnis iste. Facilis.</p>
          </div> --}}

    </div>
  </section>
  <!-- END OF PDF INFORMATION -->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>

</html>
