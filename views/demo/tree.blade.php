@extends('rapyd::demo.demo')

@section('title','DataTree')

@section('body')

    <h1>DataTree</h1>
        {!! $tree !!}
    <p>

        {!! Documenter::showMethod("Writecl\\Rapyd\\Demo\\DemoController", "anyDatatree") !!}
        {!! Documenter::showMethod("Writecl\\Rapyd\\Demo\\DemoController", "anyMenuedit") !!}
        {!! Documenter::showCode("writecl/rapyd/views/demo/tree.blade.php") !!}
    </p>
@stop
