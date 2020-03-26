@extends('rapyd::demo.demo')

@section('title','DataFilter')

@section('body')

    @include('rapyd::demo.menu_filter')

    <h1>DataFilter</h1>

    <p>
        {!! $filter !!}
        {!! $grid !!}
        {!! Documenter::showMethod("Writecl\\Rapyd\\Demo\\DemoController", "getFilter") !!}
        {!! Documenter::showCode("writecl/rapyd/views/demo/filtergrid.blade.php") !!}
    </p>

@stop
