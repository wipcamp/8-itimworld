<script src="https://code.jquery.com/jquery-1.12.0.js"></script>

      <div class="container-fluid">
        <!-- Scene -->
        <div id="scene">
          <div class="layer layout">
            <div class="town">
              <div class="town-front"></div>
            </div>
          </div>
          <div class="layer layout">
            <div class="town">
              <div class="town-mid"></div>
            </div>
          </div>
          <div class="layer layout" style="z-index:-1;">
            <div class="town">
              <div class="town-back"></div>
            </div>
          </div>
        </div>
        <!-- Header -->
        <div class="header">
          <div class="container">
            <div class="col-xs-2 avatar">
              <img class="img-circle img-responsive" src="<?php echo url(""); ?>/themes/itim_world/assets/img/pro3.png">
            </div>
            <div class="col-xs-6">
              <h1>สวัสดีครับ น้องออฟ</h1>
              <h3>WIP ID 12309</h3>
            </div>
            <div class="col-xs-4 logout">
              <div class="logout-btn">
                <button type="button" class="logout">ออกจากระบบ</button>
              </div>
            </div>
          </div>
        </div>
        <!--Content-->
        <div class="content">
          <div class="row">
            <div class="container">
              <div class="pagination-container full-width-container">
                <div class="container">
                  <div class="pagination"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <ul class="slide-container container">
              <li data-tag="MISSION I" class="slide">
                 <div class="container">
                   <!-- form start -->
                   <form class="ques-form" id="qs-1" action="#">
                    <h1>MISSION I</h1>
                    <h2>กาลครั้งหนึ่งมีเมืองวิปแคม์อันทันสมัยและสวยสดงดงาม มีวายร้ายออกมาอาละวาด แล้วก็มีซุปเปอร์ฮีโร่ปรากฎตัวขึ้นเพื่อจัดการกับเจ้าวายร้าย ถ้าน้องเป็นซุปเปอร์ฮีโร่ที่มีพลังพิเศษ น้องอยากจะมีพลังพิเศษอะไร เพราะอะไร</h2>
                    <textarea name="" id="" cols="30" rows="10" class="form-control" style="font-size:1.4em;" ></textarea>
                    <div class="row">
                      <div class="button-container container">
                        <button type="submit" class="next">next</button>
                        <button class="previous">previous</button>
                      </div>
                    </div>
                  </form>
                 </div>
              </li>
              <li data-tag="MISSION II" class="slide">
                 <div class="container">
                   <!-- form start -->
                   <form class="ques-form" id="qs-2" action="#">
                    <h1>MISSION II</h1>
                    <h2>ถ้าระหว่างทำกิจกรรมภายในค่ายถ้าเราเห็นเพื่อนนั่งอยู่เงียบๆคนเดียวไม่ร่วมกิจกรรมใดๆ น้องจะเข้าหาเพื่อนหรือไม่เข้ายังไง เพราะอะไร</h2>
                    <textarea name="" id="" cols="30" rows="10" class="form-control" style="font-size:1.4em;" ></textarea>
                    <div class="row">
                      <div class="button-container container">
                        <button type="submit" class="next">next</button>
                        <button class="previous">previous</button>
                      </div>
                    </div>
                  </form>
                 </div>
              </li>
              <li data-tag="MISSION III" class="slide">
                 <div class="container">
                   <!-- form start -->
                   <form class="ques-form" id="qs-3" action="#">
                    <h1>MISSION III</h1>
                    <h2>ในค่ายวิปแคมป์คร้ังท่ี 8 หากน้องติดอยู่ในห้องคอมพิวเตอร์พร้อมกับ เพื่อนในค่ายอีก 1 คน และมีสายแลนอีก 1 เส้น น้องจะทำอย่างไร</h2>
                    <textarea name="" id="" cols="30" rows="10" class="form-control" style="font-size:1.4em;" ></textarea>
                    <div class="row">
                      <div class="button-container container">
                        <button type="submit" class="next">next</button>
                        <button class="previous">previous</button>
                      </div>
                    </div>
                  </form>
                 </div>
              </li>
              <li data-tag="MISSION IV" class="slide">
                 <div class="container">
                   <!-- form start -->
                   <form class="ques-form" id="qs-4" action="#">
                    <h1>MISSION IV</h1>
                    <h2>ถ้าหากน้องได้รับการคัดเลือกให้เข้าร่วมในค่าย WIP Camp #8
                       น้องคาดหวังว่าจะได้อะไรจากการเข้าร่วมค่ายในครั้งนี้
                    </h2>
                    <textarea name="" id="" cols="30" rows="10" class="form-control" style="font-size:1.4em;" ></textarea>
                    <div class="row">
                      <div class="button-container container">
                        <button type="submit" class="next">next</button>
                        <button class="previous">previous</button>
                      </div>
                    </div>
                  </form>
                 </div>
              </li>
              <li data-tag="MISSION V" class="slide">
                 <div class="container">
                   <!-- form start -->
                   <form class="ques-form" id="qs-5" action="#">
                    <h1>MISSION V</h1>
                    <h2>คำว่าไอทีของน้องคืออะไร</h2>
                    <textarea name="" id="" cols="30" rows="5" class="form-control" style="font-size:1.4em;" ></textarea>
                    <h2>เสียงคลิกเมาส์ข้างซ้ายหรือขวา</h2>
                    <audio src="<?php echo url(""); ?>/themes/itim_world/assets/question/c55c5bfca70fa38768473fa7cc2a4007.m4a">
                    </audio>
                    <input type="text" class="form-control" style="font-size:1.4em;"  name="">
                    <h2>รูปภาพที่ปรากฎนั้นคือรูปอะไร</h2>
                    <img src="<?php echo url(""); ?>/themes/itim_world/assets/question/asd4adZasd212rGaDVB.png" alt="" />
                    <input type="text" class="form-control" style="font-size:1.4em;"  name="">
                    <div class="row">
                      <div class="button-container container">
                        <button type="submit" class="next">next</button>
                        <button class="previous">previous</button>
                      </div>
                    </div>
                  </form>
                 </div>
              </li>
              <li data-tag="MISSION VI" class="slide">
                 <div class="container">
                   <!-- form start -->
                   <form class="ques-form" id="qs-6" action="#">
                    <h1>MISSION VI</h1>
                    <h2>จาก source code ในรูปเป็นโปรแกรมอะไร เอาไว้ใช้ทำอะไร</h2>
                    <img src="<?php echo url(""); ?>/themes/itim_world/assets/question/c55c5bfca70fa38768473fa7cc2a4007.png" alt="" />
                    <textarea name="" id="" cols="30" rows="10" class="form-control" style="font-size:1.4em;" ></textarea>
                    <div class="row">
                      <div class="button-container container">
                        <button type="submit" class="next">next</button>
                        <button class="previous">previous</button>
                      </div>
                    </div>
                  </form>
                 </div>
              </li>
              <li data-tag="Confirm" class="slide">
                 <div class="container">
                   <!-- form start -->
                   <form class="ques-form" id="qs-confirm" action="#">
                    <h1>Confirm your application.</h1>
                    <h2>Information about this section.</h2>
                    <div class="row">
                      <div class="button-container container">
                        <button type="submit" class="next">next</button>
                        <button class="previous">previous</button>
                      </div>
                    </div>
                  </form>
                 </div>
              </li>
            </ul>
          </div>
        </div>
        <!-- Javascript -->

  </body>
</html>
