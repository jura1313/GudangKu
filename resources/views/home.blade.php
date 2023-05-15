@extends('template.template')


@section('content')
<div style="float">
<div class="container-fluid text-center mt-5 mb-5 pt-5 pb-5 bg-dark bg-opacity-100 text-white">

    <h2 class="fw-bolder mb-2">WELCOME TO OUR STORAGE</h2>
    <h5 class="mb-4">Your Trust Is Our Happiness</h5>

<a href="{{ url("/show") }}"><button type="button" class="btn-sm btn btn-outline-light  fw-bolder">Check The Storage</button></a>
</div>


<div class="container mt-5">
    <h4>CATALOGUE :</h4>
</div>

</div>


@endsection