	<?php $title='Jquery-plugin'; include('header.php'); ?>

	<div id="flash">
		<div id='ud_slider'>
			
					<div class='bild1 ud_slide'>

					  <h3>7 steg till att köpa fjällstuga</h3>
					  <h4>Mer information hittar du <a href="https://www.hemnet.se/artiklar/guider/2017/02/20/att-kopa-fjallstuga-en-checklista">här</a></h4>
				  </div>

				   	<div class='bild2 ud_slide'>
					  <h3>Regeringsbeslut i dag: värnplikten återinförs</h3>

					  <h4><a href="http://www.aftonbladet.se/nyheter/a/3aq80/regeringsbeslut-i-dag-varnplikten-aterinfors">Tusentals Kallas</a></h4>
				  </div>

					<div class='bild3 ud_slide'>

					  <h3>FLYG + 2 NÄTTER FR. 1.495</h3>

					  <h4>Boka nu på <a href="https://www.ving.se/">Ving</a></h4>

				  	</div>
			<div id="upp_load"></div>	
		  </div>
	</div>
	<div id="flash">
	<div id="instructions">
	<h3> Användning</h3>
	<p> JJ-slider är en JQuery-Slider, den är gjort som ett plugin vilket gör det enkelt för vem som helst att använda den sin hemsida. JJ-slider är en enkel och snygg slider som gör det möjligt att skriva två beskrivande texter till varje bild för att enkelt förklara vad det är för bild och sedan även ange länk til mer information om bilden och/eller annan info. JJ-slider Kan användas för att visa upp annons med länk, nyhetsöversikt tillsammans med länk till fullständiga informationen m.m</p>
	
	<h3> installationsguide JJ-slider</h3>

	<p>  För att installera produkten följ instruktionerna nedan:
	<p> 1: Börja med att hämta hem JQuery <a href="http://jquery.com/">Här</a></p>

	<p> 2: Inkludera JQuery i ditt projekt genom att skriva till följande kodrad i "head:en" på din sida:</p>
	<span style="border: 1px solid #999; padding: 5px; display: block; margin: 10px 0;">
	                &lt;script src="SÖKVÄG TILL DIN KOPIA AV JQUERY"&gt;
	            </span>

	<p> 3: Hämta hem slidern <a href="https://github.com/Jawo-omarzai/gelleria_plugin">här</a> och inkludera den i ditt projekt genom att skriva följande i "head:en" på din sida:
	<span style="border: 1px solid #999; padding: 5px; display: block; margin: 10px 0;">
	                &lt;link rel='stylesheet' href='DIN KOPIA AV FELSLIDE CSS' type='text/css'&gt;
	                &lt;script src='SÖKVÄG TILL DIN KOPIA AV Slidern JS'&gt;
	            </span>

	<p>4: Öppna filen "index.php" och skriv en beskrivande text till bilden i &lt; h3&gt; - taggen samt en länk till var bilden kommer ifrån eller annan information som har med bilden att göra i &lt; h4 &gt; - taggen. se exemplet nedan: 

	<span style="border: 1px solid #999; padding: 5px; display: block; margin: 10px 0;">
	&lt;div id="flash"&gt;<br><br>


	&lt;div id='ud_slider'&gt;<br>
	<br>
	  &lt;div class='bild1 ud_slide'&gt;<br><br>

	      &lt;h3&gt; 7 steg till att köpa fjällstuga. &lt;/h3&gt;<br><br>

	      &lt;h4&gt;Mer information hittar du &lt;a href="https://www.hemnet.se/artiklar/guider/2017/02/20/att-kopa-fjallstuga-en-checklista">här&lt/a&gt;&lt;/h4&gt;<br><br>
	      &lt;/div&gt<br><br>
	  

	 &lt; div class='bild2 ud_slide'&gt;<br> <br>

	      &lt;h3&gt;Regeringsbeslut i dag: värnplikten återinförs&lt;/h3&gt;<br><br>

	       &lt;h4&gt; &lt;a href="http://www.aftonbladet.se/nyheter/a/3aq80/regeringsbeslut-i-dag-varnplikten-aterinfors">Tusentals Kallas/a&gt;&lt;/h4&gt;
	<br><br>
	 &lt;/div&gt
	<br><br>
	  &lt;div class='bild3 ud_slide'&gt;
	<br><br>
	      &lt;h3&gt;FLUG + 2 NÄTTER FR. 1.495&lt;/h3&gt;
	      <br><br>
	      &lt;h4&gt;Boka nu på &lt;a href="https://www.ving.se/">Ving&lt;/a&gt;&lt;/h4&gt; <br>

	  &lt;/div&gt;
	  <br><br>

	&lt;div id="upp_load"/&gt;<br><br>

	&lt;/div&gt;<br><br> <!-- end of gallery -->
	&lt;/div&gt;
	</span>

	<p> 5: Skapa en mapp i dit projekt och döp den till imagas. Lägg dina bilder i mappen. Öppna sedan filen style.css och ange namnen på bilderna du vill ha med i slidern. Bilderna är organiserade med nummer t.ex "bild1", "bild2" osv. Se exemplet nedan: </p>
	<span style="border: 1px solid #999; padding: 5px; display: block; margin: 10px 0;">
	#ud_slider .bild1{
	    background:url("../images/jaw6.jpg") no-repeat center center; 
	}
	<br><br>
	#ud_slider .bild2{
	    background:url("../images/jaw7.jpg") no-repeat center center; 
	}<br><br>

	#ud_slider .bild3{
	    background:url("../images/jaw1.jpg") no-repeat center center; 
	}
	</span>
	<p>6: Sista steget är att anropa slider för att starta. Det gör du genom att öppna filen main.js och längst ner skicka din slider box som parameter. Se nedan:
	<br>
	</p>
	<p>7: ud_slide($('#ud_slider').children('.ud_slide').first());
	</p>


	</div>
	</div>

		




	<?php $path=__DIR__; include('footer.php'); ?>
