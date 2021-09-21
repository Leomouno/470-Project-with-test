<link href="<?=ASSETS?>music/css/styless.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<?php  $this->view("music/header",$data); ?>
<div class="login-page">
  <p><?php check_message() ?></p>
   <div class="form">
     <form class="register-form" method="post">
       <div class="mb-3">
      <input class="input form-control" type="text" name="song-id" placeholder="song-id"/>
      </div>
       <div class="mb-3">
      <input class="input form-control" type="text" name="email" placeholder="email"/>
      </div>
      <div class="mb-3">
      <input class="input form-control" type="text" name="credit-card-no" placeholder="card-no"/>
        </div>

      <button class="btn btn-dark">Purchase</button>
    
    </form>

  </div>

  </div>


<script>
$('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
$('form').animate({height: "toggle", opacity: "toggle"}, "slow");
</script>
<?php  $this->view("music/footer",$data); ?>
