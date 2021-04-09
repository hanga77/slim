@extends('layouts.master')

@section('botton')
    <button class="btn inline font-extrabold float-right leading-tight hover:shadow-xl" style="color:#15bb3c; display:inline-block">
        <a href="{{ route('contributors.create') }}" style="display: inline"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="30" style="display: inline">
            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
        </svg> Nouveau contribuable</a>
    </button>
@stop

@section('container')
    @livewire('contributors.index')
@stop
