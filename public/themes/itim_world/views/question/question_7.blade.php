<div class="content">
    <div class="row">
        <div class="col-sm-12">
            <div style="min-height: 500px">
                <div>
                    <h1>MISSION VII</h1>
                    <h2>รูปภาพที่ปรากฎนั้นคือรูปอะไร</h2>
                    <div class="row">
                      <div class="col-sm-6">
                        <center>
                          <img src="<?php echo url(""); ?>/themes/itim_world/assets/question/asd4adZasd212rGaDVB.png" alt="" style="margin-top: 20%;" width="500">
                        </center>
                      </div>
                    <div class="col-sm-6">
                    <div id="editor">
                          {{ Form::open(array('url' => 'question/mission')) }}
                              <textarea id='mission_answer' placeholder="Type some text" name="mission_answer" class="form-control answer-box">{{ array_get($mission, 'answer') }}</textarea>
                              <button type="submit" class="next" style="float:right; margin:30px">ส่งคำตอบ</button>
                              <a href="javascript:history.back()"><button type="submit" class="next" style="float:right; margin:30px">ย้อนกลับไป</button></a>
                              <input type="hidden" name="mission_id" value="7" />
                          {{ Form::close() }}
                    </div>
                    </div>
                </div>
            </div>


          </div>
    </div>
</div>
