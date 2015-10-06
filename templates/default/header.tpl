<!DOCTYPE html>
<head>
	<meta http-equiv="content" content="text/html;charset=utf-8" />
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type" />
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
	<meta name="keywords" content="<{$common.site.site_key}>" />
	<meta name="description" content="<{$common.site.site_description}>"  />
	<link rel="stylesheet" href="/templates/<{$common.site.template}>/style.css" />
	<title><{$title}></title>
</head>
<body>
<div id='main'>
	<div class='header'>
		<h1><a href="<{$common.site.site_url}>" title="<{$common.site.site_title}>"><{$common.site.site_title}></a></h1>
		<h3><{$common.site.site_info}></h3>
		<div class="top-avatar"><a href="#"><img src="/templates/<{$common.site.template}>/images/top-avatar.jpg" /></a></div>
	</div>
	<div class='nav'>
		<ul>
			<{foreach from=$common.navi item=value}>
				<li><a href="<{$value.url}>" class="current"><{$value.navname}></a></li>
			<{/foreach}>
		</ul>
		<div class="clean"></div>
	</div>