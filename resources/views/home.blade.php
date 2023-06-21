
@extends('layout')

@section('title', 'Каталог мониторов')

@section('main')

    <section class="sidebar">
        <form action="/">
            <input type="text" name="q" value="{{ $_GET['q'] ?? '' }}" placeholder="Поиск..."><br>
            <h3>Бренды </h3>
            @foreach ($brands as $b)
                <label>
                    <input type="checkbox" name="b[]" value="{{ $b->id }}" @checked(in_array($b->id, $_GET['b'] ?? []))>
                    {{ $b->name }}
                </label>
            @endforeach
        
<br>
            <h3>Каталог товаров</h3>
            @foreach (['Монитор ', 'Наушники ', 'Микрофон ', 'Мышь ', 'Колонки '] as $t)
                <label>
                    <input type="checkbox" name="t[]" value="{{ $t }}" @checked(in_array($t, $_GET['t'] ?? []))>
                    {{ $t }}
                </label>
            @endforeach
            <br>
            <div class="h-panel">
                <input type="submit" value="Показать">
                <a href="/" class="opacity">Сбросить</a>
            </div>
        </form>
    </section>
    <section class="grow">
    @foreach ($monitors as $p)
        <article>
            <a href="/monitor/{{ $p['monitor']->id }}" class="preview">
                <img src="{{ $p['monitor']->image }}" width="200" height="200">
            </a>
            <a href="/?brand[]={{ $p['monitor']->brand->id }}">{{ $p['monitor']->brand->name }}</a>
            <a href="/monitor/{{ $p['monitor']->id }}"><h4>{{ $p['monitor']->model }}</h4></a>
            <div class="h-panel">
                <i>{{ $p['monitor']->tip }}</i>
                <b>{{ $p['monitor']->price }} руб.</b>
            </div>
            <div class="h-panel">
                
                @if ($p['inCart'])
                                <a href="/cart/add/{{ $p['monitor']->id }}">Добавить</a>
                <a href="/cart/remove/{{ $p['monitor']->id }}">Убрать</a>
                @else
                <a href="/cart/add/{{ $p['monitor']->id }}">Добавить</a>
                @endif
            </div>
        </article>
    @endforeach
    </section>
@endsection






