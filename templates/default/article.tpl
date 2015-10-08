<{include file="header.tpl"}>
<div id="article">
	<div class="article-list">
		<{if $article eq null}>
			没有找到此文章！
		<{else}>
			<h1><a href="/Article/show/id/<{$article.aid}>" title="<{$article.title}>"><{$article.title}></a></h1>
			<span><a href="#"><{$article.sortname}></a> | <a><{$article.date}></a> | <a href="#comment">评论<{$article.comnum}>次</a><!--  | <a href="#">阅读<{$article.views}>次</a> --></span>
			<p><{$article.content|htmlspecialchars_decode}></p>
		
	</div>
	<div class="xl">
		<span class='left'><{if $adjacent.last neq null}>
			<a href="/Article/show/id/<{$adjacent.last.aid}>" title="上篇文章 <{$adjacent.last.title}>">上一篇：<{$adjacent.last.title}></a><{/if}>
		</span>
		<span class='right'><{if $adjacent.next neq null}>
			<a href="/Article/show/id/<{$adjacent.next.aid}>" title="下篇文章 <{$adjacent.next.title}>">下一篇：<{$adjacent.next.title}></a><{/if}>
		</span>
		<div class="clean"></div>
	</div>
	<div class="comment">
		<a name='comment'></a>
		<h4>评论列表: (<a href="#comment"><{$article.comnum}></a>)</h4><br/>
		<{foreach from=$comment item=value}>
			<div class="comment-list">
			<a name="comment-<{$value.cid}>">
				<h4><a href="<{$value.url}>" title="查看 <{$value.poster}> 的主页"  target="_blank" rel="nofollow"><{$value.poster}></a>:<span><i>--------- <{$value.date}></i></span></h4>
				<p><{$value.content}> &nbsp;<a>回复</a></p>
			</div>
		<{/foreach}>
		<form action="/Comment/add_verify" method="post">
			<h4 style="border-top:1px solid #dedede; padding-top:10px;">发表评论:</h4><br/>
			<label>昵称：<font color='red'>*</font></label>
			<label><input type='text' name="poster" style="height:25px; width:40%;" /></label>
			<label>邮箱：<font color='red'>*</font></label>
			<label><input type='text' name="email" style="height:25px; width:40%;" /></label>
			<label>网址：</label>
			<label><input type='text' name="url" value='<{$common.site.site_url}>' style="height:25px; width:40%;" /></label>
			<label>内容：<font color='red'>*</font></label>
			<label><textarea rows='5' name="content" style=" width:60%;"></textarea></label>
			<label>验证码：<font color='red'>*</font> <input type='text' name="verify_code" style="height:25px; width:10%;" /> <img src="/Index/verify_code"  onclick="this.src=this.src+'?'+Math.random" /></label>
			<input type="hidden" name="aid" value="<{$article.aid}>" />
			<label><input type="submit" value='提交' style="width:30%;" /></label>
		</form>
		<{/if}>
	</div>
</div>
<{include file="sidebar.tpl"}>
<div class="clean"></div>
<{include file="footer.tpl"}>