@extends('common.index')
@section('content')
    <article class="page-container">
        {!! Form::open(['route'=>['role.update',$role->id],'method'=>'put','class'=>'form form-horizontal','id'=>'role_edit']) !!}
        {!! Form::bsText('name','角色名称',$role->name,['red'=>1,'nullmsg'=>'角色名不能为空']) !!}
        {!! Form::bsText('description','描述',$role->description) !!}
        {!! Form::close() !!}
    </article>
@endsection