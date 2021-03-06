<style type="text/css">
body#LoginForm{ background-color:#FFFAFA;padding:10px;}

.form-heading { color:#fff; font-size:23px;}
.panel h2{ color:#444444; font-size:18px; margin:0 0 8px 0;}
.panel p { color:#777777; font-size:14px; margin-bottom:30px; line-height:24px;}
.login-form .form-control {
  background: #f7f7f7 none repeat scroll 0 0;
  border: 1px solid #d4d4d4;
  border-radius: 4px;
  font-size: 14px;
  height: 50px;
  line-height: 50px;
}
.main-div {
  background: #ffffff none repeat scroll 0 0;
  border-radius: 2px;
  margin: 4% auto 30px;
  max-width: 42%;
  padding: 40px 70px 40px 70px;
}

.login-form .form-group {
  margin-bottom:10px;
}
.login-form{ 
  text-align:center;
}
.forgot a {
  color: #777777;
  font-size: 14px;
  text-decoration: underline;
}
.login-form  .btn.btn-primary {
  background: #f0ad4e none repeat scroll 0 0;
  border-color: #f0ad4e;
  color: #ffffff;
  font-size: 14px;
  width: 100%;
  height: 50px;
  line-height: 50px;
  padding: 0;
}
.forgot {
  text-align: left; margin-bottom:30px;
}
.botto-text {
  color: #ffffff;
  font-size: 14px;
  margin: auto;
}
.login-form .btn.btn-primary.reset {
  background: #ff9900 none repeat scroll 0 0;
}
.back { text-align: left; margin-top:10px;}
.back a {color: #444444; font-size: 13px;text-decoration: none;}
@media(max-width: 768px){
  .main-div{
    max-width: 100% !important; 
    padding: 32px 38px 32px 38px;
    margin:8% auto 20%;
  }
}
</style>
<body id="LoginForm">  
  <div class="container">
    <div class="login-form">
      <div class="main-div">
        <div class="panel">
          <img src="<?php echo base_url('assets/images/jaya-raya.png'); ?>" width="80" style="margin-bottom: 20px;">
          <h2>Sistem Registrasi Bangunan</h2>
          <p>Pengawasan Terpadu Sumur Resapan dan Instalasi Pengolahan Air Limbah serta Pemanfaaan Air Tanah</p>
       </div>
       <form id="Login" method="post" action="https://jakartasatu.jakarta.go.id/pengawasanair/welcome/act_log">
        <div class="form-group">
          <input type="text" name="username" class="form-control" id="inputEmail" placeholder="Username">
        </div>
        <div class="form-group">
          <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">
        </div>
        <div class="forgot">
          <a href="reset.html">Forgot password?</a>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
        <h5 style="margin-top: 20px;">Pemerintah Provinsi DKI Jakarta</h5>
      </form>
    </div>
  </div>
</div>
</div>