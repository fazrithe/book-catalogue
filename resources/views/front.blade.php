<!DOCTYPE html>
<html>

  <head>
  <link rel="shortcut icon" href="">
  <title>Catalogue Tian Liong</title>
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

    //   function readCat(val,id){
    //     console.log(val);

        $('#read').flipBook({
            //Layout Setting
            pdfUrl:  '{{ asset($data->file_path) }}',
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
              url: "#",
              title: "PDF",
              description: "Silahkan click link di bawah untuk melihat / mengunduf pdf"
            },
            twitter : {
              enabled: true,
              url: "#"
            },
            pinterest : {
            enabled: true,
            url: "#"
            }
        })

        $('#readCatalogue').flipBook({
            //Layout Setting
            pdfUrl:  '{{ asset($data->file_path) }}',
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
              url: "#"
            },
            google_plus : {
              enabled: false
            },
            email : {
              enabled: true,
              url: "#",
              title: "PDF",
              description: "Silahkan click link di bawah untuk melihat / mengunduf pdf"
            },
            twitter : {
              enabled: true,
              url: "#"
            },
            pinterest : {
            enabled: true,
            url: "#"
            }
        });
      })
        // }
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
        width: 380px;
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
  <div>
  <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top shadow-sm">
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
                <li class="nav-item">
                    <a class="nav-link" href="#" id="readCatalogue"><b>{{ __('Catalogue') }}</b></a>
                </li>
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Catalogue
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        @foreach($data as $value)
                            <a class="nav-link" href="#" id="readCatalogue{{$value->id}}" onclick="readCat('{{$value->file_path}}','{{$value->id}}')">{{ $value->name }}</a>
                        @endforeach
                    </div>
                  </li> --}}
            </ul>
        </div>
    </div>
</nav>
  <!-- End Of Navbar -->

  <br><br><br><br>

  <!-- PDF INFORMATION -->
    <section class="justify-content-center" id="info" style="background-image: url('{{ asset('img/bg.jpg')}}'); hight:200%">
      <div class="container text-center">
        <div class="row">
        {{-- @foreach($data as $value) --}}
          <div class="col mt-2 mb-2">
            <img src="{{ asset($data->cover_path) }}" class="image" id="read" data-id="123">
          </div>
        {{-- @endforeach --}}
          {{-- <div class="col-4">
            <img src="{{ asset("flip/images/book2/1.jpg") }}" class="image" id="read" data-id="123" onclick="readCat('sss')">
          </div> --}}
        </div>
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
