<?php

$displayFloat;
if(isset($_GET['item'])){
	$displayFloat = "block";
}
else{
	$displayFloat ="none";
}

?>

<link rel="stylesheet" href="css/consultapure.css" type="text/css" />
<style>
div.show-image img{
  width: 100%;
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

}

#wrapper{
  background
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
/**/
#mg_full_overlay {
  width: 100%;
  position: fixed;
  height: 100%;
  top: 0;
  left: 0;
  background: transparent;
  z-index: 99990;
  overflow-x: hidden;
  overflow-y: auto;
  text-align: center;
  padding: 0 10px;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

#mg_overlay_content {
  min-width: 280px;
  height: auto;
  min-height: 30px;
  margin: 60px 0;
  overflow: visible;
  background: #FFaa00;
  z-index: 99990;
  position: relative;
  padding: 40px 20px 20px;
  display: inline-block;
  vertical-align: middle;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
</style>

        <!-- <div class="mg_touchswipe" id="mg_full_overlay"  style="display: <?php echo htmlspecialchars($displayFloat)?> ;"> -->
        <div class="mg_touchswipe" id="mg_full_overlay"  style="display: none;">
            <div class="mg_item_load">
                <div class="mg_loader">
                    <div class="mgl_1"></div>
                    <div class="mgl_2"></div>
                    <div class="mgl_3"></div>
                    <div class="mgl_4"></div>
                </div>
            </div>
            <div class="mg_lb_shown" id="mg_overlay_content">
                <div class="mg_close_lb" id="mg_inside_close"></div>
                <div class="noSwipe" id="mg_lb_inside_nav">
                    <div class="mg_nav_prev mg_inside_nav_prev" style=
                    "font-style: italic"></div>
                    <div class="mg_nav_next mg_inside_nav_next mg_nav_active">
                        <i></i>
                        <div>
                            Various Tracks
                        </div>
                    </div>
                </div>
                <div class="mg_layout_full mg_lb_single_img">
                    <div>
                        <div class="mg_item_featured">
                        <div class="mg_loader" style="display: none;">
                            <div class="mgl_1"></div>
                            <div class="mgl_2"></div>
                            <div class="mgl_3"></div>
                            <div class="mgl_4"></div>
                        </div><img alt="Rusty crown" src=
                        "http://www.lcweb.it/wp-content/uploads/ewpt_cache/960x0_95_3_c_fdfdfd_5f41517feab159cc22f52d5e69acb5c0.jpg"
                        style="opacity: 1;"></div>
                        <div class="mg_item_content">
                            <div class="mg_content_left">
                                <h1 class="mg_item_title">Rusty crown</h1>
                                <ul class="mg_cust_options">
                                    <li><i class="mg_cust_opt_icon fa fa-user"></i>
                                    <span>Author</span> Envato</li>
                                    <li><i class=
                                    "mg_cust_opt_icon fa fa-map-marker"></i>
                                    <span>Place</span> Green Background</li>
                                    <li><i class=
                                    "mg_cust_opt_icon fa fa-clock-o"></i>
                                    <span>Date</span> 3 February</li>
                                </ul>
                            </div>
                            <div class="mg_item_text mg_widetext">
                                <p>Lorem ipsum dolor sit amet, consectetur
                                adipisici elit, sed eiusmod tempor incidunt ut
                                labore et dolore magna aliqua. Ut enim ad minim
                                veniam, quis nostrud exercitation ullamco laboris
                                nisi ut aliquid ex ea commodi consequat.</p>
                                <p>Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquid ex ea
                                commodi consequat. Excepteur sint obcaecat
                                cupiditat non proident, sunt in culpa qui officia
                                deserunt mollit anim id est laborum.</p>
                            </div>
                            <div class="mgls_squared" id="mg_socials">
                                <ul>
                                    <li id="mg_fb_share">
                                        <a href="javascript:%20void(0)" onclick=
                                        "window.open('https://www.facebook.com/dialog/feed?app_id=425190344259188&amp;display=popup&amp;name=Rusty+crown&amp;description=Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipisici+elit%2C+sed+eiusmod+tempor+incidunt+ut+labore+et+dolore+magna+aliqua.+Ut+enim+ad+minim+veniam%2C+quis+nostrud+exercitation+ullamco+laboris+nisi+ut+aliquid+ex+ea+commodi+consequat.%0D%0A%0D%0AUt+enim+ad+minim+veniam%2C+quis+nostrud+exercitation+ullamco+laboris+nisi+ut+aliquid+ex+ea+commodi+consequat.+Excepteur+sint+obcaecat+cupiditat+non+proident%2C+sunt+in+culpa+qui+officia+deserunt+mollit+anim+id+est+laborum.&nbsp;&amp;picture=http%3A%2F%2Fwww.lcweb.it%2Fwp-content%2Fuploads%2F2012%2F04%2F120H-300x199.jpg&amp;link=http%3A%2F%2Fwww.lcweb.it%2Fmedia-grid%23%21mg_ld_194&amp;redirect_uri=http://www.lcweb.it/lcis_redirect.php','sharer','toolbar=0,status=0,width=548,height=325');">
                                        <span title="Share it!"></span></a>
                                    </li>
                                    <li id="mg_tw_share">
                                        <a href="javascript:%20void(0)" onclick=
                                        "window.open('https://twitter.com/share?text=Check+out+%22Rusty+crown%22+on+LCweb&amp;url=http%3A%2F%2Fwww.lcweb.it%2Fmedia-grid%23%21mg_ld_194','sharer','toolbar=0,status=0,width=548,height=325');">
                                        <span title="Tweet it!"></span></a>
                                    </li>
                                    <li id="mg_pn_share">
                                        <a href="javascript:%20void(0)" onclick=
                                        "window.open('http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fwww.lcweb.it%2Fmedia-grid%23%21mg_ld_194&amp;media=http%3A%2F%2Fwww.lcweb.it%2Fwp-content%2Fuploads%2F2012%2F04%2F120H.jpg&amp;description=Rusty+crown','sharer','toolbar=0,status=0,width=575,height=330');">
                                        <span title="Pin it!"></span></a>
                                    </li>
                                    <li id="mg_gp_share">
                                        <a href="javascript:%20void(0)" onclick=
                                        "window.open('https://plus.google.com/share?url=http%3A%2F%2Fwww.lcweb.it%2Fmedia-grid%23%21mg_ld_194','sharer','toolbar=0,status=0,width=490,height=360');">
                                        <span title="Share it!"></span></a>
                                    </li>
                                </ul>
                            </div><br style="clear: both;">
                        </div>
                    </div>
                </div>
            </div>
        </div>

