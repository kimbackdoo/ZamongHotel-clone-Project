<style>
.header_div2 { padding: 35px 0; }
#Menu { display: flex; justify-content: space-between; }
#Menu > li { position: relative; height: 65px; }
#Menu > li > a { color: #fff; font-size: 18px; font-weight: 500; padding:0 30px; }
#Menu > li > a:hover,
#Menu > li.on > a { color: #d6bfa8; }

#Menu > li > ul { display: none; position: absolute; right: 0; top: 52px; width: 100%; border-top: 3px solid #d6bfa8; background: rgba(0, 0, 0, 0.8); }
#Menu > li:hover > ul { display: block; }

#Menu > li > ul > li { text-align: center; border-bottom: 1px solid #484944; }
#Menu > li > ul > li:last-child { border-bottom: 0px; }
#Menu > li > ul > li > a { color: #ababab; font-size: 16px; line-height: 50px; font-weight: 400; }
#Menu > li > ul > li > a:hover,
#Menu > li > ul > li.on > a { color: #ffffff; }



@media screen and (min-width:1200px){
}
/* 화면크기가 1400px보다 클 때 */
@media screen and (min-width:1400px)  and  (max-width:1700px){
	#Menu > li > a { padding:0 20px; }
}
/* 화면크기가 1400px보다 작을 때 */
@media screen and (max-width:1400px) {
	#Menu > li > a { padding:0 10px; font-size:16px; }
}
</style>


<div class="header_div2">
	<ul id="Menu" >
		<?foreach($menu["pageNum"] as $pn=>$pnStr) {
			if($pn == 100) continue;
			?>
			
			<li <?=$pageNum == $pn ? "class='on'" : ""?> >
				<a href="#menulink" onclick="menulink('menu<?=sprintf("%02d", $pn)?>-1')" ><?=$pnStr?></a>
				<?if(count($menu["tot"][$pn]) > 0){?>
					<ul>
						<?foreach($menu["tot"][$pn] as $sn=>$snStr) {?>
							<li><a href="#menulink" onclick="menulink('menu<?=sprintf("%02d", $pn)?>-<?=$sn?>')" <?=$tot == $pn."_".$sn ? "class='on'" : ""?> ><?=$snStr?></a></li>
						<?}?>
					</ul>
				<?}?>
			</li>

		<?}?>
	</ul>
</div>


