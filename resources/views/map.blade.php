@extends('main')

    @section('content')

        <div class="flex-center position-ref full-height">

            <section class="content">
                <h2 class="title m-b-md">
                    Stores
                </h2>
                <div class="links">
                    <a href="/">Home</a>
                    <a href="/add_store">Add Store</a>
                </div>
                
                <hr>

                <div class="container">
                    <div class='row'>
                        
                        <div class="col">
                            {!! $map['html'] !!}
                        </div>
                        <div class="col store_list">
                            @foreach ($stores as $store)
                            <div class="card" style="width: 18rem; margin-bottom: 10px;">
                                <div class="card-body">
                                    <li class='store_info'>
                                        <p> <b>Store:</b>  {{ $store->name }}</p>
                                        <p> <b>Store Address:</b>  {{ $store->address }} {{$store->city}}, {{$store->state}} {{$store->zip}}</p>
                                        <p> <b>Store Telephone:</b>  {{ $store->phone }}</p>
                                        <button type="button" class="btn btn-primary">
                                            <a href="{{ url('store/'.$store->id) }}" style="color:white;">Store Directions </a>
                                        </button>
                                    </li>
                                </div>
                            </div>
                            @endforeach
                        </div>
                
                    </div>
                </div>
            </section>
            
        </div>
        <footer>
                {!! $map['js'] !!}
        </footer>
        
    @endsection

