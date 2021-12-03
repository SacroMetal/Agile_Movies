<?php 
    $idpelicula        = $_GET['id']; 
?>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <title>Detalle de peliculas</title>
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
      <script type="text/javascript" src="js/jquery-1-4-2.min.js"></script> 
      <script type="text/javascript" src="js/jquery-ui.min.js"></script> 
      <script type="text/javascript" src="js/showhide.js"></script> 
     <!--  <script type="text/JavaScript" src="js/jquery.mousewheel.js"></script> -->
    <!--  <link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />-->
      <script type="text/javascript" src="js/jquery.min.js"></script>
      <script type="text/javascript" src="js/ddsmoothmenu.js"></script>
      <script type="text/javascript"></script> 
      <script type="text/JavaScript" src="js/cloud-carousel.1.0.5.js"></script>
      <script type="text/javascript"></script>

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">


 
 <script type="text/javascript">
 $(document).ready(function(){
                            
 
     $("#carousel1").CloudCarousel(		
         {			
             reflHeight: 40,
             reflGap: 2,
             titleBox: $('#da-vinci-title'),
             altBox: $('#da-vinci-alt'),
             buttonLeft: $('#slider-left-but'),
             buttonRight: $('#slider-right-but'),
             yRadius: 30,
             xPos: 480,
             yPos: 32,
             speed:0.15,
             autoRotate: "yes",
             autoRotateDelay: 5000
         }
     );
 });
  
 </script>
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
<!--Este modulo casi no lo pude avanzar, ni las consultas json están 100% operativas. Solo el esquema está desarrollado -->


<div id="templatemo_header_wrapper" style="width: 100%;">

         <ul align="left">
            <h2><font color="white"><?PHP echo "TITULO DE LA PELICULA ";?></font></h2>
         </ul>

         <div class="cleaner"></div>
      </div>
<div id="templatemo_main" align="center"  style="width: 100%;" >
    <div style="  margin: 0 10px 0 10px;
    padding: 0 10px 0 10px;">
    <img src="https://fondosmil.com/fondo/14726.jpg"  alt="Image 01" style="width: 100%; max-width:900px; max-width:900px; margin: 0 auto;">
    </div>
</div>
    
<div id="templatemo_main" align="center"  style="width: 60%;margin-top:70px;">

    <div class="col one_fourth gallery_box " align="center">
        <img src="images/portfolio/01.jpg" alt="Image 01" class=" ml-10px">
    </div>
    <div class="">
        <h5>Detalle:</h5>
        <p>atata atata atata atata atata atata atata atata atata atata atata atata atata atata atata atata atata atata atata </p>

        <p>atata atata atata atata atata atata atata </p>
    </div> 
</div>

<div class="container" style="margin-top:100px; width: 60%;">
    <h2><font color="black">Reparto</font></h2>
</div>
    <div id="templatemo_slider">
	<!-- This is the container for the carousel. -->
    <div id = "carousel1" style="width:960px; height:280px;background:none;overflow:scroll; margin-top: 20px">            
  
        <a href="#" rel="lightbox">
            <img class="cloudcarousel" src="images/slider/01.jpg" alt="CSS Templates 1" title="Website Templates 1" />
        </a>
        <a href="#" rel="lightbox">
            <img class="cloudcarousel" src="images/slider/02.jpg" alt="CSS Templates 2" title="Website Templates 2" />
        </a>
        <a href="#" rel="lightbox">
            <img class="cloudcarousel" src="images/slider/03.jpg" alt="CSS Templates 3" title="Website Templates 3" />
        </a>
        <a href="#" rel="lightbox">
            <img class="cloudcarousel" src="images/slider/04.jpg" alt="CSS Templates 4" title="Website Templates 4" />
        </a>
        <a  href="#" rel="lightbox">
            <img class="cloudcarousel" src="images/slider/05.jpg" alt="Flash Templates 1" title="Flash Templates 1" />
        </a>
        <a href="#" rel="lightbox">
            <img class="cloudcarousel" src="images/slider/06.jpg" alt="Flash Templates 2" title="Flash Templates 2" />
        </a>
        <a href="#" rel="lightbox">
            <img class="cloudcarousel" src="images/slider/07.jpg" alt="Flash Templates 3" title="Flash Templates 3" />
        </a>
        <a href="#" rel="lightbox">
            <img class="cloudcarousel" src="images/slider/08.jpg" alt="Flash Templates 4" title="Flash Templates 4" />
        </a>
        <a href="#" rel="lightbox">
            <img class="cloudcarousel" src="images/slider/08.jpg" alt="Flash Templates 4" title="Flash Templates 4" />
        </a>
        <a href="#" rel="lightbox">
            <img class="cloudcarousel" src="images/slider/08.jpg" alt="Flash Templates 4" title="Flash Templates 4" />
        </a>
    </div>
    
    <!-- Define left and right buttons. -->
    <center>
    <input id="slider-left-but" type="button" value="" />
    <input id="slider-right-but" type="button" value="" />
    </center>

      </div>


