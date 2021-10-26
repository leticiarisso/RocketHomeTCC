<?php
include 'connect.php';

if(isset($_POST['sub'])){
    $t=$_POST['text'];
    $u=$_POST['user'];
    $p=$_POST['pass'];
    $c=$_POST['city'];
    $g=$_POST['gen'];
    if($_FILES['f1']['name']){
    move_uploaded_file($_FILES['f1']['tmp_name'], "image/".$_FILES['f1']['name']);
    $img="image/".$_FILES['f1']['name'];
    }
    else{
        $img=$_POST['img1'];
    }
    $i="update reg set name='$t',username='$u',password='$p',city='$c',gender='$g',image='$img' where id='$_SESSION[id]'";
    mysqli_query($con, $i);
    header('location:home.php');
}
    $s="select*from reg where id='$_SESSION[id]'";
    $qu= mysqli_query($con, $s);
    $f=mysqli_fetch_assoc($qu);
    ?> 



<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="Rocket/css/perfil.css">

<title>RocketHome</title>
<link rel="shortcut icon" href="Rocket/images/logo.png" type="image/x-png"/>

<!------ Include the above in your HEAD tag ---------->
<header>
		<img class="logo" src="Rocket/images/Logo3.png" alt="logo">
		<nav>
			<ul class ="nav__links">
				
				  <li class="nav-item">
					<a class="nav-link" href="#">DIFERENCIAIS</a>
				  </li>
				  <li>|</li>
				  <li class="nav-item">
					<a class="nav-link" href="#">QUEM SOMOS?</a>
				  </li>
				  <li>|</li>
				  <li class="nav-item">
					<a class="nav-link" href="carrinho.php">PRODUTOS</a>
				  </li>
				
			</ul>
		</nav>
		<div class ="loginmds">
		
		<a class="cta" href="home.php"><button>Início</button></a>
		
		</div>
	</header>


<body>
<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                        <img src="<?php echo $f['image']?>" style="width:180px" style="height:120px">
                        
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h6>
                                        Seja bem-vindo(a),
                                    </h6>
                                    <h5>
                                    <?php echo $f['name']?>
                                    </h5>
                                    
                                    <p class="proile-rating"> <?php echo $f['username']?> <span></span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Sobre você!</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="dashboard.php" role="tab" aria-controls="home" aria-selected="true">Dashboard</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" href="edit.php" name="btnAddMore" value="Editar Perfil"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p></p>
                            
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nome</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $f['name']?></p>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $f['username']?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Sexo</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $f['gender']?></p>
                                            </div>
                                        </div>
                                       
                            </div>

                            <a class= "sair" href="logout.php">Sair</a>
                           
                        </div>
                    </div>
                </div>
            </form>           
        </div>

<div class="footer">f</footer>