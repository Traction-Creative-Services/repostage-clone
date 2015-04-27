<!--getbootstrap.com
css media query:
    style sheet knows the browers-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Mike's Repostage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <style>
        .body{
            font-family: sans-serif;
        }
        .row{
            max-width: 110rem;
            margin: 0px auto;
        }
        a{
          color: #FFF;
          text-decoration: none;
        }
        .header{
          position: relative;
            height: 0;
            color: #FFF;
        }
        .header .logo{
          position: relative;
          top: 50%
          transform: translateY(-50%);
          height: 2.75rem;
          width: 2.75rem;
          background-image: url("logo.svg");
          background-size: contain;
          float: left;
        }
        .header .email{
          position: relative;
          top: 50%
          transform: translateY(-50%);
          float: right;
        }
        .header .email span{
          font-size: 0.875rem;
          line-height: 1.1875rem;
          letter-spacing: 0.03125rem;
        }
        .hero {
            padding: 9.375rem 0px;
            height:700px;
            color:#FFF;
            background-image: url('nicage.jpg');
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
        }
        .setup{
          color: #505050;
          padding: 9.375rem 0;
        }
        .setup .steps-container{
          margin: 3.125rem;
        }
        .setup .step{
            display: flex;
            padding: 0 2.5rem;
        }
        .setup .step .step-number{
          margin:0 0.625rem 0 0;
          display:table;
          font-size:3.125rem;
        }
        .setup .step .step-content{
          display:table-cell;
        }
        .setup .step .step-content h4{
          font-weight: 700;
          margin-bottom:0.125rem;
        }
        .pay {
            color: #FFF;
            background-image: radial-gradient(at left top , #3A8FDC 0%, #87D7CD 100%);
        }
        .pay .cards-mobile-container{
          display: none;
        }
        @media(max-width:786px) .pay .cards-mobile-container{
          display: inline-block;
        }
        .stripe{
            height: 1.4375rem;
            width: 3.375rem;
            background: url("http://www.repostage.com/static/stripe-logo.svg") no-repeat scroll center center / contain transparent;
            display: inline-block;
            vertical-align: top;
        }
        .pay .card{
            /*margin: 0.625rem auto 0px;*/
            height: 2.375rem;
            background: url("http://www.repostage.com/static/card-icons.png") no-repeat scroll center center / contain transparent;            
        }
        .table{
          padding: 5rem 0;
          color: #505050;
        }
        .end {
          color: #FFF;
          padding: 9.375rem 0px;
          background: url("http://repostage.com/static/train-tracks.jpg") no-repeat scroll center center / cover transparent;
        }
        #log-in-btn{
          position:relative;
          top:25px;
          right:-50px;
        }
        .footer{
          color: #FFF;
          background-image: radial-gradient(at top left, #3A8FDC 0%, #87D7CD 100%);
          background-size: cover;
          padding: 2.8125rem 0;
        }
        .footer .instagram{
          height: 1.3125rem;
          width: 1.25rem;
          background-image: url("instagram-icon.svg");
          background-size: contain;
          display:inline-block;
          vertical-align: middle;
          margin: 0 0.625rem;
        }
        .footer .facebook{
          height: 1.3125rem;
          width: 0.625rem;
          background-image: url("facebook-icon.svg");
          background-size: contain;
          display:inline-block;
          vertical-align: middle;
          margin: 0 0.625rem;
        }
        .footer .twitter{
          height: 1.0625rem;
          width: 1.3125rem;
          background-image: url("twitter-icon.svg");
          background-size: contain;
          display:inline-block;
          vertical-align: middle;
          margin: 0 0.625rem;
        }
        .footer .california{
          height: 1.875rem;
          width: 3.75rem;
          background-image: url("california-icon.svg");
          background-size: contain;
          display:inline-block;
          vertical-align: middle;
          margin: 0 0 0 0.625rem; 
        }
        .footer .span{
          font-size: 0.75rem;
          line-height: 0.875rem;
          font-weight: 400;
        }
        .footer li{
          display: inline;
          margin: 0 0.9375rem;
        }
     </style>
</head>
<body>
    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                  <a href="/"><div class="logo"></div></a>
                  <div class="email">
                    <span>
                      <a href="http://i.huffpost.com/gen/1548397/images/o-NIC-CAGE-facebook.jpg">Log in</a>
                    </span>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hero">
       <div class="container-fluid">
         <div class="row">
           <div class="col-sm-6">
             <h1>Print &amp; Ship Photos</h1>
             <h3>Add #Repostage to any of your Instagram photos and get a printed postcard in the mail.</h3>
             <a href="http://i.huffpost.com/gen/1548397/images/o-NIC-CAGE-facebook.jpg">
               <div class="btn btn-primary text-center">
                 <span>Nic Cage</span>
               </div>
             </a>
           </div>
         </div>
       </div>
     </div>
    <div class="Setup">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="text-center"> Set up in minutes. No commitments.</h2>
                    <h5 class="text-center">Signing up for Repostage is fast and free. Pay only when you use it.</h5>
                    <div class="steps-container">
                        <div class="row">
                            <div class="step col-sm-4">
                                <div class="step-number">
                                    <h1>1</h1>
                                </div>
                                <div class="step-content">
                                    <h4>Link your Instagram</h4>
                                    <p>Sign in with your Instagram account one time to create and link your Repostage account.</p>
                                </div>
                            </div>
                            <div class="step col-sm-4">
                                <div class="step-number">
                                    <h1>2</h1>
                                </div>
                                <div class="step-content">
                                    <h4>Add Shipping and Billing</h4>
                                    <p>With your shipping and billing information entered, you’re good to go. Start enjoying step 3.</p>
                                </div>
                            </div>
                            <div class="step col-sm-4">
                                <div class="step-number">
                                    <h1>3</h1>
                                </div>
                                <div class="step-content">
                                    <h4>Comment and Enjoy!</h4>
                                    <p>Add #Repostage to any of your photos (new and old) and we’ll print it within the next 24 hours.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pay">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-6 cards-mobile-container">
                            <div class="pic">
                                <img class="img-responsive" src="http://replygif.net/thumbnail/1119.gif"></img>
                            </div>
                        </div>
                        <div class="col-md-6 col-md-offset-2 col-sm-6">
                            <div class="details">
                                <h1>Pay As You Go</h1>
                                <h5>One flat rate per photo Cancel at any time </h5>
                                <h2>$1.49/photo</h2>
                                <p>Printed on a 4"x6" postcard 100% money back guarantee </p>
                                <h2>FREE Shipping</h2>
                                <p>In the United States $0.99 everywhere else</p>
                                <h2>Secure Payments</h2>
                                <p>Thanks for this goes to our friends at
                                </p>
                                <div class="stripe"></div>
                                <p></p>
                                <div class="card"></div>
                                <div class="btn btn-primary">Sign up with</div>
                            </div>
                        </div>
                        <div class="col-md-4 cards-container">
                          <img class="img-responsive" src="http://replygif.net/thumbnail/1119.gif"></img>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="table">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h2><strong>#Repostage</strong> In Action</h2>
            <h5>See, it works! Below are the most recent awesome photos being printed right now.</h5>
            <div class="row photo-row">
              <div class="col-sm-3 col-xs-6">
                <img class="img-responsive img-rounded" alt="In Action" src="http://1.bp.blogspot.com/-xEeb9swx1ks/UP1vlgRW-rI/AAAAAAAAC8Y/wexMZkkwBLs/s1600/Chris-Shen-cage-michael-jackson-590x350.jpg"></img>
              </div>
              <div class="col-sm-3 col-xs-6">
                <img class="img-responsive img-rounded" alt="In Action" src="http://cdn.morefm.co.nz/morefm/AM/2013/2/21/6075/Nicolas-Cage-Face-20-Mona-Lisa.jpg"></img>
              </div>
              <div class="col-sm-3 col-xs-6">
                <img class="img-responsive img-rounded" alt="In Action" src="http://unrealitymag.bcmediagroup.netdna-cdn.com/wp-content/uploads/2010/01/nicholas_cage_12.jpg"></img>
              </div>
              <div class="col-sm-3 col-xs-6">
                <img class="img-responsive img-rounded" alt="In Action" src="http://nicolascage.us/wp-content/uploads/2013/09/Something-About-Mary.jpg"></img>
              </div>
            </div>
            <div class="row photo-row">
              <div class="col-sm-3 col-xs-6">
                <img class="img-responsive img-rounded" alt="In Action" src="http://d4f1ndlb0hkjb.cloudfront.net/wp-content/uploads/2010/01/nick-cage-abe-lincoln.jpg"></img>
              </div>
              <div class="col-sm-3 col-xs-6">
                <img class="img-responsive img-rounded" alt="In Action" src="https://aplaceforpeace.files.wordpress.com/2010/02/dylanreevenic-clinton.jpg"></img>
              </div>
              <div class="col-sm-3 col-xs-6">
                <img class="img-responsive img-rounded" alt="In Action" src="http://media.tumblr.com/8876a5b97d45be5811442d8ea25d936f/tumblr_inline_mhhtb3G0w41qz4rgp.png"></img>
              </div>
              <div class="col-sm-3 col-xs-6">
                <img class="img-responsive img-rounded" alt="In Action" src="http://media.tumblr.com/tumblr_m5yl9uOHhF1qmwrao.png"></img>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="end">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h1>Does this all sound good?</h1>
            <h5>Well it's all true. Start enjoying Repostage today.</h5>
            <div class="btn btn-primary">Sign up with</div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-5 text-left">
            <span>Made in Orange County</span>
            <div class="california"></div>
          </div>
          <div class="col-sm-2 text-center">
            <a href="http://vodzilla.co/wp-content/uploads/2013/08/con-air-nic-cage-700x325.jpg" class="instagram"></a>
            <a href="http://25.media.tumblr.com/tumblr_m8wvscKuTy1rcgim4o1_400.jpg" class="facebook"></a>
            <a href="http://bumbumbum.me/wp-content/uploads/2010/01/Chironex-Fleckerinickywonka-e1263934224121.jpg" class="twitter"></a>
          </div>
          <div class="col-sm-5 text-right">
            <ul>
              <li><span><a href="/joe">FAQ</a></span></li>
              <li><span><a href="/joe">Legal</a></span></li>
              <li><span><a href="/joe">Contact Us</a></span></li>
              <li><span>© 2015 Repostage</span></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
</body>
</html>
