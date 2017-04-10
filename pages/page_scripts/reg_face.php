<?if(isset($_SESSION['username'])){header('Location: app.php?slide=login');}?>
  <section class="">
  <form class="form-register" action="app.php?slide=reg_landing" method="POST" style="border-radius:radius(25%);
    margin:55px;">
    <input class="form-control"type="Email" name="email" placeholder="please enter your email"style="  border-radius:radius(25%);margin:2%">
    <input class="form-control" type="text"pattern="(?=.*[a-z]).{6,}" name="name" placeholder="enter your name"style="  border-radius:radius(25%);margin:2%">
    <input class="form-control" type="password" pattern=".{6,}" name="password" placeholder="enter password"style="  border-radius:radius(25%);margin:2%">
    <input class="btn btn-lg btn-block btn-primary"type="submit"></input>
    <h1 class="text-success text text-center">already have acount?</h1>
    <button class="btn btn-lg btn-block btn-success"type="button" name="btn-login">login</button>
  </form>
</section>
