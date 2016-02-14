<div class="content">
    <div class="row">
        <div class="col-sm-12">
            <div style="min-height: 500px">
                <div style="min-height: 300px">
                    <h1>MISSION VII</h1>
                    <h2>รูปภาพที่ปรากฎนั้นคือรูปอะไร</h2>
                    <center>
                        <img src="<?php echo url(""); ?>/themes/itim_world/assets/question/asd4adZasd212rGaDVB.png" alt="" width="600" />
                    </center>
                </div>
                <div id="editor">
                    {{ Form::open(array('url' => 'question/mission')) }}
                        <textarea id='mission_answer' placeholder="Type some text" name="mission_answer" class="form-control answer-box">{{ array_get($mission, 'answer') }}</textarea>

                        <button type="submit" class="next" style="float:right; margin:30px">ส่งคำตอบ</button>\
                        <input type="hidden" name="mission_id" value="7" />
                    {{ Form::close() }}
                </div>
            </div>



    </div>
</div>
