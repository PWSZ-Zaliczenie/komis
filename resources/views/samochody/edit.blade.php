@extends('layouts.app')

@section('content')
<div class="container">
<h1 class="text-center">Edycja samochodu</h1>
<form class="col-12 col-lg-12" enctype="multipart/form-data" action="{{ route('samochody.update', [$car->id]) }}" method="post" accept-charset="utf-8">
    @csrf
    @method('PATCH')
    <div class="form-group row">
    <div class="form-group col-12">
            <label for="numer_VIN" class="col-form-label">Numer VIN:</label>
            <div>
                <input id="numer_VIN" type="text" class="form-control sqinput" name="numer_VIN" value="{{$car->numer_VIN}}" required autofocus>
                @if ($errors->has('numer_VIN'))
                <span class="help-block">
                    <strong>{{ $errors->first('numer_VIN') }}</strong>
                </span>
                @endif
            </div>
        </div>
    <div class="form-group col-12">
            <label for="marka" class="col-form-label">Marka:</label>
            <div>
                <input id="marka" type="text" class="form-control sqinput" name="marka" value="{{$car->marka}}" required autofocus>
                @if ($errors->has('marka'))
                <span class="help-block">
                    <strong>{{ $errors->first('marka') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="form-group col-12">
            <label for="model" class="col-form-label">Model:</label>
            <div>
                <input id="model" type="text" class="form-control sqinput" name="model" value="{{$car->model}}" required autofocus>
                @if ($errors->has('model'))
                <span class="help-block">
                    <strong>{{ $errors->first('model') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="form-group col-12">
            <label for="rok_produkcji" class="col-form-label">Rok produkcji:</label>
            <div>
                <input id="rok_produkcji" type="number" class="form-control sqinput" name="rok_produkcji" value="{{$car->rok_produkcji}}" required autofocus>
                @if ($errors->has('rok_produkcji'))
                <span class="help-block">
                    <strong>{{ $errors->first('rok_produkcji') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="form-group col-12">
            <label for="przebieg" class="col-form-label">Przebieg:</label>
            <div>
                <input id="przebieg" type="number" class="form-control sqinput" name="przebieg" value="{{$car->przebieg}}" required autofocus>
                @if ($errors->has('przebieg'))
                <span class="help-block">
                    <strong>{{ $errors->first('przebieg') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="form-group col-12">
            <label for="kolor" class="col-form-label">Kolor:</label>
            <div>
                <input id="kolor" type="text" class="form-control sqinput" name="kolor" value="{{$car->kolor}}" required autofocus>
                @if ($errors->has('kolor'))
                <span class="help-block">
                    <strong>{{ $errors->first('kolor') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="form-group col-12">
            <label for="data_pierwszej_rejestracji" class="col-form-label">Data pierwszej rejestracji:</label>
            <div>
                <input id="data_pierwszej_rejestracji" type="date" class="form-control sqinput" name="data_pierwszej_rejestracji" value="{{$car->data_pierwszej_rejestracji}}" required autofocus>
                @if ($errors->has('data_pierwszej_rejestracji'))
                <span class="help-block">
                    <strong>{{ $errors->first('data_pierwszej_rejestracji') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="form-group col-12">
            <label for="skrzynia_biegow" class="col-form-label">Skrzynia biegów:</label>
            <div>
                <select class="form-control sqinput" name="skrzynia_biegow">
                   
                    <option value="manualna" {!! $car->skrzynia_biegow == 'manualna' ? 'selected' : '' !!}>manualna</option>
                    <option value="automatyczna" {!! $car->skrzynia_biegow == 'automatyczna' ? 'selected' : '' !!}>automatyczna</option>
                    
                </select>
            </div>
        </div>
        <div class="form-group col-12">
            <label for="rodzaj_paliwa" class="col-form-label">Rodzaj paliwa:</label>
            <div>
                <input id="kolor" type="text" class="form-control sqinput" name="rodzaj_paliwa" value="{{$car->rodzaj_paliwa}}" required autofocus>
                @if ($errors->has('rodzaj_paliwa'))
                <span class="help-block">
                    <strong>{{ $errors->first('rodzaj_paliwa') }}</strong>
                </span>
                @endif
                </select>
            </div>
        </div>
        <div class="form-group col-12">
            <label for="pojemnosc" class="col-form-label">Pojemność skokowa (cm<sup>3</sup>)</label>
            <div>
            <input id="pojemnosc" type="text" class="form-control sqinput" name="pojemnosc" value="{{$car->pojemnosc}}" required autofocus>
                @if ($errors->has('pojemnosc'))
                <span class="help-block">
                    <strong>{{ $errors->first('pojemnosc') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="form-check">
        <label for="czy_nowy">
                    <input type="checkbox" name="czy_nowy" class="czy_nowy" {!! $car->czy_nowy ? 'checked' : '' !!}> Czy nowy?
                </label>
                @if ($errors->has('czy_nowy'))
                <span class="help-block">
                    <strong>{{ $errors->first('czy_nowy') }}</strong>
                </span>
                @endif
        </div>
        <div class="form-group col-12">
            <label for="cena" class="col-form-label">Cena:</label>
            <div>
                <input id="cena" type="number" class="form-control sqinput" name="cena" value="{{$car->cena}}" required autofocus>
                @if ($errors->has('cena'))
                <span class="help-block">
                    <strong>{{ $errors->first('cena') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="form-group col-12">
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Dodaj</button>
            </div>
        </div>
    </div>
</form>
</div>
@endsection
