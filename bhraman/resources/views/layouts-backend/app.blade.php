
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Starter</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="{{asset('/fontawesome-free/css/all.min.css')}}">

    <link rel="stylesheet" href="{{asset('/css/adminlte.min.css')}}">
    <script nonce="edc19ae0-6b65-4f08-a4d3-9fa8ee9c01cf">(function(w,d){!function(dp,dq,dr,ds){dp[dr]=dp[dr]||{};dp[dr].executed=[];dp.zaraz={deferred:[],listeners:[]};dp.zaraz.q=[];dp.zaraz._f=function(dt){return async function(){var du=Array.prototype.slice.call(arguments);dp.zaraz.q.push({m:dt,a:du})}};for(const dv of["track","set","debug"])dp.zaraz[dv]=dp.zaraz._f(dv);dp.zaraz.init=()=>{var dw=dq.getElementsByTagName(ds)[0],dx=dq.createElement(ds),dy=dq.getElementsByTagName("title")[0];dy&&(dp[dr].t=dq.getElementsByTagName("title")[0].text);dp[dr].x=Math.random();dp[dr].w=dp.screen.width;dp[dr].h=dp.screen.height;dp[dr].j=dp.innerHeight;dp[dr].e=dp.innerWidth;dp[dr].l=dp.location.href;dp[dr].r=dq.referrer;dp[dr].k=dp.screen.colorDepth;dp[dr].n=dq.characterSet;dp[dr].o=(new Date).getTimezoneOffset();if(dp.dataLayer)for(const dC of Object.entries(Object.entries(dataLayer).reduce(((dD,dE)=>({...dD[1],...dE[1]})),{})))zaraz.set(dC[0],dC[1],{scope:"page"});dp[dr].q=[];for(;dp.zaraz.q.length;){const dF=dp.zaraz.q.shift();dp[dr].q.push(dF)}dx.defer=!0;for(const dG of[localStorage,sessionStorage])Object.keys(dG||{}).filter((dI=>dI.startsWith("_zaraz_"))).forEach((dH=>{try{dp[dr]["z_"+dH.slice(7)]=JSON.parse(dG.getItem(dH))}catch{dp[dr]["z_"+dH.slice(7)]=dG.getItem(dH)}}));dx.referrerPolicy="origin";dx.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(dp[dr])));dw.parentNode.insertBefore(dx,dw)};["complete","interactive"].includes(dq.readyState)?zaraz.init():dp.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">

            @include('layouts-backend.navbar')

            @include('layouts-backend.sidebar')

            <div class="content-wrapper">

                @yield('content')

            </div>


            @include('layouts-backend.rightside')


            @include('layouts-backend.footer')
        </div>



        <script src="{{asset('js/jquery.min.js')}}"></script>

        <script src="{{asset('js/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

        <script src="{{asset('js/adminlte.min.js')}}"></script>
    </body>
    </html>
