@extends('main')

    @section('content')

        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                   Store
                </div>

                <div class="links">
                    <a href="/">Home</a>
                    <a href="/stores">View Stores</a>
                    <a href="/add_store">Add Store</a>
                </div>
                <br>
                <hr>
                <div class="container">
                    <div>
                        <h1 class="text-center">{{ $store->name }}</h1>
                    </div>
                    
                    <div>
                        {!! $map['html'] !!}
                    </div>
                </div>

            </div>

        </div>

        <footer>
                {!! $map['js'] !!}
        </footer>

    @endsection
