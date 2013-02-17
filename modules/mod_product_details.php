<div id="fb-root"></div>
<ul class="breadcrumb">
	<li><a href="<?=base_url()?>">Home</a> <span class="divider">/</span></li>
	<li class="active">Detail Produk</li>
</ul>
<div class="">
	<div class="row-fluid">
		<div>
			<div style="margin-left: 0px;"><h1><?=$query->row()->nama?></h1><br></div>
			<div style="width: 420px;" class="span4">
				<div style="width: 420px;" class="span4">	
					<a href="javascript:;" class="thumbnail">
						<img src="http://fc02.deviantart.net/fs70/f/2013/003/8/5/852d89b98a608b5f2c7558ff809f22f3-d5qa34f.jpg" data-src="holder.js/360x270" alt="">
					</a>
					<br>
					<div style="margin-bottom: 40px;"><?=$query->row()->deskripsi?></div>
					<div class="fb-comments" data-href="<?=base_url()?>index.php/product/details/<?=$query->row()->id_product?>" data-width="420" data-num-posts="2"></div>
				</div>
			</div>
			<div style="width: 200px;" class="span2">
				<h3><?=rp($query->row()->harga_jual)?></h3>
				<?=$stock = ($query->row()->qty > 0) ? '<div class="label label-inverse">Tersedia '.$query->row()->qty .' Produk</div>' : '<div class="label label-important">Produk Telah Habis</div>';?>
				<?php $stock_cek = ($query->row()->qty > 0) ? '' : 'disabled="disabled"';?>
				<hr>
				<div>
					<form action="javascript:;">
						<input id="qty" type="text"  name="stock_qty_order" class="span1" placeholder="Qty" style="width:50px;" <?=$stock_cek?> /><br>
						<textarea id="catatan" name="catatan" cols="5" placeholder="Tambahkan catatan jika perlu" <?=$stock_cek?>></textarea><br>
						<input id="id_product" type="hidden" name="id_product" value="<?=$query->row()->id_product?>"/>
						<input id="id_user" type="hidden" name="id_user" value="<?=(isset($sess_user_id)) ? $sess_user_id : ''?>"/>
						<button id="addBasket" onclick="addToBasket()"  class="btn btn-success btn-large" <?=$stock_cek?>><i class="icon-shopping-cart" rel="popover" ></i> Beli Produk ini</button>
						<div id="addBasketLoading"></div>
						<div style="width: 177px;" id="addBasketInfo"></div>
					</form>
				</div>
				<hr>
				<div>
					<iframe src="http://www.facebook.com/plugins/like.php?href=<?=base_url()?>index.php/product/details/<?=$query->row()->id_product?>"
			    	scrolling="no" frameborder="0"
					style="border:none; width:250px; height:100px"></iframe>
				</div>
			</div>
		</div>
	</div>
</div>