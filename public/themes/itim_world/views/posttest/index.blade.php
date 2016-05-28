<div class="bg-posttest">
  <div class="bg-overlay"></div>
  <!-- Header -->
  <div class="header posttest-header">
     <div class="container">
        <div class="col-xs-1 avatar">
           <img class="img-circle img-responsive" src="<?php echo url(""); ?>/themes/itim_world/assets/img/pro3.png">
        </div>
        <div class="col-xs-4">
           <h1>น้อง{{ !empty($profile['nickname']) ? $profile['nickname'] : $profile['name_th'].' '.$profile['surname_th'] }}</h1>
           <h2>WIP ID {{ array_get($profile, 'wip_id', 'XXXXXX')}}</h2>
        </div>
        {{-- <div class="col-xs-2">
           <center>
             <h2>เหลือเวลา</h2>
             <h1>20:00</h1>
           </center>
        </div> --}}
        <div class="col-xs-7 process">
          <h1><span class="process-count">0</span>/20</h1>
          <h2>ข้อสอบทั้งหมด</h2>
        </div>
     </div>
  </div>

  <div class="container">
    <div class="content waiting_page">
      <center>
        <h1 style="font-size:7em">รอ</h1></center>
    </div>

    <div class="content post-test">
      <center><h1>คำถามทดสอบท้ายค่าย</h1></center>
      <div class="row" margin-top:30px;>
        {{ Form::open(array('url' => 'posttest/result')) }}
        <div class="col-sm-12 question-box">
          @foreach ($questions as $question)
          <!-- Q1 -->
          <div class="question q-q-{{ $question['id'] }}">
            <h1>QUESTION {{ $question['id'] }}</h1>
            <h2>{{ $question['question'] }}</h2>
            <div class="choice-list">
              <label class="choice choice-1 q-{{ $question['id'] }}" data-qno="{{ $question['id'] }}">
                <input type="radio" name="q-{{ $question['id'] }}" value="1">
                <!-- <div class="circle"></div> -->
                <p>{{ $question['choice1'] }}</p>
              </label>
              <label class="choice choice-2 q-{{ $question['id'] }}" data-qno="{{ $question['id'] }}">
                <input type="radio" name="q-{{ $question['id'] }}" value="2">
                <!-- <div class="circle"></div> -->
                <p>{{ $question['choice2'] }}</p>
              </label>
              <label class="choice choice-3 q-{{ $question['id'] }}" data-qno="{{ $question['id'] }}">
                <input type="radio" name="q-{{ $question['id'] }}" value="3">
                <!-- <div class="circle"></div> -->
                <p>{{ $question['choice3'] }}</p>
              </label>
              <label class="choice choice-4 q-{{ $question['id'] }}" data-qno="{{ $question['id'] }}">
                <input type="radio" name="q-{{ $question['id'] }}" value="4">
                <!-- <div class="circle"></div> -->
                <p>{{ $question['choice4'] }}</p>
              </label>
            </div>
          </div>

          @endforeach
          <div class="sending">
            <button type="submit" class="" style="float:right; margin:3px">ส่งคำตอบ</button>
          </div>

        {{ Form::close() }}
        </div>
      </div>
    </div>

  </div>
</div>
