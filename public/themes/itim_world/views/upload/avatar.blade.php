
          {{ Form::open(array('url' => 'avatar', 'files'=> true,'name' => 'upload','id' => 'upload')) }}
            {{ Form::file('avatar',array('id'=>'avatar','data-show-upload','false')) }}
          {{ Form::close()}}
