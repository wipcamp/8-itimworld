<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo url(""); ?>/themes/itim_world/assets/css/froala_editor.css">
<link rel="stylesheet" href="<?php echo url(""); ?>/themes/itim_world/assets/css/froala_style.css">
<link rel="stylesheet" href="<?php echo url(""); ?>/themes/itim_world/assets/css/plugins/code_view.css">
<link rel="stylesheet" href="<?php echo url(""); ?>/themes/itim_world/assets/css/plugins/image_manager.css">
<link rel="stylesheet" href="<?php echo url(""); ?>/themes/itim_world/assets/css/plugins/image.css">
<link rel="stylesheet" href="<?php echo url(""); ?>/themes/itim_world/assets/css/plugins/table.css">
<link rel="stylesheet" href="<?php echo url(""); ?>/themes/itim_world/assets/css/plugins/video.css">
<link rel="stylesheet" href="<?php echo url(""); ?>/themes/itim_world/assets/css/plugins/colors.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">
<style>
    body {
      text-align: center;
    }
    div#editor {
      width: 81%;
      margin: auto;
      text-align: left;
    }
    textarea{
      display: block;
    }
  </style>
<script src="https://code.jquery.com/jquery-1.12.0.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>
<script type="text/javascript" src="<?php echo url(""); ?>/themes/itim_world/assets/js/froala_editor.min.js"></script>
<script type="text/javascript" src="<?php echo url(""); ?>/themes/itim_world/assets/js/plugins/align.min.js"></script>
<script type="text/javascript" src="<?php echo url(""); ?>/themes/itim_world/assets/js/plugins/code_beautifier.min.js"></script>
<script type="text/javascript" src="<?php echo url(""); ?>/themes/itim_world/assets/js/plugins/code_view.min.js"></script>
<script type="text/javascript" src="<?php echo url(""); ?>/themes/itim_world/assets/js/plugins/image.min.js"></script>
<script type="text/javascript" src="<?php echo url(""); ?>/themes/itim_world/assets/js/plugins/image_manager.min.js"></script>
<script type="text/javascript" src="<?php echo url(""); ?>/themes/itim_world/assets/js/plugins/link.min.js"></script>
<script type="text/javascript" src="<?php echo url(""); ?>/themes/itim_world/assets/js/plugins/lists.min.js"></script>
<script type="text/javascript" src="<?php echo url(""); ?>/themes/itim_world/assets/js/plugins/paragraph_format.min.js"></script>
<script type="text/javascript" src="<?php echo url(""); ?>/themes/itim_world/assets/js/plugins/paragraph_style.min.js"></script>
<script type="text/javascript" src="<?php echo url(""); ?>/themes/itim_world/assets/js/plugins/font_family.min.js"></script>
<script type="text/javascript" src="<?php echo url(""); ?>/themes/itim_world/assets/js/plugins/table.min.js"></script>
<script type="text/javascript" src="<?php echo url(""); ?>/themes/itim_world/assets/js/plugins/video.min.js"></script>
<script type="text/javascript" src="<?php echo url(""); ?>/themes/itim_world/assets/js/plugins/url.min.js"></script>
<script type="text/javascript" src="<?php echo url(""); ?>/themes/itim_world/assets/js/plugins/entities.min.js"></script>
<script type="text/javascript" src="<?php echo url(""); ?>/themes/itim_world/assets/js/plugins/colors.min.js"></script>
<script>
    $(function(){
      $('#mission1')
        .on('froalaEditor.initialized', function (e, editor) {
          $('#mission1').parents('form').on('submit', function () {
            console.log($('#mission1').val());
            return false;
          })
        })
        .froalaEditor({enter: $.FroalaEditor.ENTER_P, placeholderText: null})

        $('#mission2')
        .on('froalaEditor.initialized', function (e, editor) {
          $('#mission2').parents('form').on('submit', function () {
            console.log($('#mission2').val());
            return false;
          })
        })
        .froalaEditor({enter: $.FroalaEditor.ENTER_P, placeholderText: null})
        $('#mission3')
        .on('froalaEditor.initialized', function (e, editor) {
          $('#mission3').parents('form').on('submit', function () {
            console.log($('#mission3').val());
            return false;
          })
        })
        .froalaEditor({enter: $.FroalaEditor.ENTER_P, placeholderText: null})
        $('#mission4')
        .on('froalaEditor.initialized', function (e, editor) {
          $('#mission4').parents('form').on('submit', function () {
            console.log($('#mission4').val());
            return false;
          })
        })
        .froalaEditor({enter: $.FroalaEditor.ENTER_P, placeholderText: null})
        $('#mission6')
        .on('froalaEditor.initialized', function (e, editor) {
          $('#mission6').parents('form').on('submit', function () {
            console.log($('#mission6').val());
            return false;
          })
        })
        .froalaEditor({enter: $.FroalaEditor.ENTER_P, placeholderText: null})
    });
    $('#mission1').froalaEditor({
      imageInsertButtons: ['imageBack', '|', 'imageByURL'];
      theme: dark;
    });
    $('#mission2').froalaEditor({
      imageInsertButtons: ['imageBack', '|', 'imageByURL'];
      theme: dark;
    });
    $('#mission3').froalaEditor({
      imageInsertButtons: ['imageBack', '|', 'imageByURL'];
      theme: dark;
    });
    $('#mission4').froalaEditor({
      imageInsertButtons: ['imageBack', '|', 'imageByURL'];
      theme: dark;
    });
    $('#mission6').froalaEditor({
      imageInsertButtons: ['imageBack', '|', 'imageByURL'];
      theme: dark;
    });
