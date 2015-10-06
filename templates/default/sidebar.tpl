<div id="sidebar">
	<div class="mod" style="margin-top: 10px;">
		<input type="text" class="text" /> <input type="submit" value="搜索" />
	</div>
	<div class="mod">
		<h3>近期文章</h3>
		<ul>
			<{foreach from=$common.sidebar.article item = value}>
				<li><a href="/Article/show/id/<{$value.aid}>" title="<{$value.title}>"><{$value.title}></a></li>
			<{foreachelse}>
				<li><a>暂无文章</a></li>
			<{/foreach}>
		</ul>
	</div>
	<div class="mod">
		<h3>近期评论</h3>
		<{foreach from=$common.sidebar.comment item = value }>
			<span><a href="/Article/show/id/<{$value.aid}>#comment-<{$value.cid}>" title="查看该评论上的文章"><{$value.poster}></a>：<{$value.content}>...</span> 
		<{foreachelse}>
			<span>暂无评论</span> 
		<{/foreach}>
	</div>
	<div class="mod">
		<h3>分类列表</h3>
		<ul>
			<{foreach from=$common.sidebar.sortlist item =value }>
				<li><a href="/Sort/show/id/<{$value.sortid}>" title="查看 <{$value.sortname}> 分类下所有文章"><{$value.sortname}> (<{$value.articlenum}>)</a></li>
			<{foreachelse}>
				<li>暂无分类</li> 
			<{/foreach}>
		</ul>
	</div>
	<div class="mod">
		<h3>附加功能</h3>
		<ul>
			<li><a href="/Index/login">登录</a></li>
			<li><a href="http://www.livem.cc">流年博客</a></li>
		</ul>
	</div>
</div>