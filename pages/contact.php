<?php 

include("controller/contact.controller.php");

?>
<div class="col-sm-12 col-md-10 col-lg-8 mt-5 mx-auto was-validated">
<h1>Contact</h1>
<div class="row">
  <form method="POST" class="col s12">
    <div class="row">
    <div class="input-field col s6">
        <input id="first_name" type="text" name="first_name" class="">
        <label for="first_name">First Name</label>
      </div>

      <div class="input-field col s6">
        <input id="last_name" type="text" name="last_name" class="">
        <label for="last_name">Last Name</label>
      </div>
    </div>
</div>

<div class="row">
  <div class="input-field col s12">
    <i class="material-icons prefix ">email</i>
    <input id="email" type="email" name="email" class="">
    <label for="email">Email</label>
  </div>
</div>

<div class="row">
  <div class="input-field col s12">
  <i class="material-icons prefix ">message</i>
    <textarea id="message" name="message" class="materialize-textarea"></textarea>
    <label for="message">Textarea</label>
  </div>
</div>

<div class="row">
  <button class="btn waves-effect waves-light bg-primary white-text" type="submit" name="sendMessage">Submit
    <i class="material-icons right">send</i>
  </button>
</div>
</form>
</div>
</div>