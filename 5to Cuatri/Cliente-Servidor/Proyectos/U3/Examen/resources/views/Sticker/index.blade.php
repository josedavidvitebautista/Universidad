<!DOCTYPE HTML>
<html>
	<head>
		<title>Sticker</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="ethereal/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="ethereal/assets/css/noscript.css" /></noscript>
	</head>

	<body class="is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Wrapper -->
					<div id="wrapper">

						<!-- Panel (Banner) -->
							<section class="panel banner right" id="uno">
								<div class="content color0 span-3-75">
									<h1 class="major">Eyes Wide Shut</h1>
                                    <p><b>Director:</b><br> Stanley Kubrick</p>
									<p><b>Fecha De Estreno:</b><br> 3 de septiembre de 1999 (Reino Unido)</p>
                                    <p><b>Adaptación:</b><br> Relato soñado</p>
                                    <p></p>
									<ul class="actions">
										<li><a href="#dos" class="button primary color1 circle icon solid fa-angle-right">Next</a></li>
									</ul>
								</div>
								<div class="image filtered span-1-75" data-position="25% 25%">
									<img src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/7b956848584219.589fb4c9b9c79.jpg" alt="" />
								</div>
							</section>


						<!-- Panel (Spotlight) -->
							<section class="panel spotlight large left" id="dos">
								<div class="content span-7">
									<h2 class="major">Acerca De...</h2>
									<p>
                                        Es una película de 1999 dirigida por Stanley Kubrick y protagonizada por Tom Cruise y Nicole Kidman. Fue el decimotercer y último largometraje de Kubrick, así como su obra póstuma, ya que el director murió pocos días antes de poder mostrar el montaje definitivo a Warner Bros. Está basada en la novela Relato soñado, de Arthur Schnitzler, y su guion fue escrito por el mismo Kubrick y Frederic Raphael.
                                    </p>
                                    <ul class="actions">
                                        <li><a href="#uno" class="button primary color1 circle icon solid fa-angle-left">Previous</a></li>
                                        <li><a href="#tres" class="button primary color1 circle icon solid fa-angle-right">Next</a></li>
                                    </ul>
								</div>
                                <div class="image filtered span-1-75" data-position="right">
                                    <img src="https://i.kym-cdn.com/photos/images/original/000/543/674/e47.gif" width="140px" height="140px">
                                </div>
								<div class="image filtered tinted" data-position="top left">
									<img src="https://assets.catawiki.nl/assets/2019/9/17/3/1/d/31d3deff-6579-4408-950c-30b2fbe9f208.jpg" alt="" />
								</div>
							</section>


						<!-- Panel (Spotlight) -->
							<section class="panel spotlight large left" id="tres">
								<div class="content span-5">
									<h2 class="major">Sinopsis</h2>

                                    <p>William Harford es médico. Tiene éxito en su trabajo, una hermosa mujer y una hija que le adora. Aunque parece que todo marcha sobre ruedas, Alice le confiesa a su marido que ha estado a punto de separarse de él por otro hombre. El lugar: una fiesta en la que las fantasías eróticas vuelan libremente entre los asistentes. A partir de ese momento, William conoce un mundo desconocido para él. Se une a una “secta” en la que la única norma es dejar volar la imaginación…</p>

                                    <ul class="actions">
                                        <li><a href="#dos" class="button primary color1 circle icon solid fa-angle-left">Previous</a></li>
                                        <li><a href="#cuatro" class="button primary color1 circle icon solid fa-angle-right">Next</a></li>
                                    </ul>
                                    <!-- LoooooL -->
                                    <!--<figure class="icon-cards mt-3">
                                        <div class="icon-cards__content">
                                            <div class="icon-cards__item d-flex align-items-center justify-content-center"><span class="h1">🙂</span></div>
                                            <div class="icon-cards__item d-flex align-items-center justify-content-center"><span class="h1">😊</span></div>
                                            <div class="icon-cards__item d-flex align-items-center justify-content-center"><span class="h1">😀</span></div>
                                        </div>
                                    </figure>

                                    <div class="checkbox">
                                        <input class="d-none" id="toggle-animation" type="checkbox" checked />
                                        <label class="checkbox__checkbox" for="toggle-animation"></label>
                                        <label class="checkbox__label" for="toggle-animation">Toggle animation</label>
                                    </div>-->

                                    <!-- End LoooooL -->

								</div>
								<div class="image filtered tinted" data-position="top right">
									<img src="https://www.liberaradio.com/wp-content/uploads/2021/05/maxresdefault.jpg" alt="" />
								</div>
							</section>

						<!-- Panel -->
							<section class="panel" id="cuatro">
								<div class="intro color2">
									<h2 class="major">Elenco</h2>
                                    <!--<img src="http://iae.news/wp-content/uploads/2021/04/b280b67696c1a7d17a6d26e46ff9f254-1.gif">-->
                                    <p><a href="#tres" class="button primary color1 circle icon solid fa-angle-left">Previous</a></p>
                                    <p><a href="#cinco" class="button primary color1 circle icon solid fa-angle-right">Next</a></p>

								</div>
								<div class="gallery">
                                    @foreach($regre as $value)
                                    <a href="{{$value['Foto']}}" class="image filtered span-3" data-position="bottom"><img src="{{$value['Foto']}}" alt="" /></a>
                                    @endforeach
									<div class="group span-9-25">
                                        @foreach($most as $item)
                                            <a href="{{$item['Foto']}}" class="image filtered span-1-5" data-position="center"><img src="{{$item['Foto']}}" alt="" /></a>
                                        @endforeach
										<!--<a href="images/gallery/fulls/03.jpg" class="image filtered span-1-5" data-position="bottom"><img src="https://www.goldenglobes.com/sites/default/files/2021-12/nicole-kidman-nom-pro-gettyimages-1356865807.jpg?format=pjpg&auto=webp&optimize=high&width=850" alt="" /></a>
                                        <a href="images/gallery/fulls/02.jpg" class="image filtered span-1-5" data-position="center"><img src="https://images.mubicdn.net/images/cast_member/3622/cache-215604-1492043044/image-w856.jpg?size=800x" alt="" /></a>
                                        <a href="images/gallery/fulls/03.jpg" class="image filtered span-1-5" data-position="bottom"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/23/Marie_Richardson.jpg/1200px-Marie_Richardson.jpg" alt="" /></a>-->
									</div>

									<!--<div class="group span-4-5">
                                        <a href="images/gallery/fulls/02.jpg" class="image filtered span-1-5" data-position="center"><img src="https://cps-static.rovicorp.com/2/Open/Getty/Todd%20Field/_derived_jpg_q90_310x470_m0/73422286.jpg" alt="" /></a>
                                        <a href="images/gallery/fulls/03.jpg" class="image filtered span-1-5" data-position="bottom"><img src="https://upload.wikimedia.org/wikipedia/commons/b/ba/1642_Sky_du_Mont.JPG" alt="" /></a>
                                        <a href="images/gallery/fulls/02.jpg" class="image filtered span-1-5" data-position="center"><img src="http://prolog.rs/upload/article/12928_Rade%20%C5%A0erbed%C5%BEija.jpg" alt="" /></a>
                                        <a href="images/gallery/fulls/03.jpg" class="image filtered span-1-5" data-position="bottom"><img src="https://upload.wikimedia.org/wikipedia/commons/5/5d/Vinessa_Shaw_2013.png" alt="" /></a>
                                        <a href="images/gallery/fulls/02.jpg" class="image filtered span-1-5" data-position="center"><img src="https://images.mubicdn.net/images/cast_member/136578/cache-138948-1463178189/image-w856.jpg" alt="" /></a>
                                        <a href="images/gallery/fulls/03.jpg" class="image filtered span-1-5" data-position="bottom"><img src="https://static1.lasprovincias.es/www/multimedia/202012/04/media/estrellas-infantiles/11-Leelee-Sobieski-ahora-afp.jpg" alt="" /></a>
										</div>
                                    <div class="group span-4-5">
                                        <a href="images/gallery/fulls/02.jpg" class="image filtered span-1-5" data-position="center"><img src="https://upload.wikimedia.org/wikipedia/commons/5/56/AlanCummingSept2013TIFF.jpg" alt="" /></a>
                                        <a href="images/gallery/fulls/03.jpg" class="image filtered span-1-5" data-position="bottom"><img src="https://www.thefamouspeople.com/profiles/images/leon-vitali-5.jpg" alt="" /></a>
                                        <a href="images/gallery/fulls/02.jpg" class="image filtered span-1-5" data-position="center"><img src="https://resizing.flixster.com/2D3aljjNfEt9p6tpVRILARtYY4w=/218x280/v2/https://flxt.tmsimg.com/assets/273910_v9_ba.jpg" alt="" /></a>
                                        <a href="images/gallery/fulls/03.jpg" class="image filtered span-1-5" data-position="bottom"><img src="https://kmesh.io/img/biography/23/thomas-gibson-biography.jpg" alt="" /></a>
                                        <a href="images/gallery/fulls/02.jpg" class="image filtered span-1-5" data-position="center"><img src="https://www.cine.com/media/actores/1/16206/16206_500.jpg" alt="" /></a>
                                        <a href="images/gallery/fulls/03.jpg" class="image filtered span-1-5" data-position="bottom"><img src="https://vpa.syr.edu/wp-content/uploads/thorndike-stewart.jpg" alt="" /></a>
                                    </div>-->
									<!--<a href="images/gallery/fulls/09.jpg" class="image filtered span-2-5" data-position="right"><img src="images/gallery/thumbs/09.jpg" alt="" /></a>-->
								</div>
							</section>

						<!-- Panel -->
							<section class="panel color4-alt" id="cinco">
								<div class="intro color4">
									<h2 class="major">¿Donde Verla?</h2>
                                    <a href="https://play.hbomax.com/page/urn:hbo:page:GYJWdxQDw5WDDwgEAAABL:type:feature?camp=googleHBOMAX"><img src="https://hbomax-images.warnermediacdn.com/2020-05/square%20social%20logo%20400%20x%20400_0.png" width="100px" height="100px"></a><p class="align-center">HBO MAX</p>
                                    <a href="https://www.primevideo.com/detail/amzn1.dv.gti.68b899b0-a043-a4d1-7658-34a1c1c436c7?ref_=av_auth_return_redir&autoplay=1"><img src="https://m.media-amazon.com/images/G/01/digital/video/acquisition/amazon_video_light_on_dark.png" width="100px" height="100px"></a><p class="align-center">Prime Video</p>
								</div>
								<!--<div class="inner columns divided">
									<div class="span-3-25">
										<form method="post" action="#">
											<div class="fields">
												<div class="field half">
													<label for="name">Name</label>
													<input type="text" name="name" id="name" />
												</div>
												<div class="field half">
													<label for="email">Email</label>
													<input type="email" name="email" id="email" />
												</div>
												<div class="field">
													<label for="message">Message</label>
													<textarea name="message" id="message" rows="4"></textarea>
												</div>
											</div>
											<ul class="actions">
												<li><input type="submit" value="Send Message" class="button primary" /></li>
											</ul>
										</form>
									</div>
									<div class="span-1-5">
										<ul class="contact-icons color1">
											<li class="icon brands fa-twitter"><a href="#">@untitled-tld</a></li>
											<li class="icon brands fa-facebook-f"><a href="#">facebook.com/untitled</a></li>
											<li class="icon brands fa-snapchat-ghost"><a href="#">@untitled-tld</a></li>
											<li class="icon brands fa-instagram"><a href="#">@untitled-tld</a></li>
											<li class="icon brands fa-medium-m"><a href="#">medium.com/untitled</a></li>
										</ul>
									</div>
								</div>-->
							</section>

						<!-- Panel -->
							<section class="panel color2-alt">
								<div class="intro color2">
									<h2 class="major">El Sticker :v</h2>
									<img src="ethereal/Mine/IMG_20220323_184446.jpg" width="200px" height="400px">
								</div>
								<div class="intro color2">
									<div class="span-2-75">
										<h3 class="major">Contacto</h3>
                                        <div class="span-1-30">
                                            <ul class="contact-icons color2">
                                                <li class="icon brands fa-twitter"><a href="https://twitter.com/Zeiya24">Twitter</a></li>
                                                <li class="icon brands fa-github"><a href="https://github.com/josedavidvitebautista/Examen5End.git">GitHub</a></li>
                                            </ul>
                                            <ul  class="contact-icons color2">

                                            </ul>
                                        </div>

                                    </div>

										<!--<p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is <em>emphasized</em>.
										This is <sup>superscript</sup> text and this is <sub>subscript</sub> text.
										This is <u>underlined</u> and this is code: <code>for (;;) { ... }</code>. Finally, <a href="#">this is a link</a>.</p>

										<h1>Heading Level 1</h1>
										<h2>Heading Level 2</h2>
										<h3>Heading Level 3</h3>
										<h4>Heading Level 4</h4>
										<h5>Heading Level 5</h5>
										<h6>Heading Level 6</h6>

									</div>
									<div class="span-3">

										<h4>Blockquote</h4>
										<blockquote>Lorem ipsum dolor sit amet. Felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in vestibulum. Blandit adipiscing eu iaculis volutpat ac adipiscing volutpat ac adipiscing faucibus.</blockquote>

										<h4>Preformatted</h4>
										<pre><code>i = 0;

