@extends('layouts.front')

@section('content')

    <div class="mb-3 d-flex align-items-center justify-content-between">
        <h1 class="mb-0">{{ $title }}</h1>

        <a class="btn btn-success" href="{{ route('weights.create') }}">
            Добавить
        </a>

    </div>

    @if($weights->isEmpty())

        <div class="alert alert-secondary">
            Нет данных
        </div>

    @else
        @include('components.datatable')
        @include('components.flash-message')

        @if($weights->hasPages())
            <div class="mt-3">
                {{ $weights->links() }}
            </div>
        @endif

    @endif

@endsection
