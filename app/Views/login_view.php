<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('adminlte/dist/'); ?>css/adminlte.min.css?v=3.2.0">
<script data-cfasync="false" nonce="253c6c84-d611-4680-9154-79f68ef42c95">try{(function(w,d){!function(bH,bI,bJ,bK){if(bH.zaraz)console.error("zaraz is loaded twice");else{bH[bJ]=bH[bJ]||{};bH[bJ].executed=[];bH.zaraz={deferred:[],listeners:[]};bH.zaraz._v="5876";bH.zaraz._n="253c6c84-d611-4680-9154-79f68ef42c95";bH.zaraz.q=[];bH.zaraz._f=function(bL){return async function(){var bM=Array.prototype.slice.call(arguments);bH.zaraz.q.push({m:bL,a:bM})}};for(const bN of["track","set","debug"])bH.zaraz[bN]=bH.zaraz._f(bN);bH.zaraz.init=()=>{var bO=bI.getElementsByTagName(bK)[0],bP=bI.createElement(bK),bQ=bI.getElementsByTagName("title")[0];bQ&&(bH[bJ].t=bI.getElementsByTagName("title")[0].text);bH[bJ].x=Math.random();bH[bJ].w=bH.screen.width;bH[bJ].h=bH.screen.height;bH[bJ].j=bH.innerHeight;bH[bJ].e=bH.innerWidth;bH[bJ].l=bH.location.href;bH[bJ].r=bI.referrer;bH[bJ].k=bH.screen.colorDepth;bH[bJ].n=bI.characterSet;bH[bJ].o=(new Date).getTimezoneOffset();if(bH.dataLayer)for(const bR of Object.entries(Object.entries(dataLayer).reduce((bS,bT)=>({...bS[1],...bT[1]}),{})))zaraz.set(bR[0],bR[1],{scope:"page"});bH[bJ].q=[];for(;bH.zaraz.q.length;){const bU=bH.zaraz.q.shift();bH[bJ].q.push(bU)}bP.defer=!0;for(const bV of[localStorage,sessionStorage])Object.keys(bV||{}).filter(bX=>bX.startsWith("_zaraz_")).forEach(bW=>{try{bH[bJ]["z_"+bW.slice(7)]=JSON.parse(bV.getItem(bW))}catch{bH[bJ]["z_"+bW.slice(7)]=bV.getItem(bW)}});bP.referrerPolicy="origin";bP.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(bH[bJ])));bO.parentNode.insertBefore(bP,bO)};["complete","interactive"].includes(bI.readyState)?zaraz.init():bH.addEventListener("DOMContentLoaded",zaraz.init)}}(w,d,"zarazData","script");window.zaraz._p=async bc=>new Promise(bd=>{if(bc){bc.e&&bc.e.forEach(be=>{try{const bf=d.querySelector("script[nonce]"),bg=bf?.nonce||bf?.getAttribute("nonce"),bh=d.createElement("script");bg&&(bh.nonce=bg);bh.innerHTML=be;bh.onload=()=>{d.head.removeChild(bh)};d.head.appendChild(bh)}catch(bi){console.error(`Error executing script: ${be}\n`,bi)}});Promise.allSettled((bc.f||[]).map(bj=>fetch(bj[0],bj[1])))}bd()});zaraz._p({"e":["(function(w,d){})(window,document)"]});})(window,document)}catch(e){throw fetch("/cdn-cgi/zaraz/t"),e;};</script></head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <?php if (session()->getFlashdata('error') || session()->getFlashdata('success')): ?>
      <style>
        .toast-message {
          position: fixed;
          top: 20px;
          right: 20px;
          z-index: 1050;
          padding: 10px 15px;
          border-radius: 4px;
          color: #fff;
          box-shadow: 0 0 10px rgba(0,0,0,0.3);
          opacity: 0.95;
        }
        .toast-error {
          background-color: #dc3545;
        }
        .toast-success {
          background-color: #28a745;
        }
      </style>
      <script>
        document.addEventListener('DOMContentLoaded', function () {
          var type = '<?= session()->getFlashdata('error') ? 'error' : 'success' ?>';
          var message = '<?= addslashes(session()->getFlashdata('error') ?: session()->getFlashdata('success')) ?>';
          var toast = document.createElement('div');
          toast.className = 'toast-message ' + (type === 'error' ? 'toast-error' : 'toast-success');
          toast.textContent = message;
          document.body.appendChild(toast);
          setTimeout(function () {
            toast.remove();
          }, 3000);
        });
      </script>
      <?php endif; ?>

      <form action="<?= base_url('login'); ?>" method="post">
        <div class="input-group mb-3">
          <input type="text" name="username" class="form-control" placeholder="Username" required>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
            </div>
          </div>
          <!-- /.col -->
          <div class="text-center">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('adminlte/dist/'); ?>js/adminlte.min.js?v=3.2.0"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"version":"2024.11.0","token":"2437d112162f4ec4b63c3ca0eb38fb20","server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' crossorigin="anonymous"></script>
</body>
</html>
