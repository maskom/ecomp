<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="form-group">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" value="<?php echo get_search_query(); ?>" name="s" id="s" />
            <div class="input-group-btn">
                <button type="submit" id="searchsubmit" class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i></button>
            </div>
        </div>
    </div>
</form>