{!!HTML::style('themes/itim_world/assets/css/bootstrap-responsive.css')!!}
{!!HTML::script('themes/itim_world/assets/js/bootstrap.js')!!}
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
              <img class="img-circle img-responsive" src="assets/img/pro3.png">
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
          <div class="content">
           <div class="container">
               <div class="row" style="margin-top:30px;">
                   <div class="col-sm-10 col-sm-offset-1">
                     <div class="container">
                       <!-- form start -->
                        <h1>MISSION I</h1>
                        <h2>กาลครั้งหนึ่งมีเมืองวิปแคม์อันทันสมัยและสวยสดงดงาม มีวายร้ายออกมาอาละวาด แล้วก็มีซุปเปอร์ฮีโร่ปรากฎตัวขึ้นเพื่อจัดการกับเจ้าวายร้าย ถ้าน้องเป็นซุปเปอร์ฮีโร่ที่มีพลังพิเศษ น้องอยากจะมีพลังพิเศษอะไร เพราะอะไร</h2>
                        <div id="editor">
                          <form method="get" action="google">
                            <textarea id='mission1' style="margin-top: 30px;" placeholder="Type some text" name="ggg" class="form-control">
                              <h1>Textarea</h1>
                              <p>The editor can also be initialized on a textarea.</p>
                            </textarea>
                            <input type="submit">
                          </form>
                        </div>
                        <div class="row">
                          <div class="button-container container">
                            <button type="submit" class="next">next</button>
                            <button class="previous">previous</button>
                          </div>
                        </div>
                      </form>
                     </div>
                   </div>
               </div>
           </div>
       </div>
        </div>
</div>
