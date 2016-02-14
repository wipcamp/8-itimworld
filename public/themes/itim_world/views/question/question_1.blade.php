<div class="content">
    <div class="row">
        <div class="col-sm-12">
            <div style="min-height: 500px">
                <div style="min-height: 200px">
                    <h1>MISSION I</h1>
                    <h2>กาลครั้งหนึ่งมีเมืองวิปแคม์อันทันสมัยและสวยสดงดงาม มีวายร้ายออกมาอาละวาด แล้วก็มีซุปเปอร์ฮีโร่ปรากฎตัวขึ้นเพื่อจัดการกับเจ้าวายร้าย ถ้าน้องเป็นซุปเปอร์ฮีโร่ที่มีพลังพิเศษ น้องอยากจะมีพลังพิเศษอะไร เพราะอะไร</h2>
                </div>
                <div id="editor">
                    {{ Form::open(array('url' => 'question/mission')) }}
                        <textarea id='mission_answer' placeholder="Type some text" name="mission_answer" class="form-control answer-box">{{ array_get($mission, 'answer') }}</textarea>

                        <button type="submit" class="next" style="float:right; margin:3px">ส่งคำตอบ</button>
                        <a href="javascript:history.back()"><button type="submit" class="next" style="float:right; margin:3px">ย้อนกลับไป</button></a>
                        <input type="hidden" name="mission_id" value="1" />
                    {{ Form::close() }}
                </div>
            </div>
    </div>
</div>
