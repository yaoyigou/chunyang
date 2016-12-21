<div class="row cl">
    <label class="form-label col-xs-4 col-sm-3">
        @if(isset($attributes['red'])&&$attributes['red']==1)
        <span class="c-red">*</span>
        @endif
        {{$text or  trans('common'.$name)}}：</label>
    <div class="formControls col-xs-8 col-sm-9">
        {!! Form::text($name, $value,['class'=>'input-text','id'=>$name,'nullmsg'=>isset($attributes['nullmsg'])?$attributes['nullmsg']:'']) !!}
    </div>
</div>