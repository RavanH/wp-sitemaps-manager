<p>
	<?php \esc_html_e( 'This XML Sitemap is generated by WordPress to make your content more visible for search engines.', 'xml-sitemaps-manager' ); ?>
	<?php \esc_html_e( 'Managed and extended by XML Sitemaps Manager to improve performance and search engine visibility.', 'xml-sitemaps-manager' ); ?>
	<?php \esc_html_e( 'The XML Sitemaps list the web pages of your site to tell search engines about the organization of your site content. Search engine web crawlers read this file to more intelligently crawl your site.', 'xml-sitemaps-manager' ); ?>
	<?php \printf(
		'<a href="%s" target="_blank">%s</a>',
		\esc_url( __( 'https://www.sitemaps.org/', 'xml-sitemaps-manager' ) ),
		\esc_html__( 'Learn more about XML sitemaps.', 'xml-sitemaps-manager' )
	); ?>
</p>
<p>
	<?php \esc_html_e( 'When your site is public, all XML sitemaps are enabled by default. You can disable the main sitemap index or disable different types of sitemaps.', 'xml-sitemaps-manager' ); ?>
</p>
<p>
	<?php \esc_html_e( 'You can adapt the maximum number of URLs per sitemap. Decrease it if you encounter errors, increase it if your sitemap index contains too many sitemaps.', 'xml-sitemaps-manager' ); ?>
</p>
<p>
	<?php \esc_html_e( 'You can add Last Modified data to the sitemaps. Note that this will cause some additional database queries for certain sitemaps. If you encounter errors, try decreasing the maximum number of URLs per sitemap or disable this option.', 'xml-sitemaps-manager' ); ?>
</p>
<hr />
<p class="description">
	<?php printf (
		/* translators: %1$s Plugin name, %2$s Support forum URL on WordPress.org */
		__( 'These options are provided by %1$s. For help, please go to <a href="%2$s" target="_blank">Support</a>.', 'xml-sitemaps-manager' ),
		'<strong>'.__( 'XML Sitemaps Manager', 'xml-sitemaps-manager' ) . '</strong>', 'https://wordpress.org/support/plugin/xml-sitemaps-manager/'
	); ?>
	<?php printf (
		/* translators: %1$s Review page URL, %2$s Translation page URL on WordPress.org */
		__( 'If you would like to contribute and share with the rest of the WordPress community, please consider writing a quick <a href="%1$s" target="_blank">Review</a> or help out with <a href="%2$s" target="_blank">Translating</a>!', 'xml-sitemaps-manager' ),
		'https://wordpress.org/support/plugin/xml-sitemaps-manager/reviews/?filter=5#new-post', 'https://translate.wordpress.org/projects/wp-plugins/xml-sitemaps-manager/'
	); ?>
	<?php printf (
		/* translators: %s Github project URL */
		__( 'For feature requests, reporting issues or contributing code, you can find and fork this plugin on <a href="%s" target="_blank">Github</a>.', 'xml-sitemaps-manager' ),
		'https://github.com/RavanH/xml-sitemaps-manager'
	); ?>
</p>
