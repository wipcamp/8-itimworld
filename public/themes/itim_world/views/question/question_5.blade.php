<div class="content">
    <div class="row">
        <div class="col-sm-12">
            <div style="min-height: 500px">
                <div style="min-height: 200px">
                    <h1>MISSION V</h1>
                    <h2>คำว่าไอทีของน้องคืออะไร</h2>
                </div>
                <div id="editor">
                    {{ Form::open(array('url' => 'question/mission')) }}
                        <textarea id='mission_answer' placeholder="Type some text" name="mission_answer" class="form-control answer-box">{{ array_get($mission, 'answer') }}</textarea>

                        <button type="submit" class="next" style="float:right; margin:30px">ส่งคำตอบ</button>
                        <a href="javascript:history.back()"><button type="submit" class="next" style="float:right; margin:30px">ย้อนกลับไป</button></a>
                        <input type="hidden" name="mission_id" value="5" />
                    {{ Form::close() }}
                </div>
            </div>
    </div>
</div>
