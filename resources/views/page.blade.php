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
        .header{
            height: 0px;
        }
        .hero {
            padding: 9.375rem 0px;
            height:700px;
            color:#FFF;
            background-image: url('nic-cage.jpg');
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
        }
        .setup .step{
            padding: 0px;
        }
        .pay {
            color: rgb(255, 255, 255);
            background-image: radial-gradient(at left top , #3A8FDC 0%, #87D7CD 100%);
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
     </style>
</head>
<body>
    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-10"></div>
                <div class="col-xs-2">
                  <a href="http://i.huffpost.com/gen/1548397/images/o-NIC-CAGE-facebook.jpg" class="btn btn-primary" id="log-in-btn">Log in</a>
                </div>
            </div>
        </div>
    </div>
    <!--<div class="hero" style='background-image: url("http://schmoesknow.com/wp-content/uploads/2013/07/Nicolas-Cage-nicolas-cage-26969943-1982-1300.jpg"); background-size: cover; background-position: center center; background-repeat: no-repeat;'>-->
    <div class="hero">
       <div class="container-fluid">
         <div class="row">
           <div class="col-sm-6">
             <h1>Print &amp; Ship Photos</h1>
             <h3>Add #Repostage to any of your Instagram photos and get a printed postcard in the mail.</h3>
             <a href="http://i.huffpost.com/gen/1548397/images/o-NIC-CAGE-facebook.jpg">
               <div class="button text-center">
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
                            <div class="step col-xs-4">
                                <div class="step-number">
                                    <h1>1</h1>
                                </div>
                                <div class="step-content">
                                    <h4>Link your Instagram</h4>
                                    <p>Sign in with your Instagram account one time to create and link your Repostage account.</p>
                                </div>
                            </div>
                            <div class="step col-xs-4">
                                <div class="step-number">
                                    <h1>2</h1>
                                </div>
                                <div class="step-content">
                                    <h4>Add Shipping and Billing</h4>
                                    <p>With your shipping and billing information entered, you’re good to go. Start enjoying step 3.</p>
                                </div>
                            </div>
                            <div class="step col-xs-4">
                                <div class="step-number">
                                    <h1>3</h1>
                                </div>
                                <div class="steps-content">
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
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-6">
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
                                <button>Sign up with</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="table">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12 text-center">
            <h2><strong>#Repostage</strong> In Action</h2>
            <h5>See, it works! Below are the most recent awesome photos being printed right now.</h5>
            <div class="row photo-row">
              <div class="col-sm-3 col-xs-6">
                <img class="img-responsive" alt="In Action" src="http://1.bp.blogspot.com/-xEeb9swx1ks/UP1vlgRW-rI/AAAAAAAAC8Y/wexMZkkwBLs/s1600/Chris-Shen-cage-michael-jackson-590x350.jpg"></img>
              </div>
              <div class="col-sm-3 col-xs-6">
                <img class="img-responsive" alt="In Action" src="http://d4f1ndlb0hkjb.cloudfront.net/wp-content/uploads/2010/01/nick-cage-abe-lincoln.jpg"></img>
              </div>
              <div class="col-sm-3 col-xs-6">
                <img class="img-responsive" alt="In Action" src="http://unrealitymag.bcmediagroup.netdna-cdn.com/wp-content/uploads/2010/01/nicholas_cage_12.jpg"></img>
              </div>
              <div class="col-sm-3 col-xs-6">
                <img class="img-responsive" alt="In Action" src="http://media.tumblr.com/tumblr_m5yl9uOHhF1qmwrao.png"></img>
              </div>
            </div>
            <div class="row photo-row">
              <div class="col-sm-3 col-xs-6">
                <img class="img-responsive" alt="In Action" src="http://cdn.morefm.co.nz/morefm/AM/2013/2/21/6075/Nicolas-Cage-Face-20-Mona-Lisa.jpg"></img>
              </div>
              <div class="col-sm-3 col-xs-6">
                <img class="img-responsive" alt="In Action" src="https://aplaceforpeace.files.wordpress.com/2010/02/dylanreevenic-clinton.jpg"></img>
              </div>
              <div class="col-sm-3 col-xs-6">
                <img class="img-responsive" alt="In Action" src="http://media.tumblr.com/8876a5b97d45be5811442d8ea25d936f/tumblr_inline_mhhtb3G0w41qz4rgp.png"></img>
              </div>
              <div class="col-sm-3 col-xs-6">
                <img class="img-responsive" alt="In Action" src="http://nicolascage.us/wp-content/uploads/2013/09/Something-About-Mary.jpg"></img>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="end">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12 text-center">
            <h1>Does this all sound good?</h1>
            <h5>Well it's all true. Start enjoying Repostage today.</h5>
            <button>Sign up with</button>
          </div>
        </div>
      </div>
    </div>
</body>
</html>
