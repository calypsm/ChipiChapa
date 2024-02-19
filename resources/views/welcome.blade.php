<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{asset('css/view.css')}}">
</head>
<body>
    <main>
        <section>
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
            
            <div class="banner">
                <div class="banner-text">
                    <p>EVOLVE WITH TECHNOLOGY</p>
                </div>
            </div>
    
            <div class="page2">
                <div class="display scroll">
                    <img src="{{asset('pictures/display.png')}}" alt="">
                    <div class="dsp">
                        <a class="press" href="/displayList">DISPLAY</a>
                        <h3>Display a list of employees</h3>
                    </div>
                </div>
        
                <div class="add scroll">
                    <img src="{{asset('pictures/add.png')}}" alt="">
                    <div class="ad">
                        <a class="press" href="/add">ADD</a>
                        <h3>Add a new employee</h3>
                    </div>
                </div>
        
                <div class="update scroll">
                    <img src="{{asset('pictures/update.png')}}" alt="">
                    <div class="updt">
                        <a class="press" href="/update">UPDATE</a>
                        <h3>Update existing employee data</h3>
                    </div>
                </div>
        
                <div class="delete scroll">
                    <img src="{{asset('pictures/delete.png')}}" alt="">
                    <div class="dlt">
                        <a class="press" href="/delete">DELETE</a>
                        <h3>Delete an employee who no longer works at the company</h3>
                    </div>
                </div>
            </div>   
            
            <footer class="footer">
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
            </footer>
        </section>

    </main>
</body>
</html>