  
  <div class="clear"></div>
  
  <div id="profile">
  	<h2>Profile</h2>
	<section class="row">
		<div class="photo"><img src="<?php echo get_template_directory_uri(); ?>/images/keiabout.jpg"></div>
		<h1 class="name">Keisuke Koizumi</h1>
		<div class="text">
				出身：茨城県<br>
				出身専門学校：日本美容専門学校 <br>
				東京都内某有名サロンで12年修行（南青山・表参道・恵比寿・代官山）<br>
				現在勤務地：カンボジア・プノンペン HAIR SALON「solist」
		</div>
	</section>
  </div>
  
  <div id="service">
  	<h2>Service</h2>
	<section class="row">
		<div class="list">
				<table class="table table-striped">
					<tr>
						<th>Gentleman</th>
						<td>&#036;16</td>
					</tr>
					<tr>
						<th>Ladies</th>
						<td>&#036;19</td>
					</tr>
					<tr>
						<th>Kids</th>
						<td>&#036;9</td>
					</tr>
					<tr>
						<th>Hair color</th>
						<td>S &#036;32 / M &#036;36 / L &#036;40<br>
						Japanese product : S &#036;38 / M &#036;44 / L &#036;50
						</td>
					</tr>
					<tr>
						<th>Weaving  herf</th>
						<td>S &#036;24 / M &#036;29 / L &#036;34<br>
						Japanese product : S &#036;30 / M &#036;35 / L &#036;40</td>
					</tr>
					<tr>
						<th>Weaving full</th>
						<td>S &#036;36 / M &#036;41 / L &#036;46<br>
						Japanese product : S &#036;42 / M &#036;47 / L &#036;52</td>
					</tr>
					
					<tr>
						<th>Bleach</th>
						<td>S &#036;38 / M &#036;44 / L &#036;50</td>
					</tr>
					<tr>
						<th>Perm Cold</th>
						<td>S &#036;35 / M &#036;39 / L &#036;43<br>
                        			Point perm : &#036;23 〜 / Bang : &#036;15
                        </td>
					</tr>
					<tr>
						<th>Perm hard</th>
						<td>S &#036;44 / M &#036;49 / L &#036;54</td>
					</tr>
					<tr>
						<th>Perm hot</th>
						<td>S &#036;50 / M &#036;56 / L &#036;62</td>
					</tr>
					
					<tr>
						<th>Straight</th>
						<td>S &#036;54 / M &#036;60 / L &#036;66<br>
                        			Point : &#036;32 / Bang : &#036;19
                        </td>
					</tr>
					<tr>
						<th>Shampoo & Blow</th>
						<td>&#036;5<td>
					</tr>
					<tr>
						<th>Treatment</th>
						<td>&#036;18<td>
					</tr>
				</table>
		</div>
	</section>
  </div>
  
  <div id="access">
  	<h2>Access</h2>
		<div class="text">
			<p>現在はフリーランスの美容師として、プノンペン市内の日本人経営の美容室"solist"にて勤務しています。<br>
			美容室での活動のほか、ヘアメイク・メイクアップアーティストとしても活動しています。<br>
			</p>
		</div>
		<div class="map"><iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d977.226067884787!2d104.92680399999998!3d11.558719999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTHCsDMzJzMxLjQiTiAxMDTCsDU1JzM2LjUiRQ!5e0!3m2!1sja!2skh!4v1416313843277" width="100%" height="300" frameborder="0"></iframe></div>
		<div class="text">
				solist<br>
				9:00-20:00 Close/Tuesday<br>
				0236373202<br>
				2F #09, St242, Sangkat Chaktomuk, Khan Daun Penh, Phnom Penh, Cambodia<br>
				<a href="https://www.facebook.com/pages/solist/1483064085301388?fref=ts">https://www.facebook.com/pages/solist/1483064085301388?fref=ts</a>
		</div>
		
  </div>
  
  
  <div id="contact">
	  <h2>Contact</h2>
	  <p>施術をご希望のお客様、またはお問い合わせご希望の方は以下のコンタクト・フォームからご連絡いただくか、
	  私の電話・メール・FACEBOOKからご連絡ください。</p>
		<div class="form"><?php echo do_shortcode( '[contact-form-7 id="74" title="コンタクトフォーム"]' ); ?></div>
  		<div class="information">
			<table>	
				<tr>
					<th>Telephone</th>
					<td><a href="tel:081500940">081-500-940</a></td>
				</tr>
				<tr>
					<th>E-mail</th>
					<td><a href="mailto:keisuke.koizumi0604@gmail.com">keisuke.koizumi0604@gmail.com</a></td>
				</tr>
				<tr>
					<th>Facebook</th>
					<td><a href="https://www.facebook.com/keisuke0604" target="_blank">https://www.facebook.com/keisuke0604</a></td>
				</tr>
				
			</table>
		</div>
  </div>
  
  
  
  
  
  
  <div id="footer">Copyright 2015 KEISUKE KOIZUMI. All Rights Reserved.</div>

</div><!--//main_container-->
</article>
<?php wp_footer(); ?>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript">
	var flg=2;
	
	$(function(){
		
		setInterval(function(){
			switch(flg){
				case 1:
					$(".img5").fadeOut("slow");
					$(".img1").fadeIn("slow");
					break;
					
				case 2:
					$(".img1").fadeOut("slow");
					$(".img2").fadeIn("slow");
					break;
					
				case 3:
					$(".img2").fadeOut("slow");
					$(".img3").fadeIn("slow");
					break;
				
				case 4:
					$(".img3").fadeOut("slow");
					$(".img4").fadeIn("slow");
					break;
					
				case 5:
					$(".img4").fadeOut("slow");
					$(".img5").fadeIn("slow");
					break;
			}
			
			$("#debug").text(flg);
			
			flg++;
			if(flg>5){
				flg=1;	
			}
			
		},6000);	
	})
</script>
</body>
</html>