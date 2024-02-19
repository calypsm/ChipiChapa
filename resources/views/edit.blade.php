<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{asset('css/edit.css')}}">
</head>
<body>
    <div class="content">
        <div class="navbar">
            <div class="nav-left">
                <img class="logo" src="{{asset('pictures/logo.png')}}" alt="">
               
                <div class="title">
                    <p class="title1">PT ChipiChapa</p>
                    <p>Your Number #1 Software House</p>
                </div>
            </div>

            <div class="nav-right">
                <a href="/">Home</a>
                <a href="/aboutus">About Us</a>
                <a href="/contactus">Contact Us</a>
            </div>
        </div>
        
        <div class="body">
            <p class="judul-contact">UPDATE</p>
                <div class="error">
                    @if($errors->any())
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>     
                    @endif
                </div>

                <form method="POST" class="form" action="{{route('updateD', ['data' => $data])}}">
                    @csrf
                    @method('PUT')
                    <div class="fill">
                        <label for="">Full Name</label>
                        <input name='name' type="text" value="{{$data->name}}">
                    </div>
    
                    <div class="fill">
                        <label for="">Age</label>
                        <input name='age' type="number" value="{{$data->age}}">
                    </div>
    
                    <div class="fill">
                        <label for="">Phone Number</label>
                        <input name='phone' type="number" value="{{$data->phone}}">
                    </div>
    
                    <div class="messages">
                        <label for="">Address</label>
                        <input name='address' type="text" value="{{$data->address}}">
                    </div>
    
                    <div class="button-submit">
                        <button type="submit">Update</button>
                    </div>
                </form>
        </div>

        <div class="footer">
            <div class="footer-left">
                <img class="logo-bwh" src="{{asset('pictures/logo.png')}}" alt="">
               
                <div class="title-bwh">
                    <p class="title1-bwh">PT ChipiChapa</p>
                    <p>Your Number #1 Software House</p>
                </div>
            </div>

            <div class="footer-right">
                <p class="ql">Quick Links</p>
                <div class="quick">
                    <a class="bwh" href="/">Home</a>
                    <a class="bwh" href="/aboutus">About Us</a>
                    <a class="bwh" href="/contactus">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>