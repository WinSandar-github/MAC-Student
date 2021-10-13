@extends('layouts.app')
@section('content')



<?php
    

    $orderid= "2106-000212";
    $returnURL="https://demo.aggademo.me/MAC_Student/public/index.php/post_payment/visa_master";
    $currency="MMK";
    $amount="500";
    $description="test donation 2106-000212";
    $merchangname="MAC";
    $merchantID="CB0000000391";
    $version=50;
    $base_url="https://cbbank.gateway.mastercard.com/";
    $hostedcheckout_url="https://cbbank.gateway.mastercard.com/checkout/version/50/checkout.js";
    $sessionjs_url=$base_url."/form/version/".$version."/merchant/".$merchantID."/session.js";
    /*Your API Credential Password */
    $pwd="8d9aadc462af9407f1445e488775f5cf";
    
    
    $merchantAdress="130 Joo Seng Road";
    $merchantPhone="0912312334";
    $merchantLogo="https://demo.aggademo.me/MAC_Student/public/img/cash.png";
    
    $curl = curl_init();
    
    curl_setopt($curl, CURLOPT_URL, "https://cbbank.gateway.mastercard.com/api/rest/version/50/merchant/CB0000000391/session");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt ($curl, CURLOPT_SSL_VERIFYPEER, false);
    
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
    
    
    
    
    curl_setopt($curl, CURLOPT_POSTFIELDS, '
        {
            "apiOperation": "CREATE_CHECKOUT_SESSION",
            "interaction": {
                "operation": "VERIFY",
                "merchant": {
                    "name": "'.$merchangname.'",
                    "address": {
                        "line1": "'.$merchantAdress.'"
                    },
                "phone": "'.$merchantPhone.'",
                "logo"   : "'.$merchantLogo.'"
                },
            "displayControl": {
                "billingAddress": "OPTIONAL",
                "customerEmail": "OPTIONAL",
                "orderSummary":"SHOW",
                "shipping":"HIDE"
    
                },
            "returnUrl": "'.$returnURL.'"
            },
    
            "order": {
                "id": "'.$orderid.'",
                "amount": '.$amount.',
                "currency": "'.$currency.'",
                "description": "'.$description.'"
            }
    }');
    
    $headers=array();
    $credential="merchant.".$merchantID.":".$pwd;
    $encoded_credential=base64_encode($credential);
    //$headers = array('Content-Type: application/json', 'Authorization: Basic '.$encoded_credential);
    $headers = array('Content-Type: text/javascript', 'Authorization: Basic '.$encoded_credential);
    
    curl_setopt($curl, CURLOPT_HTTPHEADER,$headers);
    
    
    
    $response = curl_exec($curl);
    
    
    curl_close($curl);
    
    print_r($response);
    
    
    $session_id=explode(":",explode(",",$response)[2])[2];
    
    $session_id=str_replace("\"","",$session_id);
    
    echo $session_id."\n";
    
    
    ?>
    
    <script src="<?php echo $hostedcheckout_url; ?>"  data-error="errorCallback" data-cancel="<?php echo $returnURL; ?>" data-complete="completeCallback"></script>
    
    
    <script type="text/javascript">
    
            function errorCallback(error) {
                console.log(JSON.stringify(error));
                }
    
            function cancelCallback() {             
                console.log('Payment cancelled');
                }
    
            function completeCallback()
                {
                 console.log('success');
                }
    
    
            Checkout.configure({
    
                    session: { 
                            id: '<?php echo $session_id; ?>'
                        },
    
                    merchant: '<?php echo $merchantID; ?>',
                    order: {
                        amount: parseFloat(<?php echo $amount; ?>),
                        currency: '<?php echo $currency; ?>',
                        description: '<?php echo $description; ?>',
                        reference:"test1231 Ref",
                        id: '<?php echo $orderid; ?>'
                    },
                    
                    interaction: {
                        
                        merchant : {
                            name   : '<?php echo $merchantID; ?>',
                            address: {
                                          line1: '200 Sample St'                   
                            },                      
                            phone  : '<?php echo $merchantPhone; ?>',
                            logo   : '<?php echo $merchantLogo; ?>'
                        },
                        locale        : 'en_US',
                        theme         : 'default',
                        displayControl: {
                            billingAddress  : 'OPTIONAL',
                            customerEmail   : 'OPTIONAL',
                            orderSummary    : 'SHOW',
                            shipping        : 'HIDE'
                        }
                    },
                    
                    
                });
    
               
    </script>
    
    
    <input type="button" value="Pay with Payment Page"  /> 






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
                                    <h3 class="heading text-center">VISA/MASTER</h3>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <p>
                                        Visa is a mobile wallet platform powered by CB Bank,
                                        one of the most trusted banks in Myanmar. Now available for download across the country, it’s the safer, simpler and more convenient way to transact money. With just a few taps on your phone, whether you wish to pay, transfer, cash in or cash out – it’s easy with CBPay!
                                    </p>
                                </div>
                            </div><br>
                            <input type="hidden" name="payment_status" value="1">
                            <div class="row mb-3">
                                <div class="col-md-2 offset-md-5">
                                    <button type="submit" onclick="Checkout.showPaymentPage();" class="btn btn-success btn-hover-dark w-100">{{ __('Submit') }}</button>
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
