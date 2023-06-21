@extends('layout')

@section('title', 'Таблица "Поставщики"')

@section('main')
<form action=" " method="post">
  @csrf
  
  <div class="form-group">
    <label for="kod_podr">Введите Код</label>
    <input type="text" name="kod_podr"   id="kod_podr" class="form-control">
  </div>

  <div class="form-group">
    <label for="fam_sotr">Введите Фамилию</label>
    <input type="text" name="fam_sotr"  id="fam_sotr" class="form-control">
  </div>

  <div class="form-group">
    <label for="kod_tov">Введите Код_товара</label>
    <input type="text" name="kod_tov" id="kod_tov" class="form-control">
  </div>

  <div class="form-group">
    <label for="gorod">Введите Город</label>
    <input type="text" name="gorod"  id="gorod" class="form-control">
  </div>

  <div class="form-group">
    <label for="adres">Введите Адрес</label>
    <input type="text" name="adres"  id="adres" class="form-control">
  </div>

  <div class="form-group">
    <label for="strana">Введите Страна</label>
    <input type="text" name="strana"  id="strana" class="form-control">
  </div>

  <div class="form-group">
    <label for="ves">Введите Вес</label>
    <input type="text" name="ves"  id="ves" class="form-control">
  </div>

  <div class="form-group">
    <label for="sum">Введите Сумма</label>
    <input type="text" name="sum"  id="sum" class="form-control">
  </div>
  <button type="submit" class="btn btn-success">Отправить</button>
  
</form>
<div class="container-fluid">
<a class="navbar-brand" href="/part">
        Таблица
</a>
</div>
@endsection