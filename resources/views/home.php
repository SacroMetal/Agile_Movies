<?php 
    $email     = $_GET['email']; 
    $firstName = $_GET['firstName']; 
    $lastName  = $_GET['lastName']; 

    if ($email == 0){
        header('Location: index.php');
    }
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />




<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js"></script>

<link rel="stylesheet" href="css/linearicons.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/themify-icons.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/nice-select.css">
<link rel="stylesheet" href="css/nouislider.min.css">
<link rel="stylesheet" href="css/ion.rangeSlider.css" />
<link rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css" />
<link rel="stylesheet" href="css/magnific-popup.css">
<link rel="stylesheet" href="css/main.css">






<script type="text/JavaScript" src="js/cloud-carousel.1.0.5.js"></script>
 
<script type="text/javascript">
$(document).ready(function(){
						   

	$("#carousel1").CloudCarousel(		
		{			
			reflHeight: 40,
			reflGap: 2,
			titleBox: $('#da-vinci-title'),
			altBox: $('#da-vinci-alt'),
			//buttonLeft: $('#slider-left-but'),
			//buttonRight: $('#slider-right-but'),
			yRadius: 30,
			xPos: 480,
			yPos: 32,
			speed:0.15,
			autoRotate: "yes",
			autoRotateDelay: 2500
		}
	);



});
 

</script>
<style type="text/css">
 .carousel-inner img {
    width: 100%;
    height: 100%;
  }
   </style>

<style type="text/css">
      @media (max-width: 576px){
         .ddsmoothmenu
         {
            width: 100% !important;
            margin: 0 0% !important;
            max-width: 960px !important;
           
         }   
         
         .templatemo_slider{
             width: 50% !important;
         }
         
      }

   </style>

</head>

<body id="home">



<div id="templatemo_header_wrapper" class="templatemo_header_wrapper" style="width: 100%;">
<div id="templatemo_menu" class="ddsmoothmenu"><ul></ul></div> </div>	



<div id="templatemo_slider" class="templatemo_slider" >
	<!-- No logré cargar las imagenes del json por lo tanto las puse en duro. El Json semi operativo, se llama  "Inicio_Pelicula_estreno" tampoco el slider tiene un responsive atractivo-->
    <div id = "carousel1" class="carousel1" style="width:960; height:280px; margin-top: 20px">
        <a href="#" rel="lightbox"><img class="cloudcarousel" src="https://image.tmdb.org/t/p/w500/lNyLSOKMMeUPr1RsL4KcRuIXwHt.jpg" /></a>
        <a href="#" rel="lightbox"><img class="cloudcarousel" src="https://image.tmdb.org/t/p/w500/dK12GIdhGP6NPGFssK2Fh265jyr.jpg"  /></a>
        <a href="#" rel="lightbox"><img class="cloudcarousel" src="https://image.tmdb.org/t/p/w500/xGrTm3J0FTafmuQ85vF7ZCw94x6.jpg" /></a>
        <a href="#" rel="lightbox"><img class="cloudcarousel" src="https://image.tmdb.org/t/p/w500/lV3UFPPxDIPelh46G9oySXN9Mcz.jpg"  /></a>
        <a href="#" rel="lightbox"><img class="cloudcarousel" src="https://image.tmdb.org/t/p/w500/7OcRErUXXdAVAHg6y5cjn56ivtu.jpg" /></a>
        <a href="#" rel="lightbox"><img class="cloudcarousel" src="https://image.tmdb.org/t/p/w500/9OE62lhp5FPNJMfKXodegVLjHUA.jpg" /></a>
        <a href="#" rel="lightbox"><img class="cloudcarousel" src="https://image.tmdb.org/t/p/w500/d0mpUFKzoPwF1KsdjHpkkaYSvKm.jpg"/></a>
    </div>

</div>

<!--
<div id="templatemo_main"></div>-->
<div class="container" style="margin-top:100px;">
    <h2><font color="white">Películas más populares</font></h2>
</div>
<section class="banner-area" style="margin-top:40px;">
<div class="">
    <div class="container">
        <div class="row" id="imagenmostrar">
            
        </div>
    </div>
