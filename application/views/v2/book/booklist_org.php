<div class=banner>首页 --> PostgreSQL相关图书 ... (更新于: <?php echo $last_update['last_update'] ; ?>)</div>
<br>
	<a name=binary></a>
	<?php foreach($bURLs as $bURL) : ?>
		<div class=blockzone>
		<table width=100% border=0 cellpadding=8 fraxme=box cellspacing=0>

			<tr><td width=200 rowspan="3"><?php echo isset($bURL['pic_name']) ? "<img src=/images/book/" .  $bURL['pic_name'] ." width=180></img>" : "" ; ?>  </td>
				<td style="font-weight:bold;font-size:20px;"><?php echo $bURL['thetitle'] ; ?></td>
			</tr>
			<tr><td><?php 
				echo strlen($bURL['author'])> 9 ? "<i class='fas fa-user-friends'></i>" : "<i class='fas fa-user'></i> " ; 
				echo   " 作者：" . $bURL['author'] ; 
				?>   
				<!--
				<details>
					<summary> ... </summary>
					<dl>
						<dt>作者简介：</dt>
						<dd><?php echo   $bURL['book_info'] ; ?></dd>
					</dl>
				</details>
				--> &nbsp; &nbsp; 
			 <i class="fas fa-book"></i>	发布： <?php echo   $bURL['pubdate'] ; ?>   
 				&nbsp; &nbsp;  <br><br>
			 <i class="fas fa-search-dollar"></i> 购买： &nbsp; &nbsp; 
					<a target=_blank href=<?php echo   $bURL['buy_url1'] ; ?>>京东 </a>  &nbsp; &nbsp;   
					<a target=_blank href=<?php echo   $bURL['buy_url2'] ; ?>>当当 </a>  &nbsp; &nbsp;   
					<a target=_blank href=<?php echo   $bURL['buy_url3'] ; ?>>互动出版 </a> 		  </td></tr>
			<tr><td><i class="fas fa-bullhorn"></i> <b>内容简介：</b><span style="color:#999;"> <?php echo   $bURL['book_info'] ; ?></span>

			</td></tr>
	
	
		</table>
		</div>
		<br>
	<?php  endforeach ; ?>

	<br/>





