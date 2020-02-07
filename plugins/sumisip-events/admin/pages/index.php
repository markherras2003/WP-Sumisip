<?php function notifier_page_content(){ ?>

    <div class="container pt-5 pb-5">
        <div class="row mb-5">
            <div class="col-md-12 ">
                <h4>
                    <?php esc_html_e( 'Event plugin settings', 'sumisip-events' ); ?>
                </h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form method="post" name="myform" action="<?php echo admin_url( 'admin-post.php' ); ?>">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Endpoint</label>
                        <input type="text" name="endpoint" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= get_option('notifier_endpoint') ?>">
                        <input type="hidden" name="action" value="notifier_end_point">
                        <small id="emailHelp" class="form-text text-muted">Endpoint to send notification when new post is created.</small>
                    </div>
                   <?php
                   submit_button();
                   ?>
                </form>
            </div>
        </div>
    </div>

<?php } ?>
