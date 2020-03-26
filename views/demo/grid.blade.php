@extends('rapyd::demo.demo')

@section('title','DataGrid')

@section('body')

    <h1>DataGrid</h1>
    <p>

        {!! $grid !!}
        {!! Documenter::showMethod("Writecl\\Rapyd\\Demo\\DemoController", "getGrid") !!}
        {!! Documenter::showCode("writecl/rapyd/views/demo/grid.blade.php") !!}
    </p>
@stop
