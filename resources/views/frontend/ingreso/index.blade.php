@extends('layouts.web')

@section('content')
<div class=text-center>
    <h1 class="text-3xl text-gray-700 mb-2 uppercase">Ingresos</h1>
</div>

<x-complement.status/>

<livewire:ingreso.index />

@endsection

@section('script')
<script>

</script>

@endsection