@extends('layout')

@section('title', 'Корзина')

@section('main')

        <section class="grow">
            @foreach ($monitors as $p)
                <article>
                    <a href="/monitor/{{ $p->id }}" class="preview">
                        <img src="{{ $p->image }}" width="200" height="200">
                    </a>

                    <a href="/?brand[]={{ $p->brand->id }}">{{ $p->brand->name }}</a>
                    <a href="/monitor/{{ $p->id }}"><h4>{{ $p->model }}</h4></a>
                    <div class="h-panel">
                        <i>{{ $p->tip }}</i>
                        <b>{{ $p->price }} руб.</b>
                    </div>
                    <div class="h-panel">
                        <a href="/cart/minus/{{ $p->id }}">-</a>
                        <center>{{ $cart[$p->id] }}</center>
                        <a href="/cart/plus/{{ $p->id }}">+</a>
                    </div>

                    <div class="h-panel">
                        <a href="/cart/remove/{{ $p->id }}">Убрать</a>
                    </div>
                </article>
            @endforeach
        </section>
    
        <section class="sidebar order">
            <h2>Заказ</h2>
            <h3>На сумму {{ $price }} руб.</h3>
            
                    <a href="/cart/clear" class="opacity">Сбросить</a>
                </div>
            </form>
        </section>

        
@endsection
