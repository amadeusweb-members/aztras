<?php
domain::add('aztras', __DIR__, domain::SkipList, new domain([
		'folder' => 'sites/aztras/',
		'heading' => 'Aztras Enterprises',
		'local' => 'http://localhost/sites/aztras/%subfol%/%site%/',
		'live' => 'https://%site%.aztras.com/',
		'local-base' => 'http://localhost/sites/aztras/%subfol%/',
		'live-base' => 'https://%subfol%.aztras.com/',
	],
	['%folder%www', '%folder%realty/vra'],
	[
		'realty',
		'charity',
	],
));
