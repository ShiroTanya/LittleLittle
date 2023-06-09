<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="{{asset('frontend/css/global.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/css/checkout.css')}}"/>
    <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&display=swap"
  />
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sigmar&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="thanh-ton">
      <img class="frame-icon11" alt="" src="{{ asset ('frontend/img/frame10.svg')}}" />

      <div class="frame8">
        <img class="group-icon19" alt="" src="{{ asset ('frontend/img/group11.svg')}}" />

        <img class="group-icon20" alt="" src="{{ asset ('frontend/img/group12.svg')}}" />

        

        <form action="{{URL::to('/checkout-success')}}" method="POST">
          @csrf

        <div class="s-tin-thanh-ton">
          <b class="s-tin-thanh">Số tiền thanh toán</b>
          <div class="vn-wrapper">
            <div class="nguyen-thi-ngoc">{{number_format($totalAmount, 0, `,` , `.`)}} VNĐ</div>
          </div>
        </div>
        <div class="s-tin-thanh-ton-parent">
          <div class="s-tin-thanh-ton1">
            <b class="s-tin-thanh">Số thẻ</b>
            <div class="wrapper">
              <input style="border: none" class="nguyen-thi-ngoc" type="text" name="payment_account_number" required placeholder="Số thẻ"  >
            </div>
          </div>
          <div class="s-tin-thanh-ton1">
            <b class="s-tin-thanh">Họ tên chủ thẻ</b>
            <div class="wrapper">
              <input style="border:hidden" class="nguyen-thi-ngoc" type="text" name="payment_account_name" required placeholder="Họ và tên">
            </div>
          </div>
          <div class="s-tin-thanh-ton1">
            <b class="s-tin-thanh">Ngày hết hạn</b>
            <div class="frame-parent13">
              <div class="container">
                <input style="border:hidden" class="nguyen-thi-ngoc" type="month" name="payment_expired_date" required placeholder="Ngày hết hạn"  >
              </div>
              <img
                class="frame-icon12"
                alt=""
                src="{{ asset ('frontend/img/frame11.svg')}}"
                id="frame1"
              />
            </div>
          </div>
          <div class="s-tin-thanh-ton4">
            <b class="s-tin-thanh">CVV/CVC</b>
            <div class="wrapper1">
              <input style="border:hidden; width: 75%" class="nguyen-thi-ngoc" type="password" name="payment_cvc" required placeholder="CVC">
            </div>
          </div>
        </div>

        <button type="submit" class="frame9">
          <img class="group-icon21" alt="" src="{{ asset ('frontend/img/group2.svg')}}" />
          <div class="thanh-ton1">Thanh toán</div>
        </button>

      </form>


        <div class="s-lng-v1">
          <b class="s-tin-thanh">Số lượng vé</b>
          <div class="frame-parent14">
            <div class="wrapper2">
              <div class="nguyen-thi-ngoc">{{$show_order_details->order_quantity}}</div>
            </div>
            <div class="v">vé</div>
          </div>
        </div>
        <div class="ngy-s-dng5">
          <b class="s-tin-thanh">Ngày sử dụng</b>
          <div class="wrapper3">
            <div class="nguyen-thi-ngoc">{{$show_order_details->order_date_use}}</div>
          </div>
        </div>
        <div class="thng-tin-lin-h">
          <b class="thng-tin-lin">Thông tin liên hệ</b>
          <div class="nguyn-th-ngc-tuyn-wrapper">
            <div class="nguyen-thi-ngoc">{{$show_order_details->order_customer_name}}</div>
          </div>
        </div>
        <div class="in-thoi">
          <b class="s-tin-thanh">Điện thoại</b>
          <div class="vn-wrapper">
            <div class="nguyen-thi-ngoc">{{$show_order_details->order_customer_phone}}</div>
          </div>
        </div>
        <div class="email">
          <b class="s-tin-thanh">Email</b>
          <div class="nguyn-th-ngc-tuyn-wrapper">
            <div class="nguyen-thi-ngoc">{{$show_order_details->order_customer_email}}</div>
          </div>
        </div>
        <img class="vector-icon8" alt="" src="{{ asset ('frontend/img/vector8.svg')}}" />
      </div>


      
      <div class="thanh-ton2">Thanh toán</div>
      <div class="group-parent8">
        <img class="group-icon21" alt="" src="{{ asset ('frontend/img/group13.svg')}}" />

        <div class="v-cng-">VÉ CỔNG - {{$ticket_full_name}}</div>
      </div>

      


      <div class="group-parent9">
        <img class="group-icon21" alt="" src="{{ asset ('frontend/img/group13.svg')}}" />

        <div class="thng-tin-thanh">THÔNG TIN THANH TOÁN</div>
      </div>
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
      <img
        class="trini-arnold-votay1-2-icon"
        alt=""
        src="{{ asset ('frontend/img/trini-arnold-votay1-2@2x.png')}}"
      />
    </div>

    <div id="calendarContainer" class="popup-overlay" style="display: none">
      <div class="calendar">
        <div class="month-selector">
          <div class="arrows">
            <img class="previous-icon" alt="" src="{{ asset ('frontend/img/previous.svg')}}" />

            <b class="thng-5-2021">Tháng 5, 2021</b>
            <img class="previous-icon" alt="" src="{{ asset ('frontend/img/next.svg')}}" />
          </div>
        </div>
        <div class="calendar-events">
          <div class="weekdays">
            <b class="cn">CN</b>
            <b class="t2">T2</b>
            <b class="t3">T3</b>
            <b class="t4">T4</b>
            <b class="t5">T5</b>
            <b class="t6">T6</b>
            <b class="t7">T7</b>
          </div>
          <div class="week-01">
            <div class="div12">1</div>
            <div class="div13">2</div>
            <div class="div14">3</div>
            <div class="div15">1</div>
            <div class="div16">2</div>
            <div class="div17">3</div>
            <div class="div18">4</div>
          </div>
          <div class="week-02">
            <div class="div19">5</div>
            <div class="div20">6</div>
            <div class="div21">7</div>
            <img
              class="current-day-icon"
              alt=""
              src="{{ asset ('frontend/img/current-day.svg')}}"
            />

            <div class="div22">8</div>
            <div class="div23">9</div>
            <div class="div24">10</div>
            <div class="div25">11</div>
          </div>
          <div class="week-03">
            <div class="div26">12</div>
            <div class="div27">13</div>
            <div class="div28">14</div>
            <div class="div15">15</div>
            <div class="div30">16</div>
            <div class="div31">17</div>
            <div class="div32">18</div>
          </div>
          <div class="week-04">
            <div class="div26">19</div>
            <div class="div34">20</div>
            <div class="div35">21</div>
            <div class="div36">22</div>
            <div class="div30">23</div>
            <div class="div17">24</div>
            <div class="div32">25</div>
          </div>
          <div class="week-05">
            <div class="div26">26</div>
            <div class="div27">27</div>
            <div class="div42">28</div>
            <div class="div15">29</div>
            <div class="div44">30</div>
            <div class="div45">31</div>
            <div class="div46">30</div>
          </div>
        </div>
      </div>
    </div>

    <script>
      var frameContainer = document.getElementById("frameContainer");
      if (frameContainer) {
        frameContainer.addEventListener("click", function (e) {
          window.location.href = "./ThanhTonThnhCng.html";
        });
      }
      
      var frame1 = document.getElementById("frame1");
      if (frame1) {
        frame1.addEventListener("click", function () {
          var popup = document.getElementById("calendarContainer");
          if (!popup) return;
          var popupStyle = popup.style;
          if (popupStyle) {
            popupStyle.display = "flex";
            popupStyle.zIndex = 100;
            popupStyle.backgroundColor = "rgba(113, 113, 113, 0.3)";
            popupStyle.alignItems = "center";
            popupStyle.justifyContent = "center";
          }
          popup.setAttribute("closable", "");
      
          var onClick =
            popup.onClick ||
            function (e) {
              if (e.target === popup && popup.hasAttribute("closable")) {
                popupStyle.display = "none";
              }
            };
          popup.addEventListener("click", onClick);
        });
      }
      
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
