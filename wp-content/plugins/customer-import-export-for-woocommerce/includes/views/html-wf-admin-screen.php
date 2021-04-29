<<<<<<< HEAD
<div class="woocommerce">
    <div class="icon32" id="icon-woocommerce-importer"><br></div>
    <?php
    include_once 'html-wf-common-header.php';
            switch ($tab) {
                    case "expimp" :
                        $this->admin_export_page();
                    break;
                    case "settings" :
                        $this->admin_settings_page();
                    break;
                    case "help" :
                        $this->admin_help_page();
                    break;
                    case "licence" :
                        $this->admin_licence_page($plugin_name);
                    break;
                    default :
                        $this->admin_import_page();
                    break;
            }
    ?>
=======
<div class="woocommerce">
    <div class="icon32" id="icon-woocommerce-importer"><br></div>
    <?php
    include_once 'html-wf-common-header.php';
            switch ($tab) {
                    case "expimp" :
                        $this->admin_export_page();
                    break;
                    case "settings" :
                        $this->admin_settings_page();
                    break;
                    case "help" :
                        $this->admin_help_page();
                    break;
                    case "licence" :
                        $this->admin_licence_page($plugin_name);
                    break;
                    default :
                        $this->admin_import_page();
                    break;
            }
    ?>
>>>>>>> 81d2408ab546c456870bf427d60070682335911c
</div>