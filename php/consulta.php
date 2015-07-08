<?php

$displayFloat;
$item;
if(isset($_GET['item'])){
	$displayFloat = "block";
}
else{
	$displayFloat ="none";
}
if(isset($_GET['item'])){
  $item= $_GET['item'];
}
else
{
  $item=0;
}

?>

<!-- <link rel="stylesheet" href="css/consultapure.css" type="text/css" /> -->
<!-- <link rel="stylesheet" href="css/custom.css" type="text/css" /> -->
<link rel="stylesheet" href="css/frontend.css" type="text/css" />
<!-- <link rel="stylesheet" href="css/galleria.mediagrid.css" type="text/css" />
<link rel="stylesheet" href="css/jplayer.media.grid.css" type="text/css" /> -->

<style>
div.show-image img{
    -webkit-transition: all 1s ease;
     -moz-transition: all 1s ease;
       -o-transition: all 1s ease;
      -ms-transition: all 1s ease;
          transition: all 1s ease;
width: 100%
}

div.show-image{
  border: 10px solid #fff;
	position:relative;
	float:left;
	margin:5px;
  -webkit-transition: all 1s ease;
     -moz-transition: all 1s ease;
       -o-transition: all 1s ease;
      -ms-transition: all 1s ease;
          transition: all 1s ease;
}
div.show-image:hover img{
    /*opacity:0.5;*/
    -webkit-filter: grayscale(100%);
    -moz-filter:grayscale(100%);
    -o-filder:grayscale(100%);
    -ms-filter:grayscale(100%);
    filter:grayscale(100%);
    width: 100%;

}

div.show-image:hover .botonesImage{
  display: block;
  bottom: 10px;
  width: 100%;
  text-align: center;
  position:absolute;
  bottom:40px;
}


i.fa.fa-plus{
	font-size: xx-large;
  color:#8d0003;

}

i.fa.fa-download {
	font-size: xx-large;
  color:#8d0003;
}

i.fa.fa-download.title_icon {
  font-size: medium;
  color:rgba(127, 127, 127, 1);
}
#testId:after{
  content:none;

}
div.show-image .botonesImage {
    position:absolute;
    display:none;
}
div.show-image .botonesImage.update {
    top:0;
    left:0;
}
div.show-image .botonesImage.delete {
    top:0;
    left:79%;
}
div.show-image:hover .linkDown {
left:10px;
position: absolute;
}

div.show-image:hover .linkPlus{
right:10px;
position:absolute;
}

</style>
<div class="modal fade" id="modal-form" style="display: none;" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
<!--         <div  id="mg_inside_close" onclick="overhide()">
          <i class="fa fa-times" style="font-size:20px; color:rgb(141, 0, 3);"></i>
        </div> -->
        <div class="mg_item_featured">
          <script src="js/mg_pack.js" type="text/javascript"></script>
          <img alt="Various Tracks" 
          src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/960x0_95_3_l_fdfdfd_31eca7cb61f863aa76b1192f3fa9f433.jpg" 
          style="opacity: 1;">
        </div>
        <div class="mg_item_content">
          <div class="mg_content_left">
            <h1 class="mg_item_title">Various Tracks</h1>
            <ul class="mg_cust_options">
                <li><i class="mg_cust_opt_icon fa fa-microphone"></i> <span>Autor</span> Nombre Autor</li>
                <li><i class="mg_cust_opt_icon fa fa-clock-o"></i> <span>Fecha</span> 20 may</li>
                <li><i class="mg_cust_opt_icon fa fa-download title_icon"></i><span id="testId"><a style="color:blue" href="http://www.lcweb.it/wp-content/uploads/ewpt_cache/960x0_95_3_l_fdfdfd_31eca7cb61f863aa76b1192f3fa9f433.jpg">Descarga</a></span></li>
            </ul>
          </div>
          <div class="mg_item_text mg_widetext" >
              <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.</p>

              <p>Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <br style="clear: both;">
        </div>
      </div> 
    </div>
  </div><!-- /.modal-content --> 
</div><!-- /.modal-dialog -->


<div class="row wrapper">
          <div class="col-xs-12" >
              <div class="input-group">
                <input type="text" class="input-sm form-control" placeholder="Buscar">
                <br>
                <span class="input-group-btn"> 
                  <button class="btn btn-sm btn-default" type="button" href="#"> <i class="fa fa-search"></i> </button>
                  <!-- <a href="admin.php?m=subir" class="pull-left btn btn-sm btn-success"><i class="fa fa-upload"></i> Subir</a> -->



                  <button id="btn-up" class="btn btn-sm btn-default" href="#btn-1" data-toggle="class:btn-success"> 
                <i class="fa fa-upload text"></i> <span class="text">&nbsp; Upload</span> 
                <i class="fa fa-check text-active"></i> <span class="text-active">&nbsp; Success</span> 
              </button>
                </span>
              </div>
            </div>

         </div>
