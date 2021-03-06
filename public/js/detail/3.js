if (typeof(php_data.ac_settings.site_tracking) != "undefined" && php_data.ac_settings.site_tracking == "1") {
	(function(e,t,o,n,p,r,i){e.prismGlobalObjectAlias=n;e.pgo=e.pgo||function(){(e.pgo.q=e.pgo.q||[]).push(arguments)};e.pgo.l=(new Date).getTime();r=t.createElement("script");r.src=o;r.async=true;i=t.getElementsByTagName("script")[0];i.parentNode.insertBefore(r,i)})(window,document,"https://prism.app-us1.com/prism.js","pgo");

	pgo('setAccount', php_data.ac_settings.tracking_actid);
	pgo('setTrackByDefault', php_data.ac_settings.site_tracking_default == "1");

	if (typeof trackcmp_email !== 'undefined') {
		pgo('setEmail', trackcmp_email);
	}

	pgo('process');

	function acEnableTracking() {
		var expiration = new Date(new Date().getTime() + 1000 * 60 * 60 * 24 * 30);
		document.cookie = "ac_enable_tracking=1;samesite=none;secure; expires= " + expiration + "; path=/";
		pgo('process', 'allowTracking');
	}

	if (php_data.ac_settings.site_tracking_default == "1" || /(^|; )ac_enable_tracking=([^;]+)/.test(document.cookie)) {
		acEnableTracking();
	}
}