</div>
</section>
<script>
    function verdetalle(id){
        $.ajax({
            beforeSend: function(xhr){
                xhr.setRequestHeader('Authorization', 'Bearer '+ localStorage.getItem('token'));
                xhr.setRequestHeader('Content-type', 'application/json');

                location.href="detallepelicula.php?id="+id
            },
        });  
    }
    var x_lastName = false;  
    var x_firstname = false;
    var x2= false;
    var x = false;
   
    function get_yo(){
        return x_lastName;  
        return x_firstname;
    }

    function getPelicula_estreno(){
        return x2;  
    }


    function getPelicula(){
        return x;  
    }

    //trae peliculas populares
    $(document).ready(function(){
        Inicio_Pelicula_estreno();
        Inicio_Pelicula();
        Inicio_yo();
        
    })
    
   function Inicio_Pelicula_estreno(){
        Trae_Pelicula_estreno(1, function(){
            var html = ' ';

            $.each(getPelicula_estreno(), function(i, val){
                html +=  '<a href="#" rel="lightbox"><img class="cloudcarousel" src="'+ z2  +''+ val.backdrop_path  +'"></a>';
            });
            console.log(html);
            //$('#carousel1').html(html);
        })
    }

    function Trae_Pelicula_estreno(page, callback){
        $.ajax({
            url: 'http://161.35.140.236:9005/api/movies/now_playing',
            beforeSend: function(xhr){
                xhr.setRequestHeader('Authorization', 'Bearer '+ localStorage.getItem('token'));
                xhr.setRequestHeader('Content-type', 'application/json');
            },
            type: 'GET',
            dataType: 'JSON',
            data: {page: page},
            success: function(Json){
                Json = JSON.parse(Json);
                x2 = Json.data;
                z2 = Json.imageBaseUrl;
                callback();
            },
            error: function(e){
                if(e.status == 401){
                    if(localStorage.getItem('token')){
                        Refresh(function(exito){
                            if(exito){
                                Inicio_Pelicula_estreno();
                            }
                        });
                    }
                }
                else if(e.status != 201){
                    alert(e.responseJSON.message);
                    callback();
                }
            }
        });
    }
    // hasta aqui trae las estreno


//peliculas populares
    function Inicio_Pelicula(){
        Trae_Pelicula(1, function(){
            var html = '';
            $.each(getPelicula(), function(i, val){
                html += '<div class="col-lg-3 col-md-6" >'+
                            '<div class="single-product">'+
                                '<a href="#"><img class="img-fluid" src="'+ z  +''+ val.backdrop_path  +'" alt="" onclick="verdetalle('+val.id+');"></a>'+
                                '<div class="product-details">'+
                                '<p><font color="white">'+ val.original_title +'</font></p>'+
                                '</div>'+
                            '</div>'+
                        '</div>';
            });
            $('#imagenmostrar').html(html);
        })
    }

    function Trae_Pelicula(page, callback){
        $.ajax({
            url: 'http://161.35.140.236:9005/api/movies/popular',
            beforeSend: function(xhr){
                xhr.setRequestHeader('Authorization', 'Bearer '+ localStorage.getItem('token'));
                xhr.setRequestHeader('Content-type', 'application/json');
            },
            type: 'GET',
            dataType: 'JSON',
            data: {page: page},
            success: function(Json){
                Json = JSON.parse(Json);
                x = Json.data;
                z = Json.imageBaseUrl;

                callback();
            },
            error: function(e){
                if(e.status == 401){
                    if(localStorage.getItem('token')){
                        Refresh(function(exito){
                            if(exito){
                                Inicio_Pelicula();
                            }
                        });
                    }
                }
                else if(e.status != 201){
                    alert(e.responseJSON.message);
                    callback();
                }
            }
        });
    }
    // hasta aqui trae las populares


    //informacion usuario

    function Inicio_yo(){
        Trae_informacion_yo(1, function(){

            var html = '<ul align="right"> '+
        '<h3><font color="white">Hola '+ x_firstname  +' '+ x_lastName  +'<img src="../img/user.png" width="40"></img></font></h3>'+
        '</ul>' +
        '<ul align="left"><h2><font color="white">Películas en estreno</font></h2></ul>'+
        '<div id="templatemo_menu" class="ddsmoothmenu"><ul></ul></div> '
        



        $('#templatemo_header_wrapper').html(html);

        })
    }

    function Trae_informacion_yo(page, callback){
        $.ajax({
            url: 'http://161.35.140.236:9005/api/user/me',
            beforeSend: function(xhr){
                xhr.setRequestHeader('Authorization', 'Bearer '+ localStorage.getItem('token'));
                xhr.setRequestHeader('Content-type', 'application/json');
            },
            type: 'GET',
            dataType: 'JSON',
            data: {page: page},
            success: function(Json){
                Json = JSON.parse(Json);
                x_firstname = Json.data.firstName;
                x_lastName = Json.data.lastName;

                callback();
            },
            error: function(e){
                if(e.status == 401){
                    if(localStorage.getItem('token')){
                        Refresh(function(exito){
                            if(exito){
                                Inicio_yo();
                            }
                        });
                    }
                }
                else if(e.status != 201){
                    alert(e.responseJSON.message);
                    callback();
                }
            }
        });
    }
    // hasta aqui informacion usuario






    function Refresh(callback){
        $.ajax({
            url: 'http://161.35.140.236:9005/api/auth/refresh',
            type: 'POST',
            dataType: 'JSON',
            data: {refresh_token: localStorage.getItem('refresh_token')},
            success: function(Json){
                Json = JSON.parse(Json);
                localStorage.setItem('token', Json.data.payload.token);
                callback(true)
            },
            error: function(e){
                callback(false)
                if(e.status != 201){
                    localStorage.clear();
                    alert(e.responseJSON.message);
                }
            }
        });
    }

            

</script>

</body>
</html>