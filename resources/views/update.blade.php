<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{asset('css/update.css')}}">
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
        
        <main class="table">
            <section class="table_header">
                <h1>List of Employees to Update</h1>
            </section>

            <section class="table_body">
                <table>
                    <thead>
                        <tr>
                            <td class="text">ID</td>
                            <td class="text">Name</td>
                            <td class="text">Age</td>
                            <td class="text">Phone Number</td>
                            <td class="text">Address</td>
                            <td class="text">Edit</td>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach ($displayAll as $data)
                        <tr>
                            <td>{{$data->id}}</td>
                            <td>{{$data->name}}</td>
                            <td>{{$data->age}}</td>
                            <td>{{$data->phone}}</td>
                            <td>{{$data->address}}</td>     
                            <td>
                                <a class="edit" href="{{route('edit', ['data' => $data])}}">Edit</a>
                            </td>               
                        </tr>                 
                        @endforeach
                    </tbody>
                </table>                
            </section>
        </main>

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