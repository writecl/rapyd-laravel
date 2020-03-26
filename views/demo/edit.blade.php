@extends('rapyd::demo.demo')

@section('title','DataEdit')

@section('body')

    <h1>DataEdit</h1>
    <p>

        {!! $edit !!}
        {!! Documenter::showMethod("Writecl\\Rapyd\\Demo\\DemoController", "anyEdit") !!}
        {!! Documenter::showCode("writecl/rapyd/views/demo/edit.blade.php") !!}
    </p>
@stop
