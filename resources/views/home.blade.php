@extends('main', [
  "elementActive" => "home" ])
    <!-- Jumbotron -->
<section class="jumbotron text-center" data-bs-target="#navbar">
  <img src="https://cdn.discordapp.com/attachments/806563038453956648/1000980512728416256/hdrpic1.jpg" alt="hdr" width="200" class="rounded-circle img-thumbnail shadow"/>
  <h1 id="name" style="padding-top:7px">
    <a href="" class="typewrite" data-period="2000" data-type='[ "Hi, I am Hendra.", "Junior Web Developer", "Junior Data Analyst" ]'>
      <span class="wrap" style="color: black"></span>
    </a>
  </h1>
  <p class="lead">Student at SMKN 1 Surabaya</p>
  <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="	#ece0c3" fill-opacity="1" d="M0,32L60,48C120,64,240,96,360,133.3C480,171,600,213,720,218.7C840,224,960,192,1080,186.7C1200,181,1320,203,1380,213.3L1440,224L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg> -->
</section>
    <!-- Jumbotron end -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script>
      var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #f76e00}";
        document.body.appendChild(css);
    };
    </script>
  <style>
  body {
    /* min-height: 2000px; */
    position: relative;
  }
  .jumbotron{
    padding-top: 6rem;
    background-color: #FEFBF3;
  }
  .typewrite {
    text-decoration: none ;
    color:#000000
  } 
*   { color:#000000; text-decoration: none;}
        html{
            scroll-behavior: smooth;
        }
  </style>
  </body>
</html>