</div>
<input type="hidden" name="idpelicula" id="idpelicula" value="<?php echo $idpelicula?>">
<script>
    $(document).ready(function(){
        Inicio_datospelicula();
        Inicio_yo();
        Inicio_actores();
    })

    var x = false;

    function getPeliculadatos(){
        return x;  
    }

    function getactoresdatos(){
        return x;  
    }

    //informacion usuario

    function Inicio_datospelicula(){
        Trae_informacion_pelicula(1, function(){
         //   var html = '<h2>PELICULAS ESTRENO</h2>';
            $.each(getPeliculadatos(), function(i, val){
                console.log(val.backdrop_path);
            });
            //$('#templatemo_main').html(html);
        })
    }

    function Trae_informacion_pelicula(id, callback){

        var idpelicula = document.getElementById("idpelicula").value;

        $.ajax({
            url: 'http://161.35.140.236:9005/api/movies/popular',
            beforeSend: function(xhr){
                xhr.setRequestHeader('Authorization', 'Bearer '+ localStorage.getItem('token'));
                xhr.setRequestHeader('Content-type', 'application/json');
            },

            type: 'GET',
            dataType: 'JSON',
            data: {id: idpelicula},
            success: function(Json){

                Json = JSON.parse(Json);
                link_imagen = Json.data;
                dominio_imagen = Json.imageBaseUrl;
                console.log(link_imagen);
                return false;

                callback();
            },
            error: function(e){
                if(e.status == 401){
                    if(localStorage.getItem('token')){
                        Refresh(function(exito){
                            if(exito){
                                Inicio_datospelicula();
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

   

       //informacion de actores

       function Inicio_actores(){
        Trae_informacion_Actores(1, function(){
         //   var html = '<h2>PELICULAS ESTRENO</h2>';
            $.each(getactoresdatos(), function(i, val){
                console.log(val.backdrop_path);
            });
            //$('#templatemo_main').html(html);
        })
    }

    function Trae_informacion_Actores(id, callback){

        var idpelicula = document.getElementById("idpelicula").value;

        $.ajax({
            url: 'http://161.35.140.236:9005/api/movies/{'+idpelicula+'}/actors',
            beforeSend: function(xhr){
                xhr.setRequestHeader('Authorization', 'Bearer '+ localStorage.getItem('token'));
                xhr.setRequestHeader('Content-type', 'application/json');
            },

            type: 'GET',
            dataType: 'JSON',
            data: {id: idpelicula},
            success: function(Json){

                Json = JSON.parse(Json);



                callback();
            },
            error: function(e){
                if(e.status == 401){
                    if(localStorage.getItem('token')){
                        Refresh(function(exito){
                            if(exito){
                                Inicio_actores();
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
    // hasta aqui informacion de actores









 //informacion usuario
    function Inicio_yo(){
        Trae_informacion_yo(1, function(){

            var html = '<ul align="right"> '+
        '<h3><font color="white">Hola '+ x_firstname  +' '+ x_lastName  +'<img src="../img/user.png" width="40"></img></font></h3>'+
        '</ul>' +
        '<ul align="left"><h2><font color="white">Titulo de la película</font></h2></ul>'+
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