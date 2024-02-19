<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{asset('css/contactus.css')}}">
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
            <p class="judul-contact">Contact Information</p>
                <form class="form" action="/">
                    <div class="fill">
                        <label for="">Full Name</label>
                        <input type="text" required>
                    </div>
    
                    <div class="fill">
                        <label for="">Email</label>
                        <input type="text" required>
                    </div>
    
                    <div class="fill">
                        <label for="">Phone Number</label>
                        <input type="number" required>
                    </div>
    
                    <div class="messages">
                        <label for="">Messages</label>
                        <textarea name="messages" id="messages" placeholder="Enter your messages here..." style="height:135px" required></textarea>
                    </div>
    
                    <div class="method">
                        <div class="pref">
                            <p>Preferred Contact Method</p>
                        </div>
                        
                        <div class="check">
                            <div class="option">
                                <input type="checkbox" name="" id="">
                                <label for="">Email</label>
                            </div>
            
                            <div class="option">
                                <input type="checkbox" name="" id="">
                                <label for="">Phone Number</label>
                            </div>
                        </div>                    
                    </div>
                    <div class="button-submit">
                        <button type="submit">Submit</button>
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