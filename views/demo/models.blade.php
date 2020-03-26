@extends('rapyd::demo.master')

@section('title','Models')

@section('body')
    <h1>Models Used</h1>


    <p>
        These are the entities used in this demo:
        <br />

    </p>

    {!! Documenter::showCode("writecl/rapyd/src/Demo/Article.php") !!}
    {!! Documenter::showCode("writecl/rapyd/src/Demo/ArticleDetail.php") !!}
    {!! Documenter::showCode("writecl/rapyd/src/Demo/Author.php") !!}
    {!! Documenter::showCode("writecl/rapyd/src/Demo/Category.php") !!}
    {!! Documenter::showCode("writecl/rapyd/src/Demo/Comment.php") !!}

@stop


@section('content')

    @include('rapyd::demo.menu')

    @yield('body')

@stop
