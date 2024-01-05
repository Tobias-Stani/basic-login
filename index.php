<?php include('includes/header.php') ?>
<?php

session_start();

if(isset($_SESSION['usuario'])) {
    header("Location: bienvenida.php");
}

?>
 
<!-- <div class="m-5" style="width: 18rem;">
    <h1>login</h1>
    <form action="./php/login_user.php" method="POST">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" name="mail">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="pass" >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<div class="m-5" style="width: 18rem;">
    <h1>registro</h1>
    <form action="php/registro_usuario.php" method="POST">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">mail</label>
            <input type="email" class="form-control" name="mail" >
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">user</label>
            <input type="text" class="form-control" name="user" >
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="pass" >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div> -->

<div class="row m-5 p-5">
  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <h1>login</h1>
            <form action="./php/login_user.php" method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="mail">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="pass" >
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
      </div>
    </div>
  </div>

  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h1>registro</h1>
            <form action="php/registro_usuario.php" method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">mail</label>
                    <input type="email" class="form-control" name="mail" >
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">user</label>
                    <input type="text" class="form-control" name="user" >
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="pass" >
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
      </div>
    </div>
  </div>
</div>
    
<?php include('includes/footer.php') ?>

