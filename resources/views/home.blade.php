@extends('layouts.home')

@section('content')

<section class="hero is-primary">
       <div id="myCarousel" class="carousel slide" data-ride="carousel">
              
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>

              <div class="carousel-inner">
                <div class="item active">
                  <img src="https://img.alltor.me/img/2018-05/12/tbhzx96sm4a7uhicbxnjhjun9.jpg" alt="1" style="width:100%;">
                </div>

                <div class="item">

                  <img src="https://img.alltor.me/img/2018-05/12/b2p2w6kydalb75n15kbsmdg1n.jpg" alt="2" style="width:100%;">
                </div>
              
                <div class="item">
                  <img src="https://img.alltor.me/img/2018-05/12/na819sn1eia3lben892x3b95u.jpg" alt="3" style="width:100%;">
                </div>
              </div>

             
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
              </a>
        </div>
</section>
<section class="section features">
<div class="container has-text-centered">
        <div class="title" style="color: #407cc7">
          Features
          </div>
        <br>
      <div class="columns">
          <div class="column">
              <div class="item">
                <div class="item_text">

                  <div class="fonts">
                    <i class="fa fa-share-alt fa-4x"></i>
                  </div>
                  <br>
                  File sharing
                </div>
              </div>
          </div>
          <div class="column">
              <div class="item">
                <div class="item_text">

                  <div class="fonts">
                    <i class="fa fa-archive fa-4x"></i>
                  </div>
                  <br>
                  File storage
                </div>
              </div>
          </div>
         
          <div class="column">
              <div class="item">
                <div class="item_text">

                  <div class="fonts">
                    <i class="fa fa-copy fa-4x"></i>
                  </div>
                  <br>
                  File enryption
                </div>
              </div>
          </div>

          <div class="column">
              <div class="item">
                <div class="item_text">

                  <div class="fonts">
                    <i class="fa fa-dollar-sign fa-4x"></i>
                  </div>
                  <br>
                  File deals
                </div>
              </div>
          </div>
  </div>
</div>

</section>

<section>

  <img src="https://img.alltor.me/img/2018-05/12/is01ezrlrn8twxlon0fov41al.jpg" alt="1" style="width:100%;">


</section>

<section  class="hero is-primary is-medium">
  <div style="padding-top: 80px;padding-bottom: 80px; background-color: #cacaca;" class="hero-body">
    <div class="container">
<div class="columns">
  <div class="column is-two-fifths">
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="{{/contactus">Contact Us</a></li>
      </ul>
  </div>
  <div class="column">
    <div class="columns">
    <div class="column">
      <center>
        <a href=""><img src="https://img.alltor.me/img/2018-05/12/1iqyelz1d04zfgse8t5xg8tqc.png">
            <div>
             Facebook 
            </div>
        </a>
      </center>
    </div>
    <div class="column">
      <center>
        <a href=""><img src="https://img.alltor.me/img/2018-05/12/aoqx1tn0abdl25o1xd75wb2f7.png">
          <div>
            Instagram 
          </div>
        </a>
      </center>
    </div>
    <div class="column">
      <center>
        <a href=""><img src="https://img.alltor.me/img/2018-05/12/pm59379hnv808ai25xs1pmnqe.png">
          <div>
           Twitter 
          </div>
        </a>
      </center>
    </div>
</div>
   </div>
</div>
</section>


@endsection
