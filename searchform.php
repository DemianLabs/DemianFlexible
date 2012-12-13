<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
    <label class="hidden" for="s"><?php _e('Search'); ?></label>
        <div>
            <input type="text" value="Search" name="s" id="s" onfocus="if (this.value == 'Search') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search';}" />
            <input type="submit" id="searchsubmit" value="" />
        </div>
</form>