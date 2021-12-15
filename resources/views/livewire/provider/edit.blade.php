@extends('layouts.web')

@section('content')

<x-form.provider.edit :provider="$provider"/>

<x-complement.status />

@endsection

@section('script')
<script>

</script>
@endsection