<div id="wrapper">
  <div id="list">
      <div class="item">
        <div class="show-image">
      <img src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" alt="Rusty crown" fullurl="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" mobileurl="http://www.lcweb.it/wp-content/uploads/ewpt_cache/400x267_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg"><noscript>
					<img src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" alt="Rusty crown"  /></noscript>
					<div class="botonesImage" >
						<a class="linkDown" href="#mg_full_overlay" ><i class="fa fa-download"></i></a>
						<a class="linkPlus" href="#mg_full_overlay" ><i class="fa fa-plus"></i></a>
					</div>
        </div>
		  </div>
      <div class="item">
        <div class="show-image">
      <img alt="Custom content – Google maps" src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/320x192_97_1_r_FFFFFF_329a633f9bac8009d39edaa9e5f1a226.jpg"><noscript>
      <img alt="Custom content &#8211; Google maps" src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/320x192_97_1_r_FFFFFF_329a633f9bac8009d39edaa9e5f1a226.jpg"></noscript>
          <div class="botonesImage" >
            <a class="linkDown" href="admin.php?m=<?php echo  "resultadosBusqueda&item=123" ?>" ><i class="fa fa-download"></i></a>
            <a class="linkPlus" href="admin.php?m=<?php echo  "resultadosBusqueda&item=123" ?>" ><i class="fa fa-plus"></i></a>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="show-image">
      <img alt="Image Random" src="http://www.mildred.co/issueassets/22/14RSowlhat.jpg"><noscript>
        <img alt="Image Random" src="http://www.mildred.co/issueassets/22/14RSowlhat.jpg"></noscript>
          <div class="botonesImage" >
            <a class="linkDown" href="admin.php?m=<?php echo  "resultadosBusqueda&item=123" ?>" ><i class="fa fa-download"></i></a>
            <a class="linkPlus" href="admin.php?m=<?php echo  "resultadosBusqueda&item=123" ?>" ><i class="fa fa-plus"></i></a>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="show-image">
      <img src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" alt="Rusty crown" fullurl="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" mobileurl="http://www.lcweb.it/wp-content/uploads/ewpt_cache/400x267_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg"><noscript>
          <img src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" alt="Rusty crown"  /></noscript>
          <div class="botonesImage" >
            <a class="linkDown" href="admin.php?m=<?php echo  "resultadosBusqueda&item=123" ?>" ><i class="fa fa-download"></i></a>
            <a class="linkPlus" href="admin.php?m=<?php echo  "resultadosBusqueda&item=123" ?>" ><i class="fa fa-plus"></i></a>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="show-image">
      <img alt="Custom content – Google maps" src="http://www.mildred.co/issueassets/22/14RSowlhat.jpg">
      <noscript><img alt="Custom content &#8211; Google maps" src="http://www.mildred.co/issueassets/22/14RSowlhat.jpg"></noscript>
          <div class="botonesImage" >
            <a class="linkDown" href="admin.php?m=<?php echo  "resultadosBusqueda&item=123" ?>" ><i class="fa fa-download"></i></a>
            <a class="linkPlus" href="admin.php?m=<?php echo  "resultadosBusqueda&item=123" ?>" ><i class="fa fa-plus"></i></a>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="show-image">
      <img src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" alt="Rusty crown" fullurl="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" mobileurl="http://www.lcweb.it/wp-content/uploads/ewpt_cache/400x267_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg"><noscript>
          <img src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" alt="Rusty crown"  /></noscript>
          <div class="botonesImage" >
            <a class="linkDown" href="admin.php?m=<?php echo  "resultadosBusqueda&item=123" ?>" ><i class="fa fa-download"></i></a>
            <a class="linkPlus" href="admin.php?m=<?php echo  "resultadosBusqueda&item=123" ?>" ><i class="fa fa-plus"></i></a>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="show-image">
      <img alt="Custom content – Google maps" src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/320x192_97_1_r_FFFFFF_329a633f9bac8009d39edaa9e5f1a226.jpg"><noscript>
      <img alt="Custom content &#8211; Google maps" src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/320x192_97_1_r_FFFFFF_329a633f9bac8009d39edaa9e5f1a226.jpg"></noscript>
          <div class="botonesImage" >
            <a class="linkDown" href="admin.php?m=<?php echo  "resultadosBusqueda&item=123" ?>" ><i class="fa fa-download"></i></a>
            <a class="linkPlus" href="admin.php?m=<?php echo  "resultadosBusqueda&item=123" ?>" ><i class="fa fa-plus"></i></a>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="show-image">
      <img src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" alt="Rusty crown" fullurl="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" mobileurl="http://www.lcweb.it/wp-content/uploads/ewpt_cache/400x267_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg"><noscript>
          <img src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" alt="Rusty crown"  /></noscript>
          <div class="botonesImage" >
            <a class="linkDown" href="admin.php?m=<?php echo  "resultadosBusqueda&item=123" ?>" ><i class="fa fa-download"></i></a>
            <a class="linkPlus" href="admin.php?m=<?php echo  "resultadosBusqueda&item=123" ?>" ><i class="fa fa-plus"></i></a>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="show-image">
      <img alt="Custom content – Google maps" src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/320x192_97_1_r_FFFFFF_329a633f9bac8009d39edaa9e5f1a226.jpg"><noscript>
      <img alt="Custom content &#8211; Google maps" src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/320x192_97_1_r_FFFFFF_329a633f9bac8009d39edaa9e5f1a226.jpg"></noscript>
          <div class="botonesImage" >
            <a class="linkDown" href="admin.php?m=<?php echo  "resultadosBusqueda&item=123" ?>" ><i class="fa fa-download"></i></a>
            <a class="linkPlus" href="admin.php?m=<?php echo  "resultadosBusqueda&item=123" ?>" ><i class="fa fa-plus"></i></a>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="show-image">
      <img alt="Image Random" src="http://www.mildred.co/issueassets/22/14RSowlhat.jpg"><noscript>
        <img alt="Image Random" src="http://www.mildred.co/issueassets/22/14RSowlhat.jpg"></noscript>
          <div class="botonesImage" >
            <a class="linkDown" href="admin.php?m=<?php echo  "resultadosBusqueda&item=123" ?>" ><i class="fa fa-download"></i></a>
            <a class="linkPlus" href="admin.php?m=<?php echo  "resultadosBusqueda&item=123" ?>" ><i class="fa fa-plus"></i></a>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="show-image">
      <img src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" alt="Rusty crown" fullurl="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" mobileurl="http://www.lcweb.it/wp-content/uploads/ewpt_cache/400x267_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg"><noscript>
          <img src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" alt="Rusty crown"  /></noscript>
          <div class="botonesImage" >
            <a class="linkDown" href="admin.php?m=<?php echo  "resultadosBusqueda&item=123" ?>" ><i class="fa fa-download"></i></a>
            <a class="linkPlus" href="admin.php?m=<?php echo  "resultadosBusqueda&item=123" ?>" ><i class="fa fa-plus"></i></a>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="show-image">
      <img alt="Custom content – Google maps" src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/320x192_97_1_r_FFFFFF_329a633f9bac8009d39edaa9e5f1a226.jpg">
      <noscript><img alt="Custom content &#8211; Google maps" src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/320x192_97_1_r_FFFFFF_329a633f9bac8009d39edaa9e5f1a226.jpg"></noscript>
          <div class="botonesImage" >
            <a class="linkDown" href="admin.php?m=<?php echo  "resultadosBusqueda&item=123" ?>" ><i class="fa fa-download"></i></a>
            <a class="linkPlus" href="admin.php?m=<?php echo  "resultadosBusqueda&item=123" ?>" ><i class="fa fa-plus"></i></a>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="show-image">
      <img alt="Image Random" src="http://1.bp.blogspot.com/-cD0mdqrG1VU/T2e1Uqzjo3I/AAAAAAAAASI/4Oki1HXl_WY/s1600/random.jpg"><noscript>
        <img alt="Image Random" src="http://1.bp.blogspot.com/-cD0mdqrG1VU/T2e1Uqzjo3I/AAAAAAAAASI/4Oki1HXl_WY/s1600/random.jpg"></noscript>
          <div class="botonesImage" >
            <a class="linkDown" href="admin.php?m=<?php echo  "resultadosBusqueda&item=123" ?>" ><i class="fa fa-download"></i></a>
            <a class="linkPlus" href="admin.php?m=<?php echo  "resultadosBusqueda&item=123" ?>" ><i class="fa fa-plus"></i></a>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="show-image">
      <img src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" alt="Rusty crown" fullurl="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" mobileurl="http://www.lcweb.it/wp-content/uploads/ewpt_cache/400x267_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg"><noscript>
          <img src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" alt="Rusty crown"  /></noscript>
          <div class="botonesImage" >
            <a class="linkDown" href="admin.php?m=<?php echo  "resultadosBusqueda&item=123" ?>" ><i class="fa fa-download"></i></a>
            <a class="linkPlus" href="admin.php?m=<?php echo  "resultadosBusqueda&item=123" ?>" ><i class="fa fa-plus"></i></a>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="show-image">
      <img alt="Custom content – Google maps" src="http://www.mildred.co/issueassets/22/14RSowlhat.jpg">
      <noscript><img alt="Custom content &#8211; Google maps" src="http://www.mildred.co/issueassets/22/14RSowlhat.jpg"></noscript>
          <div class="botonesImage" >
            <a class="linkDown" href="admin.php?m=<?php echo  "resultadosBusqueda&item=123" ?>" ><i class="fa fa-download"></i></a>
            <a class="linkPlus" href="admin.php?m=<?php echo  "resultadosBusqueda&item=123" ?>" ><i class="fa fa-plus"></i></a>
          </div>
        </div>
      </div>

		 <!--  <div class="item">
        <img src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" alt="Rusty crown" fullurl="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" mobileurl="http://www.lcweb.it/wp-content/uploads/ewpt_cache/400x267_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg"><noscript>
						<img src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" alt="Rusty crown"  /></noscript>
						<div class="botonesImage" >
							<a class="linkDown" href="admin.php?m=<?php echo  "resultadosBusqueda&item=123" ?>" ><i class="fa fa-download"></i></a>
							<a class="linkPlus" href="admin.php?m=<?php echo  "resultadosBusqueda&item=123" ?>" ><i class="fa fa-plus"></i></a>
						</div>
		  </div> -->
  </div>
</div>
<script type="text/javascript">
	/* Funciona en conjunto con consultaIE9.css ,
	 en vez de consulta.css
	 */

	/*$( window ).load( function(){
		    $( '#list' ).masonry( { itemSelector: '.item' } );
		});

	$( window ).load( function(){
	    	var columns    = 3,
	        setColumns = function() { columns = $( window ).width() > 640 ? 3 : $( window ).width() > 320 ? 2 : 1; };
	 
	    setColumns();
	    $( window ).resize( setColumns );
	 
	    $( '#list' ).masonry({
	        itemSelector: '.item',
	        columnWidth:  function( containerWidth ) { return containerWidth / columns; }});
		});*/
</script>