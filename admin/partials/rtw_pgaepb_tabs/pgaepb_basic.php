<?php
settings_fields('rtw_pgaepb_basic_setting');
$rtw_wprh_get_setting = get_option('rtw_pgaepb_basic_setting_opt');
?>
<table class="wp-list-table form-table">
	<tbody>
		<tr>
			<th><?php esc_html_e('Hide Page Title', 'pdf-generator-addon-for-elementor-page-builder');?></th>
			<td class="tr2"><input type="checkbox" name="rtw_pgaepb_basic_setting_opt[hide_title]" value="1" <?php echo isset( $rtw_wprh_get_setting['hide_title'] ) && $rtw_wprh_get_setting['hide_title'] == 1 ? 'checked="checked"' : ''; ?> />
				<div class="descr"><?php esc_html_e('Check it if you want to hide page title', 'pdf-generator-addon-for-elementor-page-builder');?></div>
			</td>
		</tr>
		<tr>
			<th><?php esc_html_e('Include Featured Image', 'pdf-generator-addon-for-elementor-page-builder');?></th>
			<td class="tr2"><input type="checkbox" name="rtw_pgaepb_basic_setting_opt[featured_img]" value="1" <?php echo isset( $rtw_wprh_get_setting['featured_img'] ) && $rtw_wprh_get_setting['featured_img'] == 1 ? 'checked="checked"' : ''; ?> />
				<div class="descr"><?php esc_html_e('Check it if you want to show featured image', 'pdf-generator-addon-for-elementor-page-builder');?></div>
			</td>
		</tr>
		<tr>
			<th><?php esc_html_e('Show Post Date', 'pdf-generator-addon-for-elementor-page-builder');?></th>
			<td class="tr2"><input type="checkbox" name="rtw_pgaepb_basic_setting_opt[post_date]" value="1" <?php echo isset( $rtw_wprh_get_setting['post_date'] ) && $rtw_wprh_get_setting['post_date'] == 1 ? 'checked="checked"' : ''; ?> />
				<div class="descr"><?php esc_html_e('Check it if you want to show date of post', 'pdf-generator-addon-for-elementor-page-builder');?></div>
			</td>
		</tr>
		<tr>
			<th><?php esc_html_e('Show Post Tags', 'pdf-generator-addon-for-elementor-page-builder');?></th>
			<td class="tr2"><input type="checkbox" name="rtw_pgaepb_basic_setting_opt[post_tag]" value="1" <?php echo isset( $rtw_wprh_get_setting['post_tag'] ) && $rtw_wprh_get_setting['post_tag'] == 1 ? 'checked="checked"' : ''; ?> />
				<div class="descr"><?php esc_html_e('Check it if you want to show tag list of post', 'pdf-generator-addon-for-elementor-page-builder');?></div>
			</td>
		</tr>
		<tr>
			<th><?php esc_html_e('Show Post Category List', 'pdf-generator-addon-for-elementor-page-builder');?></th>
			<td class="tr2"><input type="checkbox" name="rtw_pgaepb_basic_setting_opt[post_category]" value="1" <?php echo isset( $rtw_wprh_get_setting['post_category'] ) && $rtw_wprh_get_setting['post_category'] == 1 ? 'checked="checked"' : ''; ?> />
				<div class="descr"><?php esc_html_e('Check it if you want to show category of the post', 'pdf-generator-addon-for-elementor-page-builder');?></div>
			</td>
		</tr>
		<tr>
			<th class="tr1"><?php esc_html_e('PDF File Name', 'pdf-generator-addon-for-elementor-page-builder');?></th>
			<td class="tr2">
				<select name="rtw_pgaepb_basic_setting_opt[file_name]">
					<option>Select</option>
					<option value="post_name" <?php echo isset( $rtw_wprh_get_setting['file_name'] ) && $rtw_wprh_get_setting['file_name'] == 'post_name' ? 'selected="selected"' : '';?>><?php esc_html_e('Post Name', 'pdf-generator-addon-for-elementor-page-builder');?>
					</option>
					<option value="post_id" <?php echo isset( $rtw_wprh_get_setting['file_name'] ) && $rtw_wprh_get_setting['file_name'] == 'post_id' ? 'selected="selected"' : '';?>><?php esc_html_e('Post ID', 'pdf-generator-addon-for-elementor-page-builder');?>
					</option>
				 	}
				?>
				</select>
				<div class="descr"><?php esc_html_e('Select what will be the name of the generated PDF', 'pdf-generator-addon-for-elementor-page-builder');?></div>
			</td>
		</tr>
		<tr>
			<th class="tr1"><?php esc_html_e('RTL Support', 'pdf-generator-addon-for-elementor-page-builder');?></th>
			<td class="tr2">
				<input type="checkbox" name="rtw_pgaepb_basic_setting_opt[rtl_support]" value="1" <?php echo isset( $rtw_wprh_get_setting['rtl_support'] ) && $rtw_wprh_get_setting['rtl_support'] == 1 ? 'checked="checked"' : ''; ?> />
				<div class="descr"><?php esc_html_e('Check it if you want generate PDF in Arabic or languages which start from Right Align', 'pdf-generator-addon-for-elementor-page-builder');?></div>
			</td>
		</tr>
		<tr>
			<th class="tr1"><?php esc_html_e('Allowed Post Types', 'pdf-generator-addon-for-elementor-page-builder');?></th>
			<td class="tr2">
				<?php
					$rtw_get_post = get_post_types( array('public' => true), 'names' );
					unset($rtw_get_post['attachment']);
					foreach ( $rtw_get_post as $key => $value) 
					{
						?>
		                	<p>
		                		<input name="rtw_pgaepb_basic_setting_opt[post_type][<?php echo esc_attr($value); ?>]" value="1" <?php echo esc_attr(isset($rtw_wprh_get_setting['post_type'][$value]) && $rtw_wprh_get_setting['post_type'][$value] == 1  ? 'checked="checked"' : ''); ?> type="checkbox"/>
		            			<?php echo esc_attr(ucfirst($value));?>
		                	</p>
					   <?php 
					}
				?>
				<div class="descr"><?php esc_html_e('Choose on which post type you want to generate PDF', 'pdf-generator-addon-for-elementor-page-builder');?></div>
			</td>
		</tr>
		<tr>
		<th class="tr1"><?php esc_html_e('Background Color', 'pdf-generator-addon-for-elementor-page-builder');?></th>
		
		<td class="tr2">
				<input type="text" class="rtw_bck_color" value="<?php echo esc_attr( isset($rtw_wprh_get_setting['rtw_back_color']) ? $rtw_wprh_get_setting['rtw_back_color'] : ''); ?>" name="rtw_pgaepb_basic_setting_opt[rtw_back_color]" />
				<div class="descr"><?php esc_html_e('Select color for generated PDF file', 'pdf-generator-addon-for-elementor-page-builder');?></div>
			</td>
		</tr>
		<tr>
		    <th class="tr1"><?php esc_html_e('Background Image', 'pdf-generator-addon-for-elementor-page-builder');?></th>
		    <td class="tr2"><?php $rtw_src= isset($rtw_wprh_get_setting['rtw_bck_img'] ) ? $rtw_wprh_get_setting['rtw_bck_img'] : '';?>
			   <div id="rtw_bckgrnd_img"><img id="rtw_bckgrnd_img_btn" width="60px" height="60px" src = "<?php echo esc_url($rtw_src); ?>"/>
				</div>
				<div id="rtw_bck_img"><input type="hidden" id="rtw_bck_img_url" name="rtw_pgaepb_basic_setting_opt[rtw_bck_img]" value="<?php echo esc_attr($rtw_src); ?>" />
				
				<button type="button" class="rtw_btn_bckgrnd_img_upload button"><?php esc_html_e( 'Upload/Add Image', 'pdf-generator-addon-for-elementor-page-builder'); ?></button><br>
				<button type="button" class="rtw_btn_remove_bckgrnd_img button"><?php esc_html_e( 'Remove Image', 'pdf-generator-addon-for-elementor-page-builder'); ?></button>
				<div class="descr"><?php esc_html_e('Select background image for generated PDF file', 'pdf-generator-addon-for-elementor-page-builder');?></div>
			</td>
		</tr>
		<tr>
			<th class="tr1"><?php esc_html_e('Show PDF Button', 'pdf-generator-addon-for-elementor-page-builder');?></th>
			<td class="tr2">
				<p>
					<input type="checkbox" name="rtw_pgaepb_basic_setting_opt[rtw_pgaepb_show_pdf_btn][on_cart]" value="1" <?php echo isset( $rtw_wprh_get_setting['rtw_pgaepb_show_pdf_btn']['on_cart'] ) && $rtw_wprh_get_setting['rtw_pgaepb_show_pdf_btn']['on_cart'] == 1 ? 'checked="checked"' : ''; ?> /> Cart Page
				</p>
				<p>
					<input type="checkbox" name="rtw_pgaepb_basic_setting_opt[rtw_pgaepb_show_pdf_btn][on_shop]" value="1" <?php echo isset( $rtw_wprh_get_setting['rtw_pgaepb_show_pdf_btn']['on_shop'] ) && $rtw_wprh_get_setting['rtw_pgaepb_show_pdf_btn']['on_shop'] == 1 ? 'checked="checked"' : ''; ?> /> Shop Page
				</p>
				<p>
					<input type="checkbox" name="rtw_pgaepb_basic_setting_opt[rtw_pgaepb_show_pdf_btn][on_checkout]" value="1" <?php echo isset( $rtw_wprh_get_setting['rtw_pgaepb_show_pdf_btn']['on_checkout'] ) && $rtw_wprh_get_setting['rtw_pgaepb_show_pdf_btn']['on_checkout'] == 1 ? 'checked="checked"' : ''; ?> /> Checkout Page
				</p>
				<div class="descr"><?php esc_html_e('Choose the page where you want show Download PDF button', 'pdf-generator-addon-for-elementor-page-builder');?></div>
			</td>
		</tr>
		<tr>
			<th class="tr1"><?php esc_html_e('Disable Copy', 'pdf-generator-addon-for-elementor-page-builder');?></th>
			<td class="tr2">
				<input type="checkbox" name="rtw_pgaepb_basic_setting_opt[rtw_disable_copy]" value="1" <?php echo isset( $rtw_wprh_get_setting['rtw_disable_copy'] ) && $rtw_wprh_get_setting['rtw_disable_copy'] == 1 ? 'checked="checked"' : ''; ?> />
				<div class="descr"><?php esc_html_e('Check it if you want to disable copying of content from the generated PDF','pdf-generator-addon-for-elementor-page-builder');?>
				</div>
			</td>
		</tr>
	</tbody>	
</table>