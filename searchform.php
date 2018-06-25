<form method="get" class="searchform themeform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div>
		<input type="text" class="search" name="s" onblur="if(this.value=='')this.value='<?php esc_attr_e('To search type and hit enter','kontrast'); ?>';" onfocus="if(this.value=='<?php esc_attr_e('To search type and hit enter','kontrast'); ?>')this.value='';" value="<?php esc_attr_e('To search type and hit enter','kontrast'); ?>" />
	</div>
</form>