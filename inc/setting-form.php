<?php
if(isset($_POST['setting_submit'])){
	if(!isset($_POST['wp_load_posts_date'])){$_POST['wp_load_posts_date']=0;}
	if(!isset($_POST['wp_load_posts_comment'])){$_POST['wp_load_posts_comment']=0;}
	if(!isset($_POST['wp_load_post_category'])){$_POST['wp_load_post_category']=0;}
	if(!isset($_POST['wp_load_less_Btn'])){$_POST['wp_load_less_Btn']=0;}
	if(empty($_POST['wp_load_more_btn_Txt'])){$_POST['wp_load_more_btn_Txt']="Load More";}
	if(empty($_POST['wp_hide_btn_Txt'])){$_POST['wp_hide_btn_Txt']="Load Less";}
	if(empty($_POST['wp_post_excerpt_content'])){$_POST['wp_post_excerpt_content']="120";}
	if(empty($_POST['wp_load_more_Bg_color'])){$_POST['wp_load_more_Bg_color']="#CC1919";}
	if(empty($_POST['wp_load_more_Tx_color'])){$_POST['wp_load_more_Tx_color']="#fff";}
	if(empty($_POST['wp_load_more_Hbg_color'])){$_POST['wp_load_more_Hbg_color']="#9c0505";}
	if(empty($_POST['wp_load_more_Htx_color'])){$_POST['wp_load_more_Htx_color']="#fff";}
	$result = array('wp_load_posts_date'=>sanitize_text_field($_POST['wp_load_posts_date']),'wp_load_posts_comment'=>sanitize_text_field($_POST['wp_load_posts_comment']),'wp_load_post_category'=>sanitize_text_field($_POST['wp_load_post_category']),'wp_load_default_col'=>sanitize_text_field($_POST['wp_load_default_col']),'wp_post_per_page'=>sanitize_text_field($_POST['wp_post_per_page']),'wp_load_more_btn_Txt'=>sanitize_text_field($_POST['wp_load_more_btn_Txt']),'wp_hide_btn_Txt'=>sanitize_text_field($_POST['wp_hide_btn_Txt']),'wp_post_excerpt_content'=>sanitize_text_field($_POST['wp_post_excerpt_content']),'wp_load_less_Btn'=>sanitize_text_field($_POST['wp_load_less_Btn']),'wp_load_more_Bg_color'=>sanitize_text_field($_POST['wp_load_more_Bg_color']),'wp_load_more_Tx_color'=>sanitize_text_field($_POST['wp_load_more_Tx_color']),'wp_load_more_Hbg_color'=>sanitize_text_field($_POST['wp_load_more_Hbg_color']),'wp_load_more_Htx_color'=>sanitize_text_field($_POST['wp_load_more_Htx_color']));
	foreach($result as $key=>$val){
		delete_option($key);
		add_option($key, $val);
	}?>
	<div id="setting-error-settings_updated" class="notice notice-success settings-error is-dismissible"> 
<p><strong>Data has been updated successfully.</strong></p><button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button></div>
<?php }
?>
<h3 class="">Setting</h3>
<form id="setting-form" action="" method="POST">
<table class="form-table">
<tbody>
<tr>
<th>Date</th>
<td> 
<input name="wp_load_posts_date" type="checkbox" id="wp_load_posts_date" value="1" <?php if(!empty(get_option('wp_load_posts_date'))){echo 'checked';}?> > Hide Date</td>
</tr>
<tr>
<th>Comments</th>
<td>
<input name="wp_load_posts_comment" type="checkbox" id="wp_load_posts_comment" value="1" <?php if(!empty(get_option('wp_load_posts_comment'))){echo 'checked';}?> >
	Hide Comments Count</td>
</tr>
<tr>
<th>Category</th>
<td>
<input name="wp_load_post_category" type="checkbox" id="wp_load_post_category" value="1" <?php if(!empty(get_option('wp_load_post_category'))){echo 'checked';}?>>
	Hide Category</td>
</tr>
<tr>
<th>Posts Style</th>
<td>
<select name="wp_load_default_col" class="regular-text"> 
	<option value="1" <?php if(!empty(get_option('wp_load_default_col')) && get_option('wp_load_default_col')==1){echo 'selected';}?>>List Layout</option>
	<option value="2" <?php if(!empty(get_option('wp_load_default_col')) && get_option('wp_load_default_col')==2){echo 'selected';}?>>2 Column (Grid)</option>
	<option value="3" <?php if(!empty(get_option('wp_load_default_col')) && get_option('wp_load_default_col')==3){echo 'selected';}?>>3 Column (Grid)</option>
	<option value="4" <?php if(!empty(get_option('wp_load_default_col')) && get_option('wp_load_default_col')==4){echo 'selected';}?>>4 Column (Grid)</option>
	</select>
