@extends('layouts.app')
@section('content')


<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://cbpayuat.cbbank.com.mm:4443/payment-api/v1/qr/generate-transaction.service',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
"reqId": "2d21a5715c034efb7e0aa383b885fc7b",
"merId":"581500000000017",
"subMerId":"0000000001700001",
"terminalId":"03000001",
"transAmount":"100",
"transCurrency":"MMK",
"ref1":"95923535341",
"ref2":"10043553461"
}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'Authen-Token: eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE1OTY3NzU2NzIsIm1lcklkIjoiNTgxNTAwMDAwMDAwMDE3In0.hO4-eWFQHM5STCydXlwr2SjghmFe_4GgmccBq3vJvUY'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;


?>
<div class="main-wrapper">
    <div class="overlay"></div>
    <div class="section page-banner">
        {{--<img class="shape-1 animation-round" src="{{ asset('assets/images/shape/shape-8.png')}}" alt="Shape">--}}
        <img class="shape-2" src="{{ asset('assets/images/shape/shape-23.png')}}" alt="Shape">
        <div class="container">
            <!-- Page Banner Start -->
            <div class="page-banner-content">
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Register</li>
                </ul>
                <h2 class="title">Payment <span>Method</span></h2>
            </div>
            <!-- Page Banner End -->
        </div>
        <!-- Shape Icon Box Start -->
        {{--<div class="shape-icon-box">
            <img class="icon-shape-1 animation-left" src="{{ asset('assets/images/shape/shape-5.png')}}" alt="Shape">
            <div class="box-content">
                <div class="box-wrapper">
                    <i class="flaticon-badge"></i>
                </div>
            </div>
            <img class="icon-shape-2" src="{{ asset('assets/images/shape/shape-6.png')}}" alt="Shape">
        </div>--}}
        <!-- Shape Icon Box End -->
        <img class="shape-3" src="{{ asset('assets/images/shape/shape-24.png')}}" alt="Shape">
        {{--<img class="shape-author" src="{{ asset('assets/images/author/author-11.jpg')}}" alt="Shape">--}}
    </div>
    <div class="container approve_request" style="overflow: hidden;">
        <div class="email_verify" style="display:block; margin-top:5%; margin-bottom: 5%;">
            <form method="post">
                <div class="card border-success mb-3">
                    <div class="card-body">
                        <div class="col-md-12">
                            <div class="row justify-content-center">
                                <center>
                                    <img src="{{asset('img/cash.png')}}" class="img-fluid">
                                </center>
                                
                                <div class="col-12" >
                                    <h3 class="heading text-center">CBPay QR</h3>


                                    <?php

                                var_dump($response);

                            //    explode(",",$response)[2]    
    $session_id=explode(":",$response)[3];
    
    $session_id=str_replace("\"","",$session_id);
    
   // echo "<br/><br/>SDFDDFDSF".$session_id."\n";
    
                                   // echo $response;
                                //   var_dump($response['merDqrCode']);

                                    ?>

<style>
			/* CSS comes here */
			body {
			    padding:20px;
			}
			input {
			    padding:5px;
			    background-color:transparent;
			    border:none;
			    border-bottom:solid 4px #8c52ff;
			    width:250px;
			    font-size:16px;
			}
			
			.qr-btn {
			    background-color:#8c52ff;
			    padding:8px;
			    color:white;
			    cursor:pointer;
			}
		</style>


<script src="https://cdnjs.cloudflare.com/ajax/libs/qrious/4.0.2/qrious.min.js"></script>
<script type="text/javascript">
                            $("#code").qrcode({ 
                                width: 280,
                                height:280,
                                text: "<?php echo $session_id ?>"
                            }); 
                        </script> 
	<script>
			/* JS comes here */
			var qr;
			(function() {
                    qr = new QRious({
                    element: document.getElementById('qr-code'),
                    size: 200,
                    value: 'https://studytonight.com'
                });
            })();
            
            function generateQRCode() {
                var qrtext = "<?php echo $session_id ?>";
               
              
                qr.set({
                    foreground: 'black',
                    size: 200,
                    value: qrtext
                });
            }


            generateQRCode();
		</script>
        
                                    
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <p><br/><br/>
                                        CBPay is a mobile wallet platform powered by CB Bank,
                                        one of the most trusted banks in Myanmar. Now available for download across the country, it’s the safer, simpler and more convenient way to transact money. With just a few taps on your phone, whether you wish to pay, transfer, cash in or cash out – it’s easy with CBPay!
                                    </p>
                                </div>
                            </div><br>
                            <input type="hidden" name="payment_status" value="1">
                            <div class="row mb-3">
                                <div class="col-md-2 offset-md-5">
                                    <button type="submit" class="btn btn-success btn-hover-dark w-100">{{ __('Submit') }}</button>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>
    </div>
</div>
@endsection

