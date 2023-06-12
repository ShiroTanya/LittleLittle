<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="{{ asset ('frontend/css/global.css')}}" />
    <link rel="stylesheet" href="{{ asset ('frontend/css/payment_success.css')}}" />
    <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&display=swap"
  />
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sigmar&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="thanh-ton-thnh-cng">
      <div class="frame7">
        <img class="bg-icon1" alt="" src="{{ asset ('frontend/img/bg1.svg') }}" />

        
        <div class="khung-cha-v1">
          <img class="group-icon15" alt="" src="{{ asset ('frontend/img/group7.svg') }}" />

          @for($i = 1; $i <= $ticketCount; $i++)
          <div class="v-1">
            <div class="v-11" style="left: {{ ($i - 1) * 320 }}px">
              <p class="image-3-icon">{!! QrCode::size(300)->generate($qrcode_url) !!}</p>

              <b class="alt20210501">{{$show_payment->payment_code}}</b>
              <b class="v-cng">VÉ CỔNG</b>
              <div class="ngy-s-dng1">Ngày sử dụng: {{$date_use}}</div>
              <b class="b3">---</b>
              <img class="tick-1-icon" alt="" src="{{ asset ('frontend/img/tick-1.svg') }}" />
            </div>
          </div>
          @endfor

          <img
            class="previous-btn-icon1"
            alt=""
            src="{{ asset ('frontend/img/previous-btn1.svg')}}"
          />
          <img class="next-btn-icon1" alt="" src="{{ asset ('frontend/img/next-btn1.svg') }}" />




          <div class="s-lng-12">Số lượng: {{$ticketCount}} vé</div>
          <div class="trang-13">Trang 1/1</div>
        </div>
        <div class="btn-xem-chi-tit4">
          <div class="xem-chi-tit8">Xem chi tiết</div>
          <div class="xem-chi-tit-btn4">
            <img class="group-icon16" alt="" src="{{ asset ('frontend/img/group10.svg') }}" />


            <a style="color:white" target="_blank" href="{{url('/print-ticket/'.$show_payment->payment_code)}}">
              <div class="ti-v">
                <span class="ti-v-txt-container"
                  >Tải vé
                </span>
              </div>
            </a>


            
          </div>
        </div>
        <div class="btn-xem-chi-tit5">
          <div class="xem-chi-tit8">Xem chi tiết</div>
          <div class="xem-chi-tit-btn4">
            <img class="group-icon16" alt="" src="{{ asset ('frontend/img/group10.svg') }}" />

            <a style="color:white" target="_blank" href="{{route('send_mail_customer')}}"">
              <div class="ti-v">
                <span class="ti-v-txt-container"
                  >Gửi mail
                </span>
              </div>
            </a>

          </div>
        </div>
        <img
          class="alvin-arnold-votay1-1-icon"
          alt=""
          src="{{ asset ('frontend/img/alvin-arnold-votay1-1@2x.png') }}"
        />
      </div>
      <div class="thanh-ton-thnh">Thanh toán thành công</div>
      <div class="navigation2">
        <img class="navigation-inner" alt="" src="{{ asset('frontend/img/vector-2.svg')}}" />
  
        <div class="frame-parent11">
          <div class="tags-container">
            <div class="tags6" id="tagsContainer">
              <b class="s-kin-13">Trang chủ</b>
            </div>
            <div class="tags6" id="tagsContainer1">
              <b class="s-kin-13">Sự kiện</b>
            </div>
            <div class="tags6" id="tagsContainer2">
              <b class="s-kin-13">Liên hệ</b>
            </div>
          </div>
          <div class="group-parent6">
            <img class="group-icon14" alt="" src="{{ asset('frontend/img/group4.svg')}}" />
  
            <b class="s-kin-13">0123456789</b>
          </div>
        </div>
        <img class="little-little-logo-ngang-12" alt=""
          src="{{ asset('frontend/img/little--little-logo-ngang-1@2x.png')}}" />
      </div>
    </div>

    <script>
      var tagsContainer = document.getElementById("tagsContainer");
      if (tagsContainer) {
        tagsContainer.addEventListener("click", function (e) {
          window.location.href = "./home";
        });
      }
      
      var tagsContainer1 = document.getElementById("tagsContainer1");
      if (tagsContainer1) {
        tagsContainer1.addEventListener("click", function (e) {
          window.location.href = "./event";
        });
      }
      
      var tagsContainer2 = document.getElementById("tagsContainer2");
      if (tagsContainer2) {
        tagsContainer2.addEventListener("click", function (e) {
          window.location.href = "./contact";
        });
      }
      </script>
  </body>
</html>
