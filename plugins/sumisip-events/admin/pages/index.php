<?php function notifier_page_content(){ ?>

    <div id="sumisip-core-plugin-settings" class="container pt-5 pb-5">
        <div class="row mb-5">
            <div class="col-md-12 ">
                <h4>
                    <?php esc_html_e( 'Core settings', 'sumisip-events' ); ?>
                </h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

            </div>
        </div>


        <!-- TAB -->
        <form method="post" name="myform" action="<?php echo admin_url( 'admin-post.php' ); ?>">

            <div class="form-tab">
                <div class="tab">
                    <button type="button" class="tablinks " onclick="openCity(event, 'London')" id="defaultOpen"> Notification </button>
                    <button type="button" class="tablinks" onclick="openCity(event, 'Paris')"> API </button>
                    <button type="button" class="tablinks" onclick="openCity(event, 'Tokyo')"> Plugin Control </button>
                </div>

                <div id="London" class="tabcontent p-5">

                    <div class="components-base-control__field mb-4" style="display: flex">
                        <span class="components-checkbox-control__input-container" style="margin-right: 10px">
                            <input id="enable_notification" name="enable_notification" class="components-checkbox-control__input" type="checkbox" value="1" <?php checked(get_option('enable_notification')) ?>>
                        </span>
                        <label class="components-checkbox-control__label" for="enable_notification">Enable Notification for Sumisip App</label>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Endpoint</label>
                        <input type="text" name="endpoint" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= get_option('notifier_endpoint') ?>">
                        <input type="hidden" name="action" value="notifier_end_point">
                        <small id="emailHelp" class="form-text text-muted mb-2">Endpoint to send notification when new post is created.</small>
                        <div class="alert alert-warning" role="alert">
                            Must be a fully qualified URL.
                        </div>
                    </div>

                </div>

                <div id="Paris" class="tabcontent p-5">
                    <h4 class="mb-3"> REST API Restriction </h4>
                    <div class="components-base-control__field mb-4" style="display: flex">
                        <span class="components-checkbox-control__input-container" style="margin-right: 10px">
                            <input id="enable_api_restriction" name="enable_api_restriction" class="components-checkbox-control__input" type="checkbox" value="1" <?php checked( get_option('enable_api_restriction') ) ?>>
                        </span>
                        <label class="components-checkbox-control__label" for="enable_api_restriction">Restrict API Access from public</label>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Whitelist API Access</label>
                        <input type="text" name="restriction_allowed_ips" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                        <input type="hidden" name="action" value="notifier_end_point">
                        <small id="emailHelp" class="form-text text-muted mb-2">Endpoint to send notification when new post is created.</small>
                    </div>
                    <?php if( get_option('restriction_allowed_ips') ): ?>
                        <h4 class="mb-3"> Whitelisted IPs </h4>
                        <ul class="whitlisted-ips">
                            <?php foreach ( get_option('restriction_allowed_ips') as $key => $ip ): ?>
                                <li> <strong><?php echo $ip ?></strong> <a data-ip="<?php echo $ip ?>" class="remove-ip-whitelist" href="javascript:"> Remove </a> </li>
                            <?php endforeach; ?>
                        </ul>
                    <input id="current_allowed_ips" type="hidden" value="<?= implode(',', get_option('restriction_allowed_ips')) ?>">
                    <?php endif; ?>
                </div>

                <div id="Tokyo" class="tabcontent p-5">
                    <h4 class="mb-3"> Additional Plugin Settings </h4>
                </div>
            </div>
        <?php
        submit_button('Save Changes', 'button');
        ?>
        </form>

    </div>

<?php } ?>
