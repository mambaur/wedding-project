<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Undangan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <style>
      .content{
        background-color: #FBF0ED
      }

      .font-color-default{
        color: #6F4735;
      }

      .border-color-default{
        border: 2px groove #6F4735;
        /* border-color: #6F4735; */
      }

      img-circle {
        border-radius: 50%;
      }
    </style>
  </head>
  <body>
    <div class="container">

      <div class="row justify-content-center p-0">
        <div class="col-md-6 col-sm-12 p-0 position-relative">

          <div class="container position-absolute bottom-0 w-100 px-4 pt-2 pb-4">
              <div class="row bg-light rounded-5 py-2 shadow font-color-default">
                <div class="col-md-3 col-3 text-center">
                  <h1><i class="bi bi-house-heart"></i></h1>
                  <div class="fw-semibold">
                    Home
                  </div>
                </div>
                <div class="col-md-3 col-3 text-center">
                  <h1><i class="bi bi-arrow-through-heart"></i></h1>
                  <div class="fw-semibold">
                    Couple
                  </div>
                </div>
                <div class="col-md-3 col-3 text-center">
                  <h1><i class="bi bi-calendar-heart"></i></h1>
                  <div class="fw-semibold">
                    Date
                  </div>
                </div>
                <div class="col-md-3 col-3 text-center">
                  <h1><i class="bi bi-chat-heart"></i></h1>
                  <div class="fw-semibold">
                    Wishes
                  </div>
                </div>
              </div>
          </div>
          
          <div class="container p-0 content" style="height: 100vh; overflow: auto;">
            <div class="row g-0 overflow-hidden">
              <div class="col-md-12">
                <div class="text-center mb-3">
                  <img src="{{url('/')}}/assets/images/weddings/decoration_1.png" class="img-fluid w-50 " alt="">
                </div>
                <div class="text-center font-color-default">
                  <h2>Kami Tidak Mengundang Anda</h2>
                  <p>Untuk Jangan Datang!</p>
                </div>
                <div class="text-center" style="height: 370px">
                  <div class="position-relative w-100">
                    <div class="position-absolute top-0">
                      <img src="{{url('/')}}/assets/images/weddings/decoration_3.png" class="img-fluid w-100" alt="">
                    </div>
                    <div class="position-absolute end-0 start-0">
                      <img src="https://cdn-cas.orami.co.id/parenting/images/Foto_Prewedding_Casual_pinimg.com.width-800.jpg" style="width: 40%" class="img-fluid rounded-circle mt-5">
                    </div>
                  </div>
                </div>
                <div class="text-center font-color-default">
                  <h1>Andi & Shinta</h1>
                  <p>Kami akan menikah,<br>Dan kami ingin menjadi bagian dari hari,<br>Istimewa kami.</p>
                  <h2>22 Mei 2022</h2>
                </div>
                {{-- Date counting --}}
                <section>
                  <div class="row justify-content-center px-4">
                    <div class="col-md-2 col-3 ps-2 pe-1">
                      <div class="text-center border-color-default font-color-default rounded-3">
                        <h1 class="">00</h1>
                        <p class="fw-semibold">Hari</p>
                      </div>
                    </div>
                    <div class="col-md-2 col-3 pe-1">
                      <div class="text-center border-color-default font-color-default rounded-3">
                        <h1 class="">00</h1>
                        <p class="fw-semibold">Jam</p>
                      </div>
                    </div>
                    <div class="col-md-2 col-3 pe-1">
                      <div class="text-center border-color-default font-color-default rounded-3">
                        <h1 class="">00</h1>
                        <p class="fw-semibold">Menit</p>
                      </div>
                    </div>
                    <div class="col-md-2 col-3 pe-2">
                      <div class="text-center border-color-default font-color-default rounded-3">
                        <h1 class="">70</h1>
                        <p class="fw-semibold">Detik</p>
                      </div>
                    </div>
                  </div>
                </section>
                <div style="height: 800px;">
                </div>
                <div class="row justify-content-between text-end">
                  <img src="{{url('/')}}/assets/images/weddings/decoration_2.png" class="col-md-6 col-6 img-fluid" style="max-width: 35%; height: 35%" alt="">
                  <img src="{{url('/')}}/assets/images/weddings/decoration_4.png" class="col-md-6 col-6 img-fluid" style="max-width: 35%; height: 35%" alt="">
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>

      {{-- <div class="position-fixed"> --}}
        {{-- <div class="row mb-3 justify-content-center">
          <div class="col-md-6 col-sm-12 p-0">
            <div class="row position-absolute  bg-light rounded-5 py-3 shadow">
              <div class="col-md-3 col-sm-3 text-center">
                <i class="bi bi-house"></i>
                <div class="">
                  Home
                </div>
              </div>
              <div class="col-md-3 col-sm-3 text-center">
                <i class="bi bi-house"></i>
                <div class="">
                  Home
                </div>
              </div>
              <div class="col-md-3 col-sm-3 text-center">
                <i class="bi bi-house"></i>
                <div class="">
                  Home
                </div>
              </div>
              <div class="col-md-3 col-sm-3 text-center">
                <i class="bi bi-house"></i>
                <div class="">
                  Home
                </div>
              </div>
            </div>

          </div>
        </div> --}}
      {{-- </div> --}}
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>