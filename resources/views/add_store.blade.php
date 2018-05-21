@extends('main')

    @section('content')

        <div class="flex-center position-ref full-height">

            <section class="content">
                <h2 class="title m-b-md">
                    Add Store
                </h2>
                <div class="links">
                    <a href="/">Home</a>
                    <a href="/stores">View Stores</a>
                </div>

                <hr>
                
                <div>
                    <form method="POST" action="/add_store/post">

                        {{ csrf_field() }}

                        Name:<br>
                        <input type="text" name="name" value="">
                        <br>
                        Street address:<br>
                        <input type="text" name="address" value="">
                        <br>
                        City:<br>
                        <input type="text" name="city" value="">
                        <br>
                        State:<br>
                        <input type="text" name="state" value="">
                        <br>
                        Zip:<br>
                        <input type="text" name="zip" value="">
                        <br>
                        Telephone:<br>
                        <input type="text" name="phone" value="">
                        <br><br>
                        <input type="submit" value="Submit">
                    </form> 
                </div>
            </section>
            
        </div>
        
    @endsection

