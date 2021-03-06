@extends('layouts.app')

@section('navbar')
    @auth
        <x-navbar.link href="{{ route('weights.by-user', auth()->user()) }}">
            Моя статистика
        </x-navbar.link>

        <x-navbar.link href="{{ route('weights.chart', auth()->user()) }}">
            График изменения веса
        </x-navbar.link>

        <x-navbar.link href="{{ route('weights.get-dates', auth()->user()) }}">
            Найти данные за период
        </x-navbar.link>

    @endauth

@endsection
