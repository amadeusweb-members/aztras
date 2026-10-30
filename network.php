<?php
function is_page_secure() {
	return variable(VARLocal) && !getQueryParameter('insecure');
}

function network_before_file() {
	echo variableOr('before_file_html', '');
}

variables([
	VAREmail => plus_email('raveendar1960@gmail.com', SITENAME),
	VARPhone  =>  $ph = '+91-91766-86867',
	VARWhatsapp  => whatsapp_clean($ph),
	VARPhone2 =>  $ph = '+91-8148165952',
	VARWhatsapp2 => whatsapp_clean($ph),

	'dont-show-current-menu' => true,

	VARMediakit => '?themecolor=00725B&heading=FEDA15',

	VARLinkToSectionHome => true,
	VARLinkToNodeHome => true,
	VARLinkToSubnodeHome => true,
	VARLinkToSiteHome => true,

	socialBuilder::variableName => socialBuilder::create()
		->addLinkedIn('#todo-raveendar/', 'Raveendar')
		->addGithubGroup()->addUtilityGroup()->getItems()
]);
