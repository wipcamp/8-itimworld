<div class="content">
    <div class="row">
        <div class="col-sm-12">
            <div style="min-height: 500px">
                <div style="min-height: 200px">
                    <h1>MISSION II</h1>
                    <h2>ถ้าระหว่างทำกิจกรรมภายในค่ายถ้าเราเห็นเพื่อนนั่งอยู่เงียบๆคนเดียวไม่ร่วมกิจกรรมใดๆ น้องจะเข้าหาเพื่อนหรือไม่เข้ายังไง เพราะอะไร</h2>
                </div>
                <div id="editor">
                    {{ Form::open(array('url' => 'question/mission')) }}
                        <textarea id='mission_answer' placeholder="Type some text" name="mission_answer" class="form-control answer-box">{{ array_get($mission, 'answer') }}</textarea>

                        <button type="submit" class="next" style="float:right; margin:30px">ส่งคำตอบ</button>\
                        <input type="hidden" name="mission_id" value="2" />
                    {{ Form::close() }}
                </div>
            </div>



    </div>
</div>
