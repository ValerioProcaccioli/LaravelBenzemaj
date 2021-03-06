@extends('layouts.staff')
@section('title', 'Inserisci Prodotto')
@section('content')

<h2>Aggiungi una nuova Sottocategoria</h2>
{{Form::open(array('route' => 'upCategory', 'id' => 'form', 'files' => true, 'class' => 'c-form')) }}

<div class="form-group">
    {{Form::label('name','Tipo',['class' => 'form-label'])}}
    {{Form::text('name', '', ['class' => 'form-control'])}}
    @if ($errors->first('name'))
    <ul>
        @foreach ($errors->get('name') as $message)
        <li>{{ $message }}</li>
        @endforeach
    </ul>
    @endif
</div>

<div class="form-group">
    {{Form::label('parId', 'Categoria', ['class' => 'form-control'])}}
    {{Form::select('parId', $parId, '', ['class' => 'form-control', 'id' => 'catId'])}}
</div>

<div class="form-group">
    {{ Form::submit('Aggiungi Nuova Categoria', ['class' => 'btn']) }}
</div> 
{{ Form::close() }}

@endsection
