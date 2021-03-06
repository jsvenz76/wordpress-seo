<?php
/**
 * @package WPSEO\Admin
 */

$type = 'alerts';
$dashicon = 'warning';

$i18n_title = __( 'Problems', 'wordpress-seo' );
$i18n_issues = __( 'We have detected the following issues that involve a serious problem concerning the SEO of your site.', 'wordpress-seo' );
$i18n_no_issues = __( 'Good job! We could detect no serious SEO problems.', 'wordpress-seo' );

$active_total = count( $alerts_data['errors']['active'] );
$total = $alerts_data['metrics']['errors'];

$active = $alerts_data['errors']['active'];
$dismissed = $alerts_data['errors']['dismissed'];

include 'partial-alerts-template.php';
