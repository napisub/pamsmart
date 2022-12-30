
<div class="row" id="login">
    <div class="col-md-4 col-sm-offset-4">
        <h1>Login</h1>        
        <?php if($_POST) include 'aksi.php'; ?>
        <form class="form-signin" action="?m=login" method="post">                        
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" placeholder="Username" required name="user" autofocus />
            </div>
            <div class="form-group">            
                <label>Password</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="pass" required />

                <!-- <p class="help-block">User: admin, Pass: admin</p>     -->
            </div>      
            <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-log-in"></span> Masuk</button>                  
        </form><br>      
    </div>
</div>