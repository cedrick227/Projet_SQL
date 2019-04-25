<?php
include "../config.php";

if ($login == 0) {
    echo "<meta http-equiv='refresh' content='0; url=login.php'>";
}else {
$u_id = $_COOKIE['uid'];
$getinfo = mysqli_query($conn,"SELECT * FROM users WHERE u_id");
$arr = mysqli_fetch_array($getinfo);
?>

<?php } ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Profil</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/profil.css">
    <link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="../css/font-awesome.min.css">
			<link rel="stylesheet" href="../css/bootstrap.css">
			<link rel="stylesheet" href="../css/magnific-popup.css">
			<link rel="stylesheet" href="../css/nice-select.css">					
			<link rel="stylesheet" href="../css/animate.min.css">
			<link rel="stylesheet" href="../css/owl.carousel.css">
			<link rel="stylesheet" href="../css/main.css">

 
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

    <div class="wrapper">
        
        <nav id="sidebar" style="background:#fab700">
            <div class="sidebar-header">
                <h3><?php echo $arr['u_name']; ?></h3>
                <strong><?php echo $arr['u_name']; ?></strong>
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="../pages/services.php" data-toggle="collapse" aria-expanded="false" >
                        <i class="fas fa-home"></i>
                        Nouvelle Construction
                    </a>
                </li>
                <li>
                    <a href="../pages/services.php">
                        <i class="fas fa-briefcase"></i>
                        Location
                    </a>
                    <a href="../pages/services.php" data-toggle="collapse" aria-expanded="false" >
                        <i class="fas fa-copy"></i>
                        Remodellage
                    </a>
                </li>
                <li>
                    <a href="../pages/services.php">
                        <i class="fas fa-image"></i>
                        Preconstruction
                    </a>
                </li>
                <li>
                    <a href="../pages/services.php">
                        <i class="fas fa-question"></i>
                        Architecture Civil
                    </a>
                </li>
                <li>
                    <a href="../pages/services.php">
                        <i class="fas fa-paper-plane"></i>
                        Achat de Terrain
                    </a>
                </li>
            </ul>
        </nav>

        
        <div id="content"  style="background:#222222">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Menu</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                            <a  href="../index.php"><button type="button" class="btn btn-danger">Home</button></a>
                            <a  href="../pages/logout.php"><button type="button" class="btn btn-danger">Logout -></button></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <section class="service-area section-gap" id="service">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-8 pb-40 header-text">
							<h1 style="color:#fafafa">NOS SERVICES</h1>
                        </div>
					</div>
					<div class="row">
                        <a href=../pages/services.php>
						<div class="col-lg-4 col-md-6 pb-30">
							<div class="single-service">
								<h4><span class="lnr lnr-user"></span>Nouvelle Construction</h4>
								<p>
                                Vous voulez contruire mais vous avez pas d'idée ? Ne vous inquietez plus nous sommes la pour vous.
								</p>
							</div>
                            </a>
						</div>
                        <a href=../pages/services.php>
						<div class="col-lg-4 col-md-6 pb-30">
							<div class="single-service">
								<h4><span class="lnr lnr-license"></span>Location</h4>
								<p>
									Vous avez a possiblité de devenir locataire d'une de nos maisons a des prix abordables.
								</p><br>								
							</div>
                            </a>
						</div>
                        <a href=../pages/services.php>
						<div class="col-lg-4 col-md-6 pb-30">
							<div class="single-service">
								<h4><span class="lnr lnr-phone"></span>Remodellage</h4>
								<p>
                                    Vous voulez apporter un nouvel aspect a votre domicile, une nouvelle déco, nous sommes la.
                                </p><br>								
							</div>
                            </a>
						</div>
                        <a href=../pages/services.php>
						<div class="col-lg-4 col-md-6">
							<div class="single-service">
								<h4><span class="lnr lnr-rocket"></span>Preconstruction</h4>
								<p>
                                Noos disposons de professionels dans le domaine de la construction capables de realiser vos plans de construction en tout genre
                                </p>				
							</div>
                            </a>
						</div>
                        <a href=../pages/services.php>
						<div class="col-lg-4 col-md-6">
							<div class="single-service">
								<h4><span class="lnr lnr-diamond"></span>Architecture Civile</h4>
								<p>
                                    Pour vos construction de ponts et chaussées, stades et building faites nous confiances.
                                </p><br><br>								
							</div>
                            </a>
						</div>
                        <a href=../pages/services.php>
						<div class="col-lg-4 col-md-6">
							<div class="single-service">
								<h4><span class="lnr lnr-bubble"></span>Achat de terrain</h4>
								<p>
                                    Nous mettons a votre disposition plusieurs terrains a des prix très abordable et défiant toute concurrence.
                                </p><br>									
							</div>
                            </a>
						</div>						
					</div>
				</div>	
			</section>

            </div>
    </div>

    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>
   

</html>