<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset ('frontend/css/global.css')}}" />
    <link rel="stylesheet" href="{{asset ('frontend/css/home.css')}}" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&display=swap"
    />
    <!-- <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=iCiel Koni:wght@900&display=swap"
    /> -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sigmar&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="trang-ch">
      <div class="frame">
        <img class="bg-icon" alt="" src="{{asset('frontend/img/bg.svg')}}" />

        <img class="image-2-icon" alt="" src="{{asset('frontend/img/image-2@2x.png')}}" />

        <img
          class="converted-02-1-icon"
          alt=""
          src="{{asset('frontend/img/18451-converted02-1@2x.png')}}"
        />

        <img
          class="render-fix-hair-1"
          alt=""
          src="{{asset('frontend/img/render-fix-hair-1@2x.png')}}"
        />

        <img
          class="converted-03-1-icon"
          alt=""
          src="{{asset('frontend/img/18451-converted03-1@2x.png')}}"
        />

        <img
          class="converted-03-2-icon"
          alt=""
          src="{{asset('frontend/img/18451-converted03-2@2x.png')}}"
        />

        <img
          class="converted-04-1-icon"
          alt=""
          src="{{asset('frontend/img/18451-converted04-1@2x.png')}}"
        />

        <img
          class="converted-05-1-icon"
          alt=""
          src="{{asset('frontend/img/18451-converted05-1@2x.png')}}"
        />

        <div class="m-sen">ĐẦM SEN</div>
        <div class="park">PARK</div>
        <div class="frame1">
          <img class="group-icon" alt="" src="{{asset('frontend/img/group.svg')}}" />

          <img class="group-icon1" alt="" src="{{asset('frontend/img/group1.svg')}}" />

          <img class="vector-icon" alt="" src="{{asset('frontend/img/vector.svg')}}" />

          <form method="post" action="{{URL::to('/order')}}">
            @csrf
            <div class="frame-group">
                <select style="border:hidden" class="gi-gia-nh-wrapper" name="ticket_id" id="package" required>
                    <div class="gi-gia-nh">
                      <option value="1">Gói gia đình</option>
                      <option value="2">Gói cá nhân</option>
                    </div>
                </select>
                <img class="frame-icon" alt="" src="{{ asset('frontend/img/frame.svg') }}" />
                <input style="border:hidden" class="ngy-s-dng-wrapper" type="date" name="order_date_use" id="date" required placeholder="yyyy-mm-dd" min="{{ date('Y-m-d') }}">
                <input style="border:hidden" class="h-v-tn-wrapper" type="text" name="order_customer_name" id="fullname" required placeholder="Họ tên">
                <input style="border:hidden" class="s-in-thoi-wrapper" type="tel" name="order_customer_phone" id="phone" pattern="[0-9]{10,11}" required placeholder="Số điện thoại">
                <input style="border:hidden" class="a-ch-email-wrapper" type="email" name="order_customer_email" id="email" required placeholder="Email">
                <img class="frame-icon1" alt="" src="{{ asset('frontend/img/frame1.svg') }}" id="frame1" />
                <input style="border:hidden" class="s-lng-v-wrapper" type="number" name="order_quantity" id="number" min="1" max="10" required placeholder="Số lượng vé">
                
            </div>
            <button type="submit" id="group2">
                <div class="frame2">
                    <img class="group-icon2" alt="" src="{{ asset('frontend/img/group2.svg') }}" />
                    <div class="t-v">Đặt vé</div>
                </div>
            </button>
        </form>


          <div class="lorem-ipsum-dolor-container">
            <p class="lorem-ipsum-dolor">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              Suspendisse ac mollis justo. Etiam volutpat tellus quis risus
              volutpat, ut posuere ex facilisis.
            </p>
            <p class="lorem-ipsum-dolor">&nbsp;</p>
            <p class="lorem-ipsum-dolor">
              Suspendisse iaculis libero lobortis condimentum gravida. Aenean
              auctor iaculis risus, lobortis molestie lectus consequat a.
            </p>
          </div>
          <div class="frame-container">
            <img class="frame-icon2" alt="" src="{{asset('frontend/img/frame2.svg')}}" />

            <b class="lorem-ipsum-dolor1"
              >Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </b>
          </div>
          <div class="frame-div">
            <img class="frame-icon2" alt="" src="{{asset('frontend/img/frame2.svg')}}" />

            <b class="lorem-ipsum-dolor1"
              >Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </b>
          </div>
          <div class="frame-parent1">
            <img class="frame-icon2" alt="" src="{{asset('frontend/img/frame3.svg')}}" />

            <b class="lorem-ipsum-dolor1"
              >Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </b>
          </div>
          <div class="frame-parent2">
            <img class="frame-icon2" alt="" src="{{asset('frontend/img/frame4.svg')}}" />

            <b class="lorem-ipsum-dolor1"
              >Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </b>
          </div>
        </div>
        <div class="group-parent">
          <img class="group-icon3" alt="" src="{{asset('frontend/img/group3.svg')}}" />

          <div class="v-ca-bn">VÉ CỦA BẠN</div>
        </div>
        <img
          class="converted-06-1-icon"
          alt=""
          src="{{asset('frontend/img/18451-converted06-1@2x.png')}}"
        />

        <img
          class="lisa-arnold-lay-do-f2-3-icon"
          alt=""
          src="{{asset('frontend/img/lisa-arnold-lay-do-f2-3@2x.png')}}"
        />
      </div>
      <div class="navigation2">
        <img class="navigation-inner" alt="" src="{{ asset('frontend/img/vector-2.svg')}}" />
  
        <div class="frame-parent11">
          <div class="tags-container">
            <div class="tags7">
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

    <div id="calendarContainer" class="popup-overlay" style="display: none">
      <div class="calendar">
        <div class="month-selector">
          <div class="arrows">
            <img class="previous-icon" alt="" src="{{asset('frontend/img/previous.svg')}}" />

            <b class="thng-5-2021">Tháng 5, 2021</b>
            <img class="previous-icon" alt="" src="{{asset('frontend/img/next.svg')}}" />
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
              src="{{asset('frontend/img/current-day.svg')}}"
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
      
      var group2 = document.getElementById("group2");
      if (group2) {
        group2.addEventListener("click", function (e) {
          window.location.href = "/checkout";
        });
      }
      
      var tagsContainer1 = document.getElementById("tagsContainer1");
      if (tagsContainer1) {
        tagsContainer1.addEventListener("click", function (e) {
          window.location.href = "/event";
        });
      }
      
      var tagsContainer2 = document.getElementById("tagsContainer2");
      if (tagsContainer2) {
        tagsContainer2.addEventListener("click", function (e) {
          window.location.href = "/contact";
        });
      }
      </script>
  </body>
</html>










