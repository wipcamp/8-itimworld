 {{ Form::open(array('url' => 'document', 'files'=> true)) }}
 <table border='1'>
  <tr>
    <td>ลำดับ</td>
    <td>เอกสาร</td>
    <td>อัปโหลด</td>
    <td>สถานะ</td>
  </tr>
  <tr>
    <td>1.</td>
    <td>ปพ.1</td>
    <td>@if(isset($schooldoc) && $schooldoc=="1")  <!--ถ้าผ่านแสดงลิงค์เข้าไฟล์-->
      <a href="upload/{{$wip_id}}/schooldoc.{{$schooldoc_type}}" target="_blank">ปพ.1</a> 
      @elseif(isset($schooldoc) && $schooldoc !="0")
      {{Form::file('schooldoc')}}
      {{$schooldoc_case}}    <!--แสดงเคสที่ไม่ผ่าน-->
      @else   
      {{Form::file('schooldoc')}}  <!--ไม่มีค่าหรือยังไม่ตรวจแสดงให้อัปโหลด-->
      @endif
      <!--แสดง ERROR-->
    @if(isset($errors))
     <br><p style="color:red;">{{$errors->first()}}</p>
     @endif
    </td>
    
    <td>@if(isset($schooldoc))
        @if($schooldoc == "0")
        <p style="color:red;">พบข้อผิดพลาด</p>
        @elseif($schooldoc == "1")
        <p style="color:green;">ผ่านการตรวจสอบ</p>
        @elseif($schooldoc == "2")
        <p style="color:yellow;">รอการตรวจสอบ</p>
        @endif
      @else
      <p>กรุณาอัปโหลดไฟล์</p>
      @endif

    </td>
  </tr>
  <tr>
    <td>2.</td>
    <td>ใบขออนุญาตผู้ปกครอง</td>
     <td>@if(isset($parentdoc) && $parentdoc=="1")  <!--ถ้าผ่านแสดงลิงค์เข้าไฟล์-->
      <a href="upload/{{$wip_id}}/parentdoc.{{$parentdoc_type}}" target="_blank">ปพ.1</a> 
      @elseif(isset($parentdoc) && $parentdoc !="0")
      {{Form::file('parentdoc')}}
      {{$parentdoc_case}}    <!--แสดงเคสที่ไม่ผ่าน-->
      @else   
      {{Form::file('parentdoc')}}  <!--ไม่มีค่าหรือยังไม่ตรวจแสดงให้อัปโหลด-->
      @endif
    </td>
    <td>@if(isset($parentdoc))
      
        @if($parentdoc == "0")
        <p style="color:red;">พบข้อผิดพลาด</p>
        @elseif($parentdoc == "1")
        <p style="color:green;">ผ่านการตรวจสอบ</p>
        @elseif($parentdoc == "2")
        <p style="color:yellow;">รอการตรวจสอบ</p>
        @endif
      @else
      <p>กรุณาอัปโหลดไฟล์</p>
      @endif
    </td>
    </tr>
  </table>
 {{ Form::submit('Click Me!')}}
  {{ Form::close() }}