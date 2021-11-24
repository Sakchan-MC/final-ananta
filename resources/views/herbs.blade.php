@extends('layouts.app')
@section('content')

<div class="container home-section">
    <h2>รายชื่อสมุนไพร</h2>
    @foreach ($herb as $herb)
    <div class="animation-element slide-right">

        <div class="row border-herb">
            <div class="col-3">
                <img src="{{ asset('admin/images/herbs/' . $herb->image) }}" style="width:200px;height:200px;">
            </div>
            <div class="col ">
                <span class="size-large ">{{$herb->name}}</span><br>

                <span class="size-large">{{$herb->description}}</span>
            </div>

        </div>
    </div>

    @endforeach
</div>


@endsection