</td>
</tr>
<tr>
<th>Load Posts per Click</th>
<td><input name="wp_post_per_page" type="number" id="wp_post_per_page" class="regular-text" placeholder="Default:10" value="<?php echo get_option('wp_post_per_page');?>"></td>
</tr>
<tr>
<th>Load More Button</th>
<td>Button Text: <input style="max-width: 285px;" name="wp_load_more_btn_Txt" type="text" class="regular-text" id="wp_load_more_btn_Txt" value="<?php echo get_option('wp_load_more_btn_Txt');?>" placeholder="Default: Load More"><br><br>
Button Background Color: <input style="max-width: 200px;" name="wp_load_more_Bg_color" type="text" class="regular-text" id="wp_load_more_Bg_color" value="<?php  if(!empty(get_option('wp_load_more_Bg_color'))){echo get_option('wp_load_more_Bg_color');}else {echo "#CC1919";}?>" placeholder="Default: #CC1919"><br><br>
Button Text Color: <input style="max-width: 248px;" name="wp_load_more_Tx_color" type="text" class="regular-text" id="wp_load_more_Tx_color" value="<?php  if(!empty(get_option('wp_load_more_Tx_color'))){echo get_option('wp_load_more_Tx_color');}else {echo "#fff";}?>" placeholder="Default: #fff"><br><br>
Button Hover Background Color: <input style="max-width: 158px;" name="wp_load_more_Hbg_color" type="text" class="regular-text" id="wp_load_more_Hbg_color" value="<?php  if(!empty(get_option('wp_load_more_Hbg_color'))){echo get_option('wp_load_more_Hbg_color');}else {echo "#9c0505";}?>" placeholder="Default: #9c0505"><br><br>
Button Hover Text Color: <input style="max-width: 207px;" name="wp_load_more_Htx_color" type="text" class="regular-text" id="wp_load_more_Htx_color" value="<?php if(!empty(get_option('wp_load_more_Htx_color'))){echo get_option('wp_load_more_Htx_color');}else {echo "#fff";}?>" placeholder="Default: #fff">
</td>
</tr>
<tr>
<th>Load Less</th>
<td><input name="wp_load_less_Btn" type="checkbox" id="wp_load_less_Btn" value="1" <?php if(!empty(get_option('wp_load_less_Btn'))){echo 'checked';}?>>
	Hide Load Less Button</td>
</tr>
<tr>
<th>Load Less Button Text</th>
<td><input name="wp_hide_btn_Txt" type="text" class="regular-text" id="wp_hide_btn_Txt" value="<?php echo get_option('wp_hide_btn_Txt');?>" placeholder="Default: Load Less">
</td>
</tr>
<tr>
<tr>
<th>Excerpt Content (Character)</th>
<td><input name="wp_post_excerpt_content" type="number" id="wp_post_excerpt_content" class="regular-text" placeholder="Default:120" value="<?php echo get_option('wp_post_excerpt_content');?>"></td>
</tr>
<th>Shortcode</th>
<td><b>All Posts:</b> [wp_load_more_option] --OR-- [wp_load_more_option cat_id=""]<br>
<b>Any Category:</b> [wp_load_more_option cat_id="1"] ***Where 1 is category id***<br>
<b>Multiple Categories:</b> [wp_load_more_option cat_id="1,3"] ***Where 1 and 3 are category id***<br>
<b>Custom Posts:</b> [wp_load_more_option post_type="custom_post_type"] ***Where "custom_post_type" is the post type, If the post type is wrong then all the posts will be show.***</td>
</tr>

</tbody>
</table>
<p class="submit"><input type="submit" name="setting_submit" id="setting_submit" class="button button-primary" value="Save Changes"></p></form>
<h3>Pro Version avilable here</h3>
<p>1) You can create unlimited shortcodes.</p>
<p>2) You can add multiple shotcode single page.</p>
<p>3) You can adjust title (ex: size, color, font-size and etc).</p>
<p>4) You can adjust content (ex: size, color, font-size and etc).</p>
<p>5) You can adjust read more button end of the every post.</p>
<p>6) You can addjust number of posts default and after click the load more button.</p>
<p>7) Not WooCommerce Friendly.</p>
<p>8) Built with a unique design layouts.</p>
<p>9) Choose for your theme color.</p>
<p>10) And many more.</p>
<p>Pro Version avilable only $10 USD. Please contact my <a href="mailto:chauhanrajeev85@gmail.com">Email</a></p>
<p><b>Note</b>: We can modify a custom design as per your design (like psd, figma, pdf etc). We will tell you the total Payment as per your design.</p>