</script>

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
                    <div id="editor">
                      <form method="get" action="google">
                        <textarea id='mission1' style="margin-top: 30px;" placeholder="Type some text" name="ggg">
                        </textarea>
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
              </li>
              <li data-tag="MISSION II" class="slide">
                 <div class="container">
                   <!-- form start -->
                   <form class="ques-form" id="qs-2" action="#">
                    <h1>MISSION II</h1>
                    <h2>ถ้าระหว่างทำกิจกรรมภายในค่ายถ้าเราเห็นเพื่อนนั่งอยู่เงียบๆคนเดียวไม่ร่วมกิจกรรมใดๆ น้องจะเข้าหาเพื่อนหรือไม่เข้ายังไง เพราะอะไร</h2>
                    <div id="editor">
                      <form method="get" action="google">
                        <textarea id='mission2' style="margin-top: 30px;" placeholder="Type some text" name="ggg">
                        </textarea>
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
              </li>
              <li data-tag="MISSION III" class="slide">
                 <div class="container">
                   <!-- form start -->
                   <form class="ques-form" id="qs-3" action="#">
                    <h1>MISSION III</h1>
                    <h2>ในค่ายวิปแคมป์คร้ังท่ี 8 หากน้องติดอยู่ในห้องคอมพิวเตอร์พร้อมกับ เพื่อนในค่ายอีก 1 คน และมีสายแลนอีก 1 เส้น น้องจะทำอย่างไร</h2>
                    <div id="editor">
                      <form method="get" action="google">
                        <textarea id='mission3' style="margin-top: 30px;" placeholder="Type some text" name="ggg">
                        </textarea>
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
              </li>
              <li data-tag="MISSION IV" class="slide">
                 <div class="container">
                   <!-- form start -->
                   <form class="ques-form" id="qs-4" action="#">
                    <h1>MISSION IV</h1>
                    <h2>ถ้าหากน้องได้รับการคัดเลือกให้เข้าร่วมในค่าย WIP Camp #8
                       น้องคาดหวังว่าจะได้อะไรจากการเข้าร่วมค่ายในครั้งนี้
                    </h2>
                    <div id="editor">
                      <form method="get" action="google">
                        <textarea id='mission4' style="margin-top: 30px;" placeholder="Type some text" name="ggg">
                        </textarea>
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
              </li>
              <li data-tag="MISSION V" class="slide">
                 <div class="container">
                   <!-- form start -->
                   <form class="ques-form" id="qs-5" action="#">
                    <h1>MISSION V</h1>
                    <h2>คำว่าไอทีของน้องคืออะไร</h2>
                    <input type="text" class="form-control" style="font-size:1.4em;"  name="">
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
                    <div id="editor">
                      <form method="get" action="google">
                        <textarea id='mission6' style="margin-top: 30px;" placeholder="Type some text" name="ggg">
                        </textarea>
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
