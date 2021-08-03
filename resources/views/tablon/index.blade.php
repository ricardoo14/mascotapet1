@extends('layouts.plantilla')
@section('content')
    <div class="container">


        <div class="row">

            <div class="col-md-6">

                <h2 style="text-shadow:1px 1px 1px #ffff" class="text-black">Mascotas adoptables</h2>
            </div>

            <div class="col-md-6"></div>
        </div>



        @livewire('tablon-component')


    </div>
@endsection
