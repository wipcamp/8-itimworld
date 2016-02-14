<div class="content">
    <div class="row">
        <div class="col-sm-12">
            <div style="min-height: 500px">
                <div style="min-height: 200px">
                    <h1>MISSION IV</h1>
                    <h2>ถ้าหากน้องได้รับการคัดเลือกให้เข้าร่วมในค่าย WIP Camp #8 น้องคาดหวังว่าจะได้อะไรจากการเข้าร่วมค่ายในครั้งนี้</h2>
                </div>
                <div id="editor">
                    {{ Form::open(array('url' => 'question/mission')) }}
                        <textarea id='mission_answer' placeholder="Type some text" name="mission_answer" class="form-control answer-box">{{ array_get($mission, 'answer') }}</textarea>

                        <button type="submit" class="next" style="float:right; margin:30px">ส่งคำตอบ</button>
                        <a href="javascript:history.back()"><button type="submit" class="next" style="float:right; margin:30px">ย้อนกลับไป</button></a>
                        <input type="hidden" name="mission_id" value="4" />
                    {{ Form::close() }}
                </div>
            </div>



    </div>
</div>
