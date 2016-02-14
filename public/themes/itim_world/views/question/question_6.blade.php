<div class="content">
    <div class="row">
        <div class="col-sm-12">
            <div style="min-height: 500px">
                <div style="min-height: 200px">
                    <h1>MISSION VI</h1>
                    <h2>จากเสียงนี้เป็นเสียงคลิกเมาส์ของพี่วิปโป้เองแหละ พี่วิปโป้อยากถามว่าพี่วิปโป้คลิกซ้ายหรือคลิกขวา</h2>
                    <div class="row" style="margin-bottom:30px;">
                      <div class="col-sm-6">
                        <center>
                          <iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/246987388&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
                        </center>
                      </div>
                        <div class="col-sm-6">
                <div id="editor">
                    {{ Form::open(array('url' => 'question/mission')) }}
                        <textarea id='mission_answer' placeholder="Type some text" name="mission_answer" class="form-control answer-box">{{ array_get($mission, 'answer') }}</textarea>

                        <button type="submit" class="next" style="float:right; margin:30px">ส่งคำตอบ</button>
                        <a href="javascript:history.back()"><button type="submit" class="next" style="float:right; margin:30px">ย้อนกลับไป</button></a>
                        <input type="hidden" name="mission_id" value="6" />
                        {{ Form::close() }}
                  </div>
                  </div>
              </div>
          </div>


        </div>
  </div>
</div>
