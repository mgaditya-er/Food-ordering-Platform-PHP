<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Awesome-Food-Services</title>
    <link rel="stylesheet" href="mycss.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Festive&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
    <link rel="icon" href="awesome.webp" type="image/jpeg">
    <script>
        function setCookie(cname,cvalue,exdays) {
          const d = new Date();
          d.setTime(d.getTime() + (exdays*24*60*60*1000));
          let expires = "expires=" + d.toGMTString();
          document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        }
        
        function getCookie(cname) {
          let name = cname + "=";
          let decodedCookie = decodeURIComponent(document.cookie);
          let ca = decodedCookie.split(';');
          for(let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) == ' ') {
              c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
              return c.substring(name.length, c.length);
            }
          }
          return "";
        }
        
        function checkCookie() {
          let user = getCookie("username");
          if (user != "") {
            alert("Welcome again " + user);
          } else {
             user = prompt("Please enter your name for enabling cookies:","");
             if (user != "" && user != null) {
               setCookie("username", user, 30);
             }
          }
        }
        </script>
</head>

<body onload="checkCookie()">
    <div id="navigationid">
        <div id="logoweb">
            <img src="awesome.webp" alt="error">

        </div>
        <ul>
            <li class="litem1"><a href="#">Home</a></li>
            <li class="litem1"><a href="#related">Relaed website</a></li>
            <li class="litem1"><a href="#myservice">About Services</a></li>
            <li class="litem1"><a href="#vdo">Our all info</a></li>
            <li class="litem1"><a href="\VIVA_AP\group2\index.html" target="_blank">Our Team Contacts</a></li>
            <li class="litem1"><a href="/VIVA_AP/abhay/breakfast.xml" target="_blank">Items/Menu</a></li>
        </ul>
    </div>
    <section id="my12">
        <h1 class="h-prm">Thanks for opening this service</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis eum obcaecati dolores fuga veniam vel
            vitae dolorem provident similique vero, voluptas, ipsa quae? Beatae sapiente odit voluptates architecto,
            blanditiis consequuntur odio nihil ipsam laboriosam.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore iste odio beatae non incidunt velit
            adipisci, natus optio blanditiis id alias placeat, dolor earum temporibus provident, nobis soluta sunt
            sapiente.</p>
        <button class="btn" onclick="promptfunc()">Clich Here</button>
    </section>
    <div style="background-color: rgb(245, 83, 178); border-radius: 2px solid black; margin-top: -120px; padding: 35px 28px;">
        <div class="container7676" id="para21" style="padding: 28px;display: none;">
            <center style="color: orangered; font-size: 65px;">Awesome Digital Clock using java-script</center>
            Current time is <span id="time"></span>
            <center style="color: rgb(0, 255, 34); font-size: 45px;"">I have added this clock bcz i want to give more features to our customers</center>
              </div>
                <!-- <button></button> -->
                <center> <button id="btn4321" onclick="toggleHide()"><strong id="spu">Click Me </strong> ---> i will Show awesome clock(if hidden) /Hide(if showing )
                    ----->this is by js</button></center> 
        </div>
    <h2 class=" myservice-h2">Our Services</h2>
                <section id="myservice">
                    <div class="serbo"  >
                        <img src="food_viva12.jfif" alt="">
                        <h2 class="h-seco" style="text-align: center;">Order services</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut ab voluptatibus impedit magnam.
                        </p>
                    </div>
                    <div class="serbo">
                        <img src="food_viva14.jfif" alt="">
                        <h2 class="h-seco" style="text-align: center;">Order services</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut ab voluptatibus impedit magnam.
                        </p>
                    </div>

                </section>
                <section class="customer-req" id="related">
                    <h1 class="h-prm center">Customers Choice</h1>
                    <div id="custom">
                        <div class="custom-it">
                            <img src="food_viva5.webp" alt="error">
                            <img src="food_viva6.webp" alt="error">
                            <img src="food_viva7.webp" alt="error">
                            <img src="food_viva9.jpg" alt="error">
                        </div>
                    </div>

                </section>
                <div style="background-color: rgb(247, 202, 120);" id="vdo">

                    <center><iframe width="560" height="315" src="https://www.youtube.com/embed/diUDjNwZ8Lg"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </center>
                </div>
</body>
    <script src="myjs.js"></script>

</html>