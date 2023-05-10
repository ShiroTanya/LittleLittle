<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="{{ asset ('frontend/css/global.css')}}" />
    <link rel="stylesheet" href="{{ asset ('frontend/css/eventdetails.css')}}" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=iCiel Koni:wght@900&display=swap"
    />
  </head>
  <body>
    <div class="s-kin">
      <div class="frame3">
        <div class="render-1"></div>
      </div>
      <div class="bg">
        <img class="group-icon5" alt="" src="./public/group5.svg" />

        <div class="frame4"></div>
        <div class="frame5"></div>
        <div class="s-kin-1">Sự kiện 1</div>
      </div>
      <img class="group-icon6" alt="" src="./public/group6.svg" />

      <div class="khung-cha-v">
        <img class="group-icon7" alt="" src="./public/group7.svg" />

        <div class="group-container">
          <div class="frame-parent3">
            <div class="rectangle-wrapper">
              <img
                class="frame-item"
                alt=""
                src="./public/rectangle-1@2x.png"
              />
            </div>
            <div class="time-parent">
              <div class="time">
                <img
                  class="icons-calendar"
                  alt=""
                  src="./public/icons--calendar.svg"
                />

                <div class="div">30/05/2021 - 01/06/2021</div>
              </div>
              <div class="m-sen-park">Đầm sen Park</div>
              <b class="vn">25.000 VNĐ</b>
            </div>
          </div>
          <div class="frame-parent4">
            <div class="rectangle-container">
              <img
                class="frame-inner"
                alt=""
                src="./public/rectangle-11@2x.png"
              />
            </div>
            <div class="lorem-ipsum-is">
              Lorem Ipsum is not simply random text. It has roots in a piece of
              classical Latin literature from 45 BC, making it over 2000 years
              old. words, consectetur, from a Lorem Ipsum passage, and going
              through the cites of the word in classical literature,
            </div>
          </div>
          <div class="frame-parent5">
            <div class="rectangle-frame">
              <img
                class="frame-inner"
                alt=""
                src="./public/rectangle-11@2x.png"
              />
            </div>
            <div class="lorem-ipsum-is1">
              Lorem Ipsum is not simply random text. It has roots in a piece of
              classical Latin literature from 45 BC, making it over 2000 years
              old. words, consectetur, from a Lorem Ipsum passage, and going
              through the cites of the word in classical literature,
            </div>
          </div>
          <div class="lorem-ipsum-is-container">
            <span class="lorem-ipsum-is-container1">
              <b class="lorem-ipsum">Lorem Ipsum</b>
              <span class="is-simply-dummy">
                is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever
                since the 1500s, when an unknown printer took a galley of type
                and scrambled it to make a type specimen book. It has survived
                not only five centuries, but also the leap into electronic sdsd
                typesetting, remaining cssa essentially unchanged. It was
                popularised in the 1960s with the release of Letraset sheets
                containing Lorem Ipsum passages, of Lorem Ipsum.</span
              >
            </span>
          </div>
        </div>
      </div>
      <img class="frame-icon6" alt="" src="./public/frame5.svg" />

      <img class="frame-icon7" alt="" src="./public/frame6.svg" />

      <div class="navigation1">
        <img class="navigation-item" alt="" src="./public/vector-2.svg" />

        <div class="frame-parent6">
          <div class="tags-group">
            <div class="tags3" id="tagsContainer">
              <b class="sample-text3">Trang chủ</b>
            </div>
            <div class="tags4">
              <b class="sample-text3">Sự kiện</b>
            </div>
            <div class="tags3" id="tagsContainer2">
              <b class="sample-text3">Liên hệ</b>
            </div>
          </div>
          <div class="group-parent1">
            <img class="group-icon8" alt="" src="./public/group4.svg" />

            <b class="sample-text3">0123456789</b>
          </div>
        </div>
        <img
          class="little-little-logo-ngang-11"
          alt=""
          src="./public/little--little-logo-ngang-1@2x.png"
        />
      </div>
    </div>

    <script>
      var tagsContainer = document.getElementById("tagsContainer");
      if (tagsContainer) {
        tagsContainer.addEventListener("click", function (e) {
          window.location.href = "./TrangCh.html";
        });
      }
      
      var tagsContainer2 = document.getElementById("tagsContainer2");
      if (tagsContainer2) {
        tagsContainer2.addEventListener("click", function (e) {
          window.location.href = "./ContactUs.html";
        });
      }
      </script>
  </body>
</html>