<div class="row wrapper">




    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
      <div class="item">
        <div class="Image_Wrapper show-image" style=
        "margin-bottom: 10px; margin-right: 10px; display: inline-block; vertical-align: bottom; overflow: hidden; opacity: 1;" \>
            <img src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" >
            <div class="botonesImage" >
                <a class="linkDown" target="_blank" href="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" ><i class="fa fa-download"></i></a>
                <a class="linkPlus" data-toggle="modal" href="#modal-form" class="btn btn-sm btn-success"><i class="fa fa-plus"></i></a>
            </div>
        </div>
      </div>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
      <div class="item">
        <div class="Image_Wrapper show-image" style=
        "margin-bottom: 10px; margin-right: 10px; display: inline-block; vertical-align: bottom; overflow: hidden; opacity: 1;" \>
            <img src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" >
            <div class="botonesImage" >
                <a class="linkDown" target="_blank" href="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" ><i class="fa fa-download"></i></a>
                <a class="linkPlus" data-toggle="modal" href="#modal-form" class="btn btn-sm btn-success"><i class="fa fa-plus"></i></a>
            </div>
        </div>
      </div>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
      <div class="item">
        <div class="Image_Wrapper show-image" style=
        "margin-bottom: 10px; margin-right: 10px; display: inline-block; vertical-align: bottom; overflow: hidden; opacity: 1;" \>
            <img src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" >
            <div class="botonesImage" >
                <a class="linkDown" target="_blank" href="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" ><i class="fa fa-download"></i></a>
                <a class="linkPlus" data-toggle="modal" href="#modal-form" class="btn btn-sm btn-success"><i class="fa fa-plus"></i></a>
            </div>
        </div>
      </div>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
      <div class="item">
        <div class="Image_Wrapper show-image" style=
        "margin-bottom: 10px; margin-right: 10px; display: inline-block; vertical-align: bottom; overflow: hidden; opacity: 1;" \>
            <img src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" >
            <div class="botonesImage" >
                <a class="linkDown" target="_blank" href="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" ><i class="fa fa-download"></i></a>
                <a class="linkPlus" data-toggle="modal" href="#modal-form" class="btn btn-sm btn-success"><i class="fa fa-plus"></i></a>
            </div>
        </div>
      </div>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
      <div class="item">
        <div class="Image_Wrapper show-image" style=
        "margin-bottom: 10px; margin-right: 10px; display: inline-block; vertical-align: bottom; overflow: hidden; opacity: 1;" \>
            <img src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" >
            <div class="botonesImage" >
                <a class="linkDown" target="_blank" href="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" ><i class="fa fa-download"></i></a>
                <a class="linkPlus" data-toggle="modal" href="#modal-form" class="btn btn-sm btn-success"><i class="fa fa-plus"></i></a>
            </div>
        </div>
      </div>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
      <div class="item">
        <div class="Image_Wrapper show-image" style=
        "margin-bottom: 10px; margin-right: 10px; display: inline-block; vertical-align: bottom; overflow: hidden; opacity: 1;" \>
            <img src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" >
            <div class="botonesImage" >
                <a class="linkDown" target="_blank" href="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" ><i class="fa fa-download"></i></a>
                <a class="linkPlus" data-toggle="modal" href="#modal-form" class="btn btn-sm btn-success"><i class="fa fa-plus"></i></a>
            </div>
        </div>
      </div>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
      <div class="item">
        <div class="Image_Wrapper show-image" style=
        "margin-bottom: 10px; margin-right: 10px; display: inline-block; vertical-align: bottom; overflow: hidden; opacity: 1;" \>
            <img src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" >
            <div class="botonesImage" >
                <a class="linkDown" target="_blank" href="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" ><i class="fa fa-download"></i></a>
                <a class="linkPlus" data-toggle="modal" href="#modal-form" class="btn btn-sm btn-success"><i class="fa fa-plus"></i></a>
            </div>
        </div>
      </div>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
      <div class="item">
        <div class="Image_Wrapper show-image" style=
        "margin-bottom: 10px; margin-right: 10px; display: inline-block; vertical-align: bottom; overflow: hidden; opacity: 1;" \>
            <img src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" >
            <div class="botonesImage" >
                <a class="linkDown" target="_blank" href="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" ><i class="fa fa-download"></i></a>
                <a class="linkPlus" data-toggle="modal" href="#modal-form" class="btn btn-sm btn-success"><i class="fa fa-plus"></i></a>
            </div>
        </div>
      </div>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
      <div class="item">
        <div class="Image_Wrapper show-image" style=
        "margin-bottom: 10px; margin-right: 10px; display: inline-block; vertical-align: bottom; overflow: hidden; opacity: 1;" \>
            <img src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" >
            <div class="botonesImage" >
                <a class="linkDown" target="_blank" href="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" ><i class="fa fa-download"></i></a>
                <a class="linkPlus" data-toggle="modal" href="#modal-form" class="btn btn-sm btn-success"><i class="fa fa-plus"></i></a>
            </div>
        </div>
      </div>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
      <div class="item">
        <div class="Image_Wrapper show-image" style=
        "margin-bottom: 10px; margin-right: 10px; display: inline-block; vertical-align: bottom; overflow: hidden; opacity: 1;" \>
            <img src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" >
            <div class="botonesImage" >
                <a class="linkDown" target="_blank" href="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" ><i class="fa fa-download"></i></a>
                <a class="linkPlus" data-toggle="modal" href="#modal-form" class="btn btn-sm btn-success"><i class="fa fa-plus"></i></a>
            </div>
        </div>
      </div>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
      <div class="item">
        <div class="Image_Wrapper show-image" style=
        "margin-bottom: 10px; margin-right: 10px; display: inline-block; vertical-align: bottom; overflow: hidden; opacity: 1;" \>
            <img src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" >
            <div class="botonesImage" >
                <a class="linkDown" target="_blank" href="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" ><i class="fa fa-download"></i></a>
                <a class="linkPlus" data-toggle="modal" href="#modal-form" class="btn btn-sm btn-success"><i class="fa fa-plus"></i></a>
            </div>
        </div>
      </div>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
      <div class="item">
        <div class="Image_Wrapper show-image" style=
        "margin-bottom: 10px; margin-right: 10px; display: inline-block; vertical-align: bottom; overflow: hidden; opacity: 1;" \>
            <img src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" >
            <div class="botonesImage" >
                <a class="linkDown" target="_blank" href="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" ><i class="fa fa-download"></i></a>
                <a class="linkPlus" data-toggle="modal" href="#modal-form" class="btn btn-sm btn-success"><i class="fa fa-plus"></i></a>
            </div>
        </div>
      </div>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
      <div class="item">
        <div class="Image_Wrapper show-image" style=
        "margin-bottom: 10px; margin-right: 10px; display: inline-block; vertical-align: bottom; overflow: hidden; opacity: 1;" \>
            <img src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" >
            <div class="botonesImage" >
                <a class="linkDown" target="_blank" href="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" ><i class="fa fa-download"></i></a>
                <a class="linkPlus" data-toggle="modal" href="#modal-form" class="btn btn-sm btn-success"><i class="fa fa-plus"></i></a>
            </div>
        </div>
      </div>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
      <div class="item">
        <div class="Image_Wrapper show-image" style=
        "margin-bottom: 10px; margin-right: 10px; display: inline-block; vertical-align: bottom; overflow: hidden; opacity: 1;" \>
            <img src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" >
            <div class="botonesImage" >
                <a class="linkDown" target="_blank" href="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" ><i class="fa fa-download"></i></a>
                <a class="linkPlus" data-toggle="modal" href="#modal-form" class="btn btn-sm btn-success"><i class="fa fa-plus"></i></a>
            </div>
        </div>
      </div>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
      <div class="item">
        <div class="Image_Wrapper show-image" style=
        "margin-bottom: 10px; margin-right: 10px; display: inline-block; vertical-align: bottom; overflow: hidden; opacity: 1;" \>
            <img src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" >
            <div class="botonesImage" >
                <a class="linkDown" target="_blank" href="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" ><i class="fa fa-download"></i></a>
                <a class="linkPlus" data-toggle="modal" href="#modal-form" class="btn btn-sm btn-success"><i class="fa fa-plus"></i></a>
            </div>
        </div>
      </div>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
      <div class="item">
        <div class="Image_Wrapper show-image" style=
        "margin-bottom: 10px; margin-right: 10px; display: inline-block; vertical-align: bottom; overflow: hidden; opacity: 1;" \>
            <img src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" >
            <div class="botonesImage" >
                <a class="linkDown" target="_blank" href="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" ><i class="fa fa-download"></i></a>
                <a class="linkPlus" data-toggle="modal" href="#modal-form" class="btn btn-sm btn-success"><i class="fa fa-plus"></i></a>
            </div>
        </div>
      </div>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
      <div class="item">
        <div class="Image_Wrapper show-image" style=
        "margin-bottom: 10px; margin-right: 10px; display: inline-block; vertical-align: bottom; overflow: hidden; opacity: 1;" \>
            <img src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" >
            <div class="botonesImage" >
                <a class="linkDown" target="_blank" href="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" ><i class="fa fa-download"></i></a>
                <a class="linkPlus" data-toggle="modal" href="#modal-form" class="btn btn-sm btn-success"><i class="fa fa-plus"></i></a>
            </div>
        </div>
      </div>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
      <div class="item">
        <div class="Image_Wrapper show-image" style=
        "margin-bottom: 10px; margin-right: 10px; display: inline-block; vertical-align: bottom; overflow: hidden; opacity: 1;" \>
            <img src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" >
            <div class="botonesImage" >
                <a class="linkDown" target="_blank" href="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" ><i class="fa fa-download"></i></a>
                <a class="linkPlus" data-toggle="modal" href="#modal-form" class="btn btn-sm btn-success"><i class="fa fa-plus"></i></a>
            </div>
        </div>
      </div>
    </div>
</div>
