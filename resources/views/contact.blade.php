<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="initial-scale=1, width=device-width" />
  <link rel="stylesheet" href="{{ asset ('frontend/css/contact.css')}}" />
  <link rel="stylesheet" href="{{ asset ('frontend/css/global.css')}}" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&display=swap" />
  {{--
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=iCiel Koni:wght@900&display=swap" /> --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Sigmar&display=swap" rel="stylesheet">
</head>

<body>
  <div class="contact-us">
    <div class="frame10">
      <img class="bg-icon2" alt="" src="{{ asset('frontend/img/bg2.svg')}}" />

      <div class="lin-h">Liên hệ</div>
    </div>
    <div class="frame11">
      <form action="{{URL::to('/send-contact')}}" method="POST">
        @csrf

        <img class="vector-icon12" alt="" src="{{ asset('frontend/img/vector12.svg') }}" />
        <div class="group">
            <img class="vector-icon9" alt="" src="{{ asset('frontend/img/vector9.svg') }}" />

            <img class="vector-icon10" alt="" src="{{ asset('frontend/img/vector10.svg') }}" />

            <img class="vector-icon11" alt="" src="{{ asset('frontend/img/vector11.svg') }}" />
        </div>

        <textarea class="li-nhn-wrapper" id="message_contact" name="contact_msg" rows="5" placeholder="Lời nhắn"style="border:none;font-size:16px" ></textarea>

        <div class="frame-parent16">
            <div class="frame-parent17">
                <input type="text" class="tn-wrapper" id="name_contact" name="contact_name" placeholder="Tên" style="border:none;" >
                <input type="text" class="tn-wrapper" id="phone_contact" name="contact_phone" placeholder="Số điện thoại"style="border:none;" >
            </div>
            <div class="frame-parent17">
                <input type="email" class="email-wrapper" id="email_contact" name="contact_email" placeholder="Email"style="border:none;" >
                <input type="text" class="a-ch-wrapper" id="address_contact" name="contact_address" placeholder="Địa chỉ"style="border:none;" >
            </div>
        </div>

        <button type="submit">
            <div class="frame12" id="frameContainer1">
                <img class="group-icon25" alt="" src="{{ asset('frontend/img/group2.svg') }}" />

                <div class="gi-lin-h-container1">
                    <span class="span2">Gửi liên hệ
                </div>
            </div>
        </button>
    </form>
    
      <div class="lorem-ipsum-dolor5">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
        ac mollis justo. Etiam volutpat tellus quis risus volutpat, ut posuere
        ex facilisis.
      </div>
      <div class="a-ch1">
        <img class="group-icon26" alt="" src="{{ asset('frontend/img/group14.svg')}}" />

        <img class="adress-1-icon" alt="" src="{{ asset('frontend/img/adress-1.svg')}}" />

        <div class="a-ch-parent">
          <div class="a-ch2">Địa chỉ:</div>
          <div class="u-c-phng">
            86/33 Âu Cơ, Phường 9, Quận Tân Bình, TP. Hồ Chí Minh
          </div>
        </div>
      </div>
      <div class="a-ch3">
        <img class="group-icon25" alt="" src="{{ asset('frontend/img/group14.svg')}}" />

        <div class="email-parent">
          <div class="email3">Email:</div>
          <div class="investigateyour-sitecom">investigate@your-site.com</div>
        </div>
        <img class="mail-inbox-app-1-icon" alt="" src="{{ asset('frontend/img/mailinboxapp-1.svg')}}" />
      </div>
      <div class="in-thoi2">
        <img class="group-icon25" alt="" src="{{ asset('frontend/img/group14.svg')}}" />

        <div class="telephone-2-parent">
          <img class="telephone-2-icon" alt="" src="{{ asset('frontend/img/telephone-2.svg')}}" />

          <div class="in-thoi-parent">
            <div class="in-thoi3">Điện thoại</div>
            <div class="investigateyour-sitecom">+84 145 689 798</div>
          </div>
        </div>
      </div>
    </div>
    <img class="alex-ar-lay-do-shadow-1" alt="" src="{{ asset('frontend/img/alex-ar-lay-do-shadow-1@2x.png')}}" />

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
          <div class="tags7" id="tagsContainer2">
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

  <div id="giLinHThnhCng" class="popup-overlay" style="display: none">
    <div class="gi-lin-h-thnh-cng">
      <div class="gi-lin-h-container">
        <p class="gi-lin-h">Gửi liên hệ thành công.</p>
        <p class="gi-lin-h">
          Vui lòng kiên nhẫn đợi phản hồi từ chúng tôi, bạn nhé!
        </p>
      </div>
      <img class="x-icon" alt="" src="{{ asset('frontend/img/x.svg')}}" />
    </div>
  </div>


  <script>
    var frameContainer1 = document.getElementById("frameContainer1");
      if (frameContainer1) {
        frameContainer1.addEventListener("click", function () {
          var popup = document.getElementById("giLinHThnhCng");
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
          window.location.href = "/home";
        });
      }
      
      var tagsContainer1 = document.getElementById("tagsContainer1");
      if (tagsContainer1) {
        tagsContainer1.addEventListener("click", function (e) {
          window.location.href = "/event";
        });
      }
  </script>
</body>

</html>