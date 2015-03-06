<?php
	require_once( 'variables.php' );
	require_once( 'head.php' );
	require_once( 'verify.php' );
	require_once( 'menu.php' );
?>

		<section>
			<article id="about" class="container">
				<h2><?php echo $menu[$lang][1]?></h2>
				<img src="images/about/about_md.jpg" class="row">
				<div class="row">
					<div class="col-md-12">
						<?php echo $about[$lang][0];?>
					</div>
				</div>
				<div class="row readmore_div togglable">
					<div class="col-md-4">
						<?php echo $about[$lang][1];?>
					</div>
					<div class="col-md-4">
						<?php echo $about[$lang][2];?>
					</div>
					<div class="col-md-4">
						<?php echo $about[$lang][3];?>
					</div>
					<div class="col-md-12">
						<a href="#" class="readmore_hide"><?php echo $about[$lang][4];?></a>
					</div>
				</div>
				<div class="row readmore_link">
					<div class="col-md-12">
						<a href="#" class="readmore"><?php echo $about[$lang][5];?></a>
					</div>
				</div>

			</article>

			<article id="exibitions" class="container">
				<h2><?php echo $menu[$lang][2]?></h2>
				<div class="row box">
					<div class="col-md-12">
						<div class="box">
						<table class="table table-hover">
							<thead>
								<tr>
									<th><?php echo $exhibitions[$lang][0]?></th>
									<th><?php echo $exhibitions[$lang][1]?></th>
									<th><?php echo $exhibitions[$lang][2]?></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>2002</td>
									<td><?php echo $exhibitions[$lang][3]?></td>
									<td><a href='http://www.undo.net/it/sede/20144'>Villa Prinz, Trieste</a></td>
								</tr>
								<tr>
									<td>2002</td>
									<td><?php echo $exhibitions[$lang][4]?></td>
									<td>Sala esposizioni Minerva Art Cafè, Trieste</td>
								</tr>
								<tr>
									<td>2003</td>
									<td><?php echo $exhibitions[$lang][5]?></td>
									<td>Macerata, Italy</td>
								</tr>
								<tr>
									<td>2003</td>
									<td><a href="#" class="toggle" data-target="2003"><?php echo $exhibitions[$lang][6]?></a></td>
									<td><a href='http://www.museorevoltella.it/'>Museo Revoltella, Trieste</a></td>
								</tr>
								<tr class="togglable" data-id="2003">
									<td colspan="2" class="text-center" width="60%"><img src="images/exhibitions/2004.jpg">
									<td>
										<?php echo $exhibitions[$lang][13]?>
									</td>
								</tr>
								<tr>
									<td>2004</td>
									<td><?php echo $exhibitions[$lang][7]?></td>
									<td>Trieste</td>
								</tr>
								<tr>
									<td>2004</td>
									<td><a href="#" class="toggle" data-target="2004"><?php echo $exhibitions[$lang][8]?></a></td>
									<td><a href='http://en.wikipedia.org/wiki/Trieste%E2%80%93Opicina_tramway'>Trenovia Trieste-Opicina, Trieste</a></td>
								</tr>
								<tr class="togglable" data-id="2004">
									<td colspan="2" class="text-center" width="60%"><img src="images/exhibitions/2004.jpg"></td>
									<td>
										<?php echo $exhibitions[$lang][13]?>
									</td>
								</tr>
								<tr>
									<td>2004</td>
									<td><a href="#" class="toggle" data-target="2004b"><?php echo $exhibitions[$lang][9]?></a></td>
									<td>Galleria Comunale, Trieste</td>
								</tr>
								<tr class="togglable" data-id="2004b">
									<td></td>
									<td colspan="2" class="text-center">
										<img src="images/exhibitions/2004b_01.jpg">
										<img src="images/exhibitions/2004b_02.jpg">
										<img src="images/exhibitions/2004b_03.jpg">
										<img src="images/exhibitions/2004b_04.jpg">
										<img src="images/exhibitions/2004b_05.jpg">
										<img src="images/exhibitions/2004b_06.jpg">
									</td>
								</tr>
								<tr>
									<td>2005</td>
									<td><a href="#" class="toggle" data-target="2005"><?php echo $exhibitions[$lang][10]?></a></td>
									<td>Berchtesgaden, Germany</td>
								</tr>
								<tr class="togglable" data-id="2005">
									<td></td>
									<td colspan="2" class="text-center">
										<img src="images/exhibitions/2005_01.jpg">
									</td>
								</tr>
								<tr id='2005b'>
									<td>2005</td>
									<td><a href="#" class="toggle" data-target="2005b"><?php echo $exhibitions[$lang][11]?></a></td>
									<td>Accademia U.N.A, Trieste</td>
								<tr>
								<tr class="togglable" data-id="2005b">
									<td></td>
									<td colspan="2" class="text-center">
										<img src="images/exhibitions/2005_02.jpg">
									</td>
								</tr>
									<td>2008</td>
									<td><a href="#" class="toggle" data-target="2008"><?php echo $exhibitions[$lang][12]?></a></td>
									<td>Galleria Comunale, Trieste</td>
								</tr>
								<tr class="togglable" data-id="2008">
									<td></td>
									<td colspan="2" class="text-center">
										<img src="images/exhibitions/2008_05.jpg">
										<img src="images/exhibitions/2008_02.jpg">
										<img src="images/exhibitions/2008_03.jpg">
										<img src="images/exhibitions/2008_04.jpg">
										<img src="images/exhibitions/2008_01.jpg">
										<img src="images/exhibitions/2008_06.jpg">
										<img src="images/exhibitions/2008_07.jpg">
										<img src="images/exhibitions/2008_08.jpg">
										<img src="images/exhibitions/2008_09.jpg">
										<img src="images/exhibitions/2008_10.jpg">
										<img src="images/exhibitions/2008_11.jpg">
										<img src="images/exhibitions/2008_12.jpg">
									</td>
								</tr>
							</tbody>
						</table>
						</div>
					</div>
				</div>
			</article>

			<article id="works" class="container">
				<h2><?php echo $menu[$lang][3]?></h2>
				<div class="row box">
					<div class="col-md-12">
						<ul id="lightSlider" class="box">
							<li data-thumb="images/works/thumb_alfabeto_colore.jpg" data-src="images/works/alfabeto_colore.jpg"      >      <img src="images/works/slider_alfabeto_colore.jpg"      ></li>
							<li data-thumb="images/works/thumb_effe.jpg" data-src="images/works/effe.jpg"                 >                 <img src="images/works/slider_effe.jpg"                 ></li>
							<li data-thumb="images/works/thumb_anc_cartulam.jpg" data-src="images/works/anc_cartulam.jpg"         >         <img src="images/works/slider_anc_cartulam.jpg"         ></li>
							<li data-thumb="images/works/thumb_extrema_ratio.jpg" data-src="images/works/extrema_ratio.jpg"        >        <img src="images/works/slider_extrema_ratio.jpg"        ></li>
							<li data-thumb="images/works/thumb_frammenti.jpg" data-src="images/works/frammenti.jpg"            >            <img src="images/works/slider_frammenti.jpg"            ></li>
							<li data-thumb="images/works/thumb_la_noble_art.jpg" data-src="images/works/la_noble_art.jpg"         >         <img src="images/works/slider_la_noble_art.jpg"         ></li>
							<li data-thumb="images/works/thumb_la_strada_1.jpg" data-src="images/works/la_strada_1.jpg"          >          <img src="images/works/slider_la_strada_1.jpg"          ></li>
							<li data-thumb="images/works/thumb_la_strada_2.jpg" data-src="images/works/la_strada_2.jpg"          >          <img src="images/works/slider_la_strada_2.jpg"          ></li>
							<li data-thumb="images/works/thumb_monocromo_patinato.jpg" data-src="images/works/monocromo_patinato.jpg"   >   <img src="images/works/slider_monocromo_patinato.jpg"   ></li>
							<li data-thumb="images/works/thumb_nihil_minus.jpg" data-src="images/works/nihil_minus.jpg"          >          <img src="images/works/slider_nihil_minus.jpg"          ></li>
							<li data-thumb="images/works/thumb_nocturne.jpg" data-src="images/works/nocturne.jpg"             >             <img src="images/works/slider_nocturne.jpg"             ></li>
							<li data-thumb="images/works/thumb_osservatore_osservato.jpg" data-src="images/works/osservatore_osservato.jpg"><img src="images/works/slider_osservatore_osservato.jpg"></li>
							<li data-thumb="images/works/thumb_primi_passi.jpg" data-src="images/works/primi_passi.jpg"          >          <img src="images/works/slider_primi_passi.jpg"          ></li>
							<li data-thumb="images/works/thumb_senza_titolo.jpg" data-src="images/works/senza_titolo.jpg"         >         <img src="images/works/slider_senza_titolo.jpg"         ></li>
							<li data-thumb="images/works/thumb_tavola_n_2.jpg" data-src="images/works/tavola_n_2.jpg"           >           <img src="images/works/slider_tavola_n_2.jpg"           ></li>
							<li data-thumb="images/works/thumb_tomo_primo.jpg" data-src="images/works/tomo_primo.jpg"           >           <img src="images/works/slider_tomo_primo.jpg"           ></li>
							<li data-thumb="images/works/thumb_traditio_cartae.jpg" data-src="images/works/traditio_cartae.jpg"      >      <img src="images/works/slider_traditio_cartae.jpg"      ></li>
							<li data-thumb="images/works/thumb_untitled_1.jpg" data-src="images/works/untitled_1.jpg"           >           <img src="images/works/slider_untitled_1.jpg"           ></li>
						</ul>
					</div>
				</div>
			</article>

			<article id="contact" class="container">
				<h2><?php echo $menu[$lang][4]?></h2>
				<div class="row box">
					<div class="col-md-12">
						<form id="contact-container" class="frame box" method="post" action="<?php echo $_SERVER['PHP_SELF'] . '?' . $_SERVER['QUERY_STRING']?>">
							<div>
								<i class="fa fa-user fa-2x" id="contact-icon-user"></i>
								<input name="name" type="text" class="contact-input" placeholder="<?php echo $contacts[$lang][0];?>" id="contact-name" required>
							</div>
							<div>
								<i class="fa fa-envelope fa-2x" id="contact-icon-mail"></i>
								<input name="email" type="email" class="contact-input" placeholder="<?php echo $contacts[$lang][1];?>" id="contact-email" required>
							</div>
							<div>
								<i class="fa fa-pencil fa-2x" id="contact-icon-pencil"></i>
								<textarea name="text" type="email" class="contact-input" placeholder="<?php echo $contacts[$lang][2];?>" id="contact-comment" required></textarea>
							</div>
							<div class="g-recaptcha" data-sitekey="6LdLXf8SAAAAAPymu-p_xGZViVSZl8xwNjSw1VtW"></div>
							<input type="submit" name='submit' value="<?php echo $contacts[$lang][3];?>" id="contact-send">
						</form>
					</div>
				</div>

			</article>
		</section>

<?php
require_once( 'footer.php' );
?>
