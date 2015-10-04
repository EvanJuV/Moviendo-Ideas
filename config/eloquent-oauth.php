<?php

return [
	'table' => 'oauth_identities',
	'providers' => [
		'facebook' => [
			'client_id' => '450670178473690',
			'client_secret' => '18af807a80e2f8f8f60f49c6aef0a458',
			'redirect_uri' => 'http://localhost:8000/auth/login/fb/redirect',
			'scope' => [email],
		],
		'google' => [
			'client_id' => '12345678',
			'client_secret' => 'y0ur53cr374ppk3y',
			'redirect_uri' => 'https://example.com/your/google/redirect',
			'scope' => [],
		],
		'github' => [
			'client_id' => '12345678',
			'client_secret' => 'y0ur53cr374ppk3y',
			'redirect_uri' => 'https://example.com/your/github/redirect',
			'scope' => [],
		],
		'linkedin' => [
			'client_id' => '12345678',
			'client_secret' => 'y0ur53cr374ppk3y',
			'redirect_uri' => 'https://example.com/your/linkedin/redirect',
			'scope' => [],
		],
		'instagram' => [
			'client_id' => '12345678',
			'client_secret' => 'y0ur53cr374ppk3y',
			'redirect_uri' => 'https://example.com/your/instagram/redirect',
			'scope' => [],
		],
		'soundcloud' => [
			'client_id' => '12345678',
			'client_secret' => 'y0ur53cr374ppk3y',
			'redirect_uri' => 'https://example.com/your/soundcloud/redirect',
			'scope' => [],
		],
	],
];