while (!deck.isInOrder()) {
    print 'Iteration ' + (i++);
    deck.shuffle();
}

print 'It took ' + i + ' iterations to sort the deck.';</code></pre>

									</div>
									<div class="span-1-25">

										<h3 class="major">Lists</h3>

										<h4>Unordered</h4>
										<ul>
											<li>Lorem ipsum dolor sit.</li>
											<li>Dolor pulvinar etiam.</li>
											<li>Etiam vel felis viverra.</li>
										</ul>

										<h4>Alternate</h4>
										<ul class="alt">
											<li>Lorem ipsum dolor sit.</li>
											<li>Dolor pulvinar etiam.</li>
											<li>Etiam vel felis viverra.</li>
											<li>Felis enim feugiat.</li>
										</ul>

									</div>
									<div class="span-1-5">

										<h4>Ordered</h4>
										<ol>
											<li>Lorem ipsum dolor sit.</li>
											<li>Dolor pulvinar etiam.</li>
											<li>Etiam vel felis viverra.</li>
											<li>Felis enim feugiat.</li>
											<li>Etiam vel felis lorem.</li>
										</ol>

										<h4>Actions</h4>
										<ul class="actions">
											<li><a href="#" class="button primary color2">Default</a></li>
											<li><a href="#" class="button">Default</a></li>
										</ul>
										<ul class="actions stacked">
											<li><a href="#" class="button primary color2">Default</a></li>
											<li><a href="#" class="button">Default</a></li>
										</ul>

									</div>
									<div class="span-1-25">

										<h4>Icons</h4>
										<ul class="icons">
											<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
											<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
											<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
											<li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
											<li><a href="#" class="icon brands fa-medium-m"><span class="label">Medium</span></a></li>
										</ul>


									</div>
									<div class="span-3">
										<h3 class="major">Table</h3>
										<h4>Default</h4>
										<div class="table-wrapper">
											<table>
												<thead>
													<tr>
														<th>Name</th>
														<th>Description</th>
														<th>Price</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Item One</td>
														<td>Ante turpis integer aliquet porttitor.</td>
														<td>29.99</td>
													</tr>
													<tr>
														<td>Item Two</td>
														<td>Vis ac commodo adipiscing arcu aliquet.</td>
														<td>19.99</td>
													</tr>
													<tr>
														<td>Item Three</td>
														<td> Morbi faucibus arcu accumsan lorem.</td>
														<td>29.99</td>
													</tr>
													<tr>
														<td>Item Four</td>
														<td>Vitae integer tempus condimentum.</td>
														<td>19.99</td>
													</tr>
												</tbody>
												<tfoot>
													<tr>
														<td colspan="2"></td>
														<td>100.00</td>
													</tr>
												</tfoot>
											</table>
										</div>
									</div>
									<div class="span-3">
										<h4>Alternate</h4>
										<div class="table-wrapper">
											<table class="alt">
												<thead>
													<tr>
														<th>Name</th>
														<th>Description</th>
														<th>Price</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Item One</td>
														<td>Ante turpis integer aliquet porttitor.</td>
														<td>29.99</td>
													</tr>
													<tr>
														<td>Item Two</td>
														<td>Vis ac commodo adipiscing arcu aliquet.</td>
														<td>19.99</td>
													</tr>
													<tr>
														<td>Item Three</td>
														<td> Morbi faucibus arcu accumsan lorem.</td>
														<td>29.99</td>
													</tr>
													<tr>
														<td>Item Four</td>
														<td>Vitae integer tempus condimentum.</td>
														<td>19.99</td>
													</tr>
													<tr>
														<td>Item Five</td>
														<td>Ante turpis integer aliquet porttitor.</td>
														<td>29.99</td>
													</tr>
												</tbody>
												<tfoot>
													<tr>
														<td colspan="2"></td>
														<td>100.00</td>
													</tr>
												</tfoot>
											</table>
										</div>
									</div>
									<div class="span-2-25">
										<h3 class="major">Buttons</h3>
										<ul class="actions">
											<li><a href="#" class="button primary color2">Primary</a></li>
											<li><a href="#" class="button">Default</a></li>
										</ul>
										<ul class="actions">
											<li><a href="#" class="button">Default</a></li>
											<li><a href="#" class="button large">Large</a></li>
											<li><a href="#" class="button small">Small</a></li>
										</ul>
										<ul class="actions">
											<li><a href="#" class="button primary color2 icon solid fa-cog">Icon</a></li>
											<li><a href="#" class="button icon fa-gem">Icon</a></li>
										</ul>
										<ul class="actions">
											<li><span class="button primary color2 disabled">Disabled</span></li>
											<li><span class="button disabled">Disabled</span></li>
										</ul>
										<ul class="actions">
											<li><a href="#" class="button primary color2 circle icon solid fa-cog">Icon</a></li>
											<li><a href="#" class="button circle icon fa-gem">Icon</a></li>
										</ul>
									</div>
									<div class="span-4-5">
										<h3 class="major">Form</h3>
										<form method="post" action="#">
											<div class="fields">
												<div class="field third">
													<label for="demo-name">Name</label>
													<input type="text" name="demo-name" id="demo-name" value="" placeholder="Jane Doe" />
												</div>
												<div class="field third">
													<label for="demo-email">Email</label>
													<input type="email" name="demo-email" id="demo-email" value="" placeholder="jane@untitled.tld" />
												</div>
												<div class="field third">
													<label for="demo-category">Category</label>
													<div class="select-wrapper">
														<select name="demo-category" id="demo-category">
															<option value="">-</option>
															<option value="1">Manufacturing</option>
															<option value="1">Shipping</option>
															<option value="1">Administration</option>
															<option value="1">Human Resources</option>
														</select>
													</div>
												</div>
												<div class="field quarter">
													<input type="radio" id="demo-priority-low" name="demo-priority" class="color2" checked />
													<label for="demo-priority-low">Low Priority</label>
												</div>
												<div class="field quarter">
													<input type="radio" id="demo-priority-high" name="demo-priority" class="color2" />
													<label for="demo-priority-high">High Priority</label>
												</div>
												<div class="field quarter">
													<input type="checkbox" id="demo-copy" name="demo-copy" class="color2" />
													<label for="demo-copy">Email a copy</label>
												</div>
												<div class="field quarter">
													<input type="checkbox" id="demo-human" name="demo-human" class="color2" checked />
													<label for="demo-human">Not a robot</label>
												</div>
												<div class="field">
													<label for="demo-message">Message</label>
													<textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="2"></textarea>
												</div>
											</div>
											<ul class="actions">
												<li><input type="submit" value="Send Message" class="primary color2" /></li>
												<li><input type="reset" value="Reset" /></li>
											</ul>
										</form>
									</div>-->
								</div>
                                <div class="intro color2">
                                    <img src="http://iae.news/wp-content/uploads/2021/04/b280b67696c1a7d17a6d26e46ff9f254-1.gif" height="2000px" width="268px">
                                    <p><a href="#uno" class="button primary color1 circle icon solid fa-angle-left">Return</a></p>
                                </div>
							</section>

						<!-- Copyright -->
							<div class="copyright" style="color: white">&copy; Hecho Por Jose David Vite Bautista Con Ayuda De: <a href="https://html5up.net">HTML5 UP</a> :v</div>

					</div>

			</div>

		<!-- Scripts -->
			<script src="ethereal/assets/js/jquery.min.js"></script>
			<script src="ethereal/assets/js/browser.min.js"></script>
			<script src="ethereal/assets/js/breakpoints.min.js"></script>
			<script src="ethereal/assets/js/main.js"></script>
            <script>
                function classToggle() {
                    var el = document.querySelector('.icon-cards__content');
                    el.classList.toggle('step-animation');
                }

                document.querySelector('#toggle-animation').addEventListener('click', classToggle);
            </script>
	</body>
</html>
