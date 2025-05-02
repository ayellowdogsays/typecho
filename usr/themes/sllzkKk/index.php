

<!DOCTYPE html><html lang="zh-CN" data-theme="light">

<head>
  <meta charset="utf-8">
  <meta name="hexo-theme" content="https://github.com/xaoxuu/hexo-theme-stellar/tree/1.29.1" theme-name="Stellar" theme-version="1.29.1">
  
  <meta name="generator" content="Hexo 7.3.0">
  <meta http-equiv='x-dns-prefetch-control' content='on' />
  
  <meta name="renderer" content="webkit">
  <meta name="force-rendering" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <meta name="HandheldFriendly" content="True" >
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="theme-color" media="(prefers-color-scheme: dark)" content="#000">
  <meta name="theme-color" content="#f9fafb">
  
  <title>hexoURL优化 - 十年老狗</title>

  
  <meta name="description" content="巨大纪录片—    细思极恐    —hexo解码方式是三级，且bing等优先收录一级，而且中文解码后，是（差不多，我不会)E8W9I9W9W3JWWKXWSQOKKOPQDKOPPDWQJPDJPEWKOFKEKLDKELMDE3,LDWL;DWLWELDKEWL[WEJJHU9U8YW&#...">
  
  

  <!-- feed -->
  
    <link rel="alternate" href="/atom.xml" title="十年老狗" type="application/atom+xml">
  

  <link rel="stylesheet" href="/css/main.css?v=1.29.1">


  
    <link rel="shortcut icon" href="https://raw.weekdaycare.cn/raw/twikoo-blobcat/main/blobs/blobcatphoto.png">
  

  

  <link rel="stylesheet" href="https://cdn.staticfile.org/lxgw-wenkai-screen-webfont/1.6.0/lxgwwenkaiscreen.css"><link rel="stylesheet" href="/css/extra.css"><link rel="stylesheet" href="https://cdn.bootcdn.net/ajax/libs/lxgw-wenkai-screen-webfont/1.7.0/style.min.css"/>
</head>
<body><div class="sitebg"><div class="siteblur"></div></div>

<div class="l_body s:aa content tech" id="start" layout="post" ><aside class="l_left"><div class="leftbar-container">


<header class="header"><div class="logo-wrap"><a class="avatar" href="/about/"><div class="bg" style="opacity:0;background-image:url(https://gcore.jsdelivr.net/gh/cdn-x/placeholder@1.0.12/avatar/round/rainbow64@3x.webp);"></div><img no-lazy class="avatar" src="https://api.iconify.design/line-md:moon-alt-loop.svg" onerror="javascript:this.classList.add('error');this.src='https://gcore.jsdelivr.net/gh/cdn-x/placeholder@1.0.12/image/2659360.svg';"></a><a class="title" href="/"><div class="main" ff="title">十年老狗</div><div class="sub cap">一只阿黄</div></a></div></header>

<div class="nav-area">
<div class="search-wrapper" id="search-wrapper"><form class="search-form"><a class="search-button" onclick="document.getElementById(&quot;search-input&quot;).focus();"><svg t="1705074644177" viewBox="0 0 1025 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1560" width="200" height="200"><path d="M1008.839137 935.96571L792.364903 719.491476a56.783488 56.783488 0 0 0-80.152866 0 358.53545 358.53545 0 1 1 100.857314-335.166073 362.840335 362.840335 0 0 1-3.689902 170.145468 51.248635 51.248635 0 1 0 99.217358 26.444296 462.057693 462.057693 0 1 0-158.255785 242.303546l185.930047 185.725053a51.248635 51.248635 0 0 0 72.568068 0 51.248635 51.248635 0 0 0 0-72.978056z" p-id="1561"></path><path d="M616.479587 615.969233a50.428657 50.428657 0 0 0-61.498362-5.534852 174.655348 174.655348 0 0 1-177.525271 3.484907 49.403684 49.403684 0 0 0-58.833433 6.76482l-3.074918 2.869923a49.403684 49.403684 0 0 0 8.609771 78.10292 277.767601 277.767601 0 0 0 286.992355-5.739847 49.403684 49.403684 0 0 0 8.404776-76.667958z" p-id="1562"></path></svg></a><input type="text" class="search-input" id="search-input" placeholder="站内搜索"></form><div id="search-result"></div><div class="search-no-result">没有找到内容！</div></div>


<nav class="menu dis-select"><a class="nav-item active" title="阿黄说" href="/"><span>阿黄说</span></a><a class="nav-item" title="阿黄" href="/says/"><span>阿黄</span></a><a class="nav-item" title="阿黄友" href="/dogcare/"><span>阿黄友</span></a></nav>
</div>
<div class="widgets">


<widget class="widget-wrapper slide-up post-list"><div class="widget-header dis-select"><span class="name">最近更新</span><a class="cap-action" id="rss" title="Subscribe" href="/atom.xml"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M5 21q-.825 0-1.412-.587T3 19q0-.825.588-1.412T5 17q.825 0 1.413.588T7 19q0 .825-.587 1.413T5 21m13.5 0q-.65 0-1.088-.475T16.9 19.4q-.275-2.425-1.312-4.537T12.9 11.1q-1.65-1.65-3.762-2.687T4.6 7.1q-.65-.075-1.125-.512T3 5.5q0-.65.45-1.062t1.075-.363q3.075.275 5.763 1.563t4.737 3.337q2.05 2.05 3.338 4.738t1.562 5.762q.05.625-.363 1.075T18.5 21m-6 0q-.625 0-1.075-.437T10.85 19.5q-.225-1.225-.787-2.262T8.65 15.35q-.85-.85-1.888-1.412T4.5 13.15q-.625-.125-1.062-.575T3 11.5q0-.65.45-1.075t1.075-.325q1.825.25 3.413 1.063t2.837 2.062q1.25 1.25 2.063 2.838t1.062 3.412q.1.625-.325 1.075T12.5 21"/></svg></a></div><div class="widget-body fs14"><a class="item title" href="/posts/15.html"><span class="title">救命啊啊啊啊！给vscode报错求解了</span></a><a class="item title" href="/posts/wenzhang2025.html"><span class="title">2025年后的第一篇hh</span></a><a class="item title" href="/2025/02/15/1234/"><span class="title">hexoURL优化</span></a><a class="item title" href="/_posts/4432993.html"><span class="title">给你的hexo加上自建评论区👾</span></a><a class="item title" href="/posts/8.html"><span class="title">hexo加上登录</span></a><a class="item title" href="/posts/9.html"><span class="title">hexo在GitHub上写作</span></a><a class="item title" href="/posts/10.html"><span class="title">我的alist网盘</span></a><a class="item title" href="/posts/11.html"><span class="title">stellar主题修改</span></a></div></widget>
</div>
<footer class="footer dis-select"><div class="social-wrap"><a class="social" href="/" rel="noopener noreferrer"><img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAABGdBTUEAALGPC/xhBQAAADhlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAAqACAAQAAAABAAAAAaADAAQAAAABAAAAAQAAAADa6r/EAAAAC0lEQVQIHWNgAAIAAAUAAY27m/MAAAAASUVORK5CYII=" data-src="https://gcore.jsdelivr.net/gh/cdn-x/placeholder@1.0.12/social/08a41b181ce68.svg"/></a><a class="social" href="/" rel="noopener noreferrer"><img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAABGdBTUEAALGPC/xhBQAAADhlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAAqACAAQAAAABAAAAAaADAAQAAAABAAAAAQAAAADa6r/EAAAAC0lEQVQIHWNgAAIAAAUAAY27m/MAAAAASUVORK5CYII=" data-src="https://gcore.jsdelivr.net/gh/cdn-x/placeholder@1.0.12/social/3845874.svg"/></a><a class="social" href="/about/" rel="noopener noreferrer"><img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAABGdBTUEAALGPC/xhBQAAADhlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAAqACAAQAAAABAAAAAaADAAQAAAABAAAAAQAAAADa6r/EAAAAC0lEQVQIHWNgAAIAAAUAAY27m/MAAAAASUVORK5CYII=" data-src="https://gcore.jsdelivr.net/gh/cdn-x/placeholder@1.0.12/social/3616429.svg"/></a><a class="social" href="/settings/" rel="noopener noreferrer"><img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAABGdBTUEAALGPC/xhBQAAADhlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAAqACAAQAAAABAAAAAaADAAQAAAABAAAAAQAAAADa6r/EAAAAC0lEQVQIHWNgAAIAAAUAAY27m/MAAAAASUVORK5CYII=" data-src="https://gcore.jsdelivr.net/gh/cdn-x/placeholder@1.0.12/social/942ebbf1a4b91.svg"/></a><a class="social" onclick="switchTheme()"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024"><path fill="currentColor" fill-rule="evenodd" d="M582.4 326.4c-140.8 0-256 115.2-256 256s115.2 256 256 256 256-115.2 256-256-115.2-256-256-256z m0 448c-70.4 0-131.2-36.8-164.8-92.8 12.8 3.2 27.2 4.8 40 4.8 121.6 0 219.2-99.2 219.2-219.2 0-17.6-1.6-35.2-6.4-52.8 60.8 32 102.4 96 102.4 169.6 1.6 104-84.8 190.4-190.4 190.4zM582.4 262.4c17.6 0 32-14.4 32-32v-128c0-17.6-14.4-32-32-32s-32 14.4-32 32v128c0 17.6 14.4 32 32 32zM262.4 582.4c0-17.6-14.4-32-32-32h-128c-17.6 0-32 14.4-32 32s14.4 32 32 32h128c17.6 0 32-14.4 32-32zM310.4 356.8c6.4 6.4 14.4 9.6 22.4 9.6 8 0 16-3.2 22.4-9.6 12.8-12.8 12.8-32 0-44.8l-91.2-91.2c-12.8-12.8-32-12.8-44.8 0-12.8 12.8-12.8 32 0 44.8l91.2 91.2zM944 220.8c-12.8-12.8-32-12.8-44.8 0l-91.2 91.2c-12.8 12.8-12.8 32 0 44.8 6.4 6.4 14.4 9.6 22.4 9.6 8 0 16-3.2 22.4-9.6l91.2-91.2c12.8-12.8 12.8-33.6 0-44.8zM310.4 808l-91.2 91.2c-12.8 12.8-12.8 32 0 44.8 6.4 6.4 14.4 9.6 22.4 9.6 8 0 16-3.2 22.4-9.6l91.2-91.2c12.8-12.8 12.8-32 0-44.8-11.2-11.2-32-11.2-44.8 0z"></path></svg></a></div></footer>
</div></aside><div class="l_main" id="main">





<div class="article banner top">
  <div class="content">
    <div class="top bread-nav footnote"><div class="left"><div class="flex-row" id="breadcrumb"><a class="cap breadcrumb" href="/">主页</a>
<span class="sep"></span><a class="cap breadcrumb" href="/">文章</a></div>
<div class="flex-row" id="post-meta"><span class="text created">发布于：<time datetime="2025-02-15T10:38:48.352Z">2025-02-15</time></span><span class="sep updated"></span><span class="text updated">更新于：<time datetime="2025-03-25T05:06:12.534Z">2025-03-25</time></span></div></div></div>
    
    <div class="bottom only-title">
      
      <div class="text-area">
        <h1 class="text title"><span>hexoURL优化</span></h1>
        
      </div>
    </div>
    
  </div>
  </div><article class="md-text content slide-up"><h1 id="巨大纪录片—-细思极恐-—"><a href="#巨大纪录片—-细思极恐-—" class="headerlink" title="巨大纪录片—    细思极恐    —"></a>巨大纪录片—    细思极恐    —</h1><p>hexo解码方式是三级，且bing等优先收录一级，而且中文解码后，是（差不多，我不会)E8W9I9W9W3JWWKXWSQOKKOPQDKOPPDWQJPDJPEWKOFKEKLDKELMDE3,LDWL;DWLWELDKEWL[WEJJHU9U8YW&#x2F;&#x2F;.1U2Y9Y80JOSQKUDS9SOJIXSJIOSWJISDWDOP我瞎写的……..将是一场超长预警</p>
<h1 id="解决"><a href="#解决" class="headerlink" title="解决"></a>解决</h1><p>只要在文章加上</p>
<figure class="highlight plaintext"><table><tr><td class="gutter"><pre><span class="line">1</span><br><span class="line">2</span><br><span class="line">3</span><br><span class="line">4</span><br></pre></td><td class="code"><pre><span class="line">---</span><br><span class="line">title: 第一本文章</span><br><span class="line">permalink: _posts/自己命名.html</span><br><span class="line">---</span><br></pre></td></tr></table></figure>

<p>即可！</p>
<h1 id="最后"><a href="#最后" class="headerlink" title="最后"></a>最后</h1><p>NOW ENJOY 你能看到 域名&#x2F;_posts&#x2F;自己命名.html 即可</p>

<div class="article-footer slide-up fs14">
    <section id="share">
      <div class="header"><span>分享文章</span></div>
      <div class="body">
        <div class="link"><input class="copy-area" readonly="true" id="copy-link" value="https://ayellowdogsays.cn/2025/02/15/1234/" /></div>
        <div class="social-wrap dis-select"><a class="social share-item wechat" onclick="util.toggle(&quot;qrcode-wechat&quot;)"><img class="lazy"  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAABGdBTUEAALGPC/xhBQAAADhlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAAqACAAQAAAABAAAAAaADAAQAAAABAAAAAQAAAADa6r/EAAAAC0lEQVQIHWNgAAIAAAUAAY27m/MAAAAASUVORK5CYII=" data-src="https://gcore.jsdelivr.net/gh/cdn-x/placeholder@1.0.12/social/b32ef3da1162a.svg" /></a><a class="social share-item weibo" target="_blank" rel="external nofollow noopener noreferrer" href="https://service.weibo.com/share/share.php?url=https://ayellowdogsays.cn/2025/02/15/1234/&title=hexoURL优化 - 十年老狗&summary=巨大纪录片—    细思极恐    —hexo解码方式是三级，且bing等优先收录一级，而且中文解码后，是（差不多，我不会)E8W9I9W9W3JWWKXWSQOKKOPQDKOPPDWQJPDJPEWKOFKEKLDKELMDE3,..."><img class="lazy"  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAABGdBTUEAALGPC/xhBQAAADhlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAAqACAAQAAAABAAAAAaADAAQAAAABAAAAAQAAAADa6r/EAAAAC0lEQVQIHWNgAAIAAAUAAY27m/MAAAAASUVORK5CYII=" data-src="https://gcore.jsdelivr.net/gh/cdn-x/placeholder@1.0.12/social/80c07e4dbb303.svg" /></a><a class="social share-item email" href="mailto:?subject=hexoURL优化 - 十年老狗&amp;body=https://ayellowdogsays.cn/2025/02/15/1234/" rel="external nofollow noreferrer"><img class="lazy"  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAABGdBTUEAALGPC/xhBQAAADhlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAAqACAAQAAAABAAAAAaADAAQAAAABAAAAAQAAAADa6r/EAAAAC0lEQVQIHWNgAAIAAAUAAY27m/MAAAAASUVORK5CYII=" data-src="https://gcore.jsdelivr.net/gh/cdn-x/placeholder@1.0.12/social/a1b00e20f425d.svg" /></a><a class="social share-item link" onclick="util.copy(&quot;copy-link&quot;, &quot;复制成功&quot;)"><img class="lazy"  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAABGdBTUEAALGPC/xhBQAAADhlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAAqACAAQAAAABAAAAAaADAAQAAAABAAAAAQAAAADa6r/EAAAAC0lEQVQIHWNgAAIAAAUAAY27m/MAAAAASUVORK5CYII=" data-src="https://gcore.jsdelivr.net/gh/cdn-x/placeholder@1.0.12/social/8411ed322ced6.svg" /></a></div>
        
        <div class="qrcode" id="qrcode-wechat" style="opacity:0;height:0">
          <img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAABGdBTUEAALGPC/xhBQAAADhlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAAqACAAQAAAABAAAAAaADAAQAAAABAAAAAQAAAADa6r/EAAAAC0lEQVQIHWNgAAIAAAUAAY27m/MAAAAASUVORK5CYII=" data-src="https://api.qrserver.com/v1/create-qr-code/?size=256x256&data=https://ayellowdogsays.cn/2025/02/15/1234/"/>
        </div>
        
      </div>
    </section>
    </div>
</article>
<div class="related-wrap slide-up" id="read-next"><section class="body"><div class="item" id="prev"><div class="note">较新文章</div><a href="/posts/wenzhang2025.html">2025年后的第一篇hh</a></div><div class="item" id="next"><div class="note">较早文章</div><a href="/posts/8.html">hexo加上登录</a></div></section></div>

<div class="related-wrap slide-up" id="related-posts">
    <section class='header'>
      <div class='title cap theme'>您可能感兴趣的文章</div>
    </section>
    <section class='body'>
    <div class="related-posts"><a class="item" href="/posts/8.html" title="hexo加上登录"><span class="title">hexo加上登录</span></a></div></section></div>


  <div class="related-wrap md-text slide-up" id="comments">
    <section class='header cmt-title cap theme'>
      <p>快来参与讨论吧~</p>

    </section>
    <section class='body cmt-body waline'>
      

<div id="waline_container" class="waline_thread"><svg class="loading" style="vertical-align:middle;fill:currentColor;overflow:hidden;" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="2709"><path d="M832 512c0-176-144-320-320-320V128c211.2 0 384 172.8 384 384h-64zM192 512c0 176 144 320 320 320v64C300.8 896 128 723.2 128 512h64z" p-id="2710"></path></svg></div>

    </section>
  </div>



<footer class="page-footer slide-up footnote"><hr><div class="sitemap"><div class="sitemap-group"><span class="fs15">博客</span><a href="/">近期</a><a href="/tags/">分类</a><a href="/">标签</a></div><div class="sitemap-group"><span class="fs15">社交</span><a href="/dogcare/">友链</a></div><div class="sitemap-group"><span class="fs15">更多</span><a href="/about/">关于本站</a><a target="_blank" rel="noopener external nofollow noreferrer" href="https://github.com/">GitHub</a></div></div><div class="text"><p>本站由 <a href="/">金毛狗</a> 使用 <a target="_blank" rel="noopener external nofollow noreferrer" href="https://github.com/xaoxuu/hexo-theme-stellar/tree/1.29.1">Stellar 1.29.1</a> 主题创建。<br>本博客所有文章除特别声明外，均采用 <a target="_blank" rel="noopener external nofollow noreferrer" href="https://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY-NC-SA 4.0</a> 许可协议，转载请注明出处。<br>主题用户越多，开发者维护和更新的积极性就越高，如果您喜欢本主题，请在适当的位置显示主题信息和仓库链接以表支持。</p>
</div></footer>
<div class="main-mask" onclick="sidebar.dismiss()"></div></div><aside class="l_right">
<div class="widgets">



<widget class="widget-wrapper slide-up toc" id="data-toc" collapse="false"><div class="widget-header dis-select"><span class="name">本文目录</span><a class="cap-action" onclick="sidebar.toggleTOC()" ><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6h11m-11 6h11m-11 6h11M4 6h1v4m-1 0h2m0 8H4c0-1 2-2 2-3s-1-1.5-2-1"/></svg></a></div><div class="widget-body"><ol class="toc"><li class="toc-item toc-level-1"><a class="toc-link" href="#%E5%B7%A8%E5%A4%A7%E7%BA%AA%E5%BD%95%E7%89%87%E2%80%94-%E7%BB%86%E6%80%9D%E6%9E%81%E6%81%90-%E2%80%94"><span class="toc-text">巨大纪录片—    细思极恐    —</span></a></li><li class="toc-item toc-level-1"><a class="toc-link" href="#%E8%A7%A3%E5%86%B3"><span class="toc-text">解决</span></a></li><li class="toc-item toc-level-1"><a class="toc-link" href="#%E6%9C%80%E5%90%8E"><span class="toc-text">最后</span></a></li></ol></div><div class="widget-footer">

<a class="top" onclick="util.scrollTop()"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 12c0-4.714 0-7.071 1.464-8.536C4.93 2 7.286 2 12 2c4.714 0 7.071 0 8.535 1.464C22 4.93 22 7.286 22 12c0 4.714 0 7.071-1.465 8.535C19.072 22 16.714 22 12 22s-7.071 0-8.536-1.465C2 19.072 2 16.714 2 12Z"/><path stroke-linecap="round" stroke-linejoin="round" d="m9 15.5l3-3l3 3m-6-4l3-3l3 3"/></g></svg><span>回到顶部</span></a><a class="buttom" onclick="util.scrollComment()"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" fill-rule="evenodd" d="M10.46 1.25h3.08c1.603 0 2.86 0 3.864.095c1.023.098 1.861.3 2.6.752a5.75 5.75 0 0 1 1.899 1.899c.452.738.654 1.577.752 2.6c.095 1.004.095 2.261.095 3.865v1.067c0 1.141 0 2.036-.05 2.759c-.05.735-.153 1.347-.388 1.913a5.75 5.75 0 0 1-3.112 3.112c-.805.334-1.721.408-2.977.43a10.81 10.81 0 0 0-.929.036c-.198.022-.275.054-.32.08c-.047.028-.112.078-.224.232c-.121.166-.258.396-.476.764l-.542.916c-.773 1.307-2.69 1.307-3.464 0l-.542-.916a10.605 10.605 0 0 0-.476-.764c-.112-.154-.177-.204-.224-.232c-.045-.026-.122-.058-.32-.08c-.212-.023-.49-.03-.93-.037c-1.255-.021-2.171-.095-2.976-.429A5.75 5.75 0 0 1 1.688 16.2c-.235-.566-.338-1.178-.389-1.913c-.049-.723-.049-1.618-.049-2.76v-1.066c0-1.604 0-2.86.095-3.865c.098-1.023.3-1.862.752-2.6a5.75 5.75 0 0 1 1.899-1.899c.738-.452 1.577-.654 2.6-.752C7.6 1.25 8.857 1.25 10.461 1.25M6.739 2.839c-.914.087-1.495.253-1.959.537A4.25 4.25 0 0 0 3.376 4.78c-.284.464-.45 1.045-.537 1.96c-.088.924-.089 2.11-.089 3.761v1c0 1.175 0 2.019.046 2.685c.045.659.131 1.089.278 1.441a4.25 4.25 0 0 0 2.3 2.3c.515.214 1.173.294 2.429.316h.031c.398.007.747.013 1.037.045c.311.035.616.104.909.274c.29.17.5.395.682.645c.169.232.342.525.538.856l.559.944a.52.52 0 0 0 .882 0l.559-.944c.196-.331.37-.624.538-.856c.182-.25.392-.476.682-.645c.293-.17.598-.24.909-.274c.29-.032.639-.038 1.037-.045h.032c1.255-.022 1.913-.102 2.428-.316a4.25 4.25 0 0 0 2.3-2.3c.147-.352.233-.782.278-1.441c.046-.666.046-1.51.046-2.685v-1c0-1.651 0-2.837-.089-3.762c-.087-.914-.253-1.495-.537-1.959a4.25 4.25 0 0 0-1.403-1.403c-.464-.284-1.045-.45-1.96-.537c-.924-.088-2.11-.089-3.761-.089h-3c-1.651 0-2.837 0-3.762.089" clip-rule="evenodd"/><path fill="currentColor" d="M9 11a1 1 0 1 1-2 0a1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0a1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0a1 1 0 0 1 2 0"/></svg><span>参与讨论</span></a></div></widget>
</div></aside><div class='float-panel blur'>
  <button type='button' style='display:none' class='laptop-only rightbar-toggle mobile' onclick='sidebar.rightbar()'>
    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6h11m-11 6h11m-11 6h11M4 6h1v4m-1 0h2m0 8H4c0-1 2-2 2-3s-1-1.5-2-1"/></svg>
  </button>
  <button type='button' style='display:none' class='mobile-only leftbar-toggle mobile' onclick='sidebar.leftbar()'>
    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 11c0-3.771 0-5.657 1.172-6.828C4.343 3 6.229 3 10 3h4c3.771 0 5.657 0 6.828 1.172C22 5.343 22 7.229 22 11v2c0 3.771 0 5.657-1.172 6.828C19.657 21 17.771 21 14 21h-4c-3.771 0-5.657 0-6.828-1.172C2 18.657 2 16.771 2 13z"/><path id="sep" stroke-linecap="round" d="M5.5 10h6m-5 4h4m4.5 7V3"/></g></svg>
  </button>
</div>
</div><div class="scripts">
<script type="text/javascript">
  const ctx = {
    date_suffix: {
      just: `刚刚`,
      min: `分钟前`,
      hour: `小时前`,
      day: `天前`,
    },
    root : `/`,
    tag_plugins: {
      chat: Object.assign(),
    }
  };

  // required plugins (only load if needs)
  if (`local_search`) {
    ctx.search = {};
    ctx.search.service = `local_search`;
    if (ctx.search.service == 'local_search') {
      let service_obj = Object.assign({}, `{"field":"all","path":"/search.json","content":true,"skip_search":null,"sort":"-date"}`);
      ctx.search[ctx.search.service] = service_obj;
    }
  }
  const def = {
    avatar: `https://gcore.jsdelivr.net/gh/cdn-x/placeholder@1.0.12/avatar/round/3442075.svg`,
    cover: `https://file.moyublog.com/free_wallpapers_files/5j5v43f0sj1.jpg`,
  };
  const deps = {
    jquery: `https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js`,
    marked: `https://cdn.jsdelivr.net/npm/marked@13.0.1/lib/marked.umd.min.js`
  }
  

</script>

<script type="text/javascript">
  function RunItem() {
    this.list = []; // 存放回调函数
    this.start = () => {
      for (var i = 0; i < this.list.length; i++) {
        this.list[i].run();
      }
    };
    this.push = (fn, name, setRequestAnimationFrame = true) => {
      let myfn = fn
      if (setRequestAnimationFrame) {
        myfn = () => {
          utils.requestAnimationFrame(fn)
        }
      }
      var f = new Item(myfn, name);
      this.list.push(f);
    };
    this.remove = (name) => {
      for (let index = 0; index < this.list.length; index++) {
        const e = this.list[index];
        if (e.name == name) {
          this.list.splice(index, 1);
        }
      }
    }
    // 构造一个可以run的对象
    function Item(fn, name) {
      // 函数名称
      this.name = name || fn.name;
      // run方法
      this.run = () => {
        try {
          fn()
        } catch (error) {
          console.log(error);
        }
      };
    }
  }

  const utils = {
    // 懒加载 css https://github.com/filamentgroup/loadCSS
    css: (href, before, media, attributes) => {
      var doc = window.document;
      var ss = doc.createElement("link");
      var ref;
      if (before) {
        ref = before;
      } else {
        var refs = (doc.body || doc.getElementsByTagName("head")[0]).childNodes;
        ref = refs[refs.length - 1];
      }
      var sheets = doc.styleSheets;
      if (attributes) {
        for (var attributeName in attributes) {
          if (attributes.hasOwnProperty(attributeName)) {
            ss.setAttribute(attributeName, attributes[attributeName]);
          }
        }
      }
      ss.rel = "stylesheet";
      ss.href = href;
      ss.media = "only x";
      function ready(cb) {
        if (doc.body) {
          return cb();
        }
        setTimeout(function () {
          ready(cb);
        });
      }
      ready(function () {
        ref.parentNode.insertBefore(ss, before ? ref : ref.nextSibling);
      });
      var onloadcssdefined = function (cb) {
        var resolvedHref = ss.href;
        var i = sheets.length;
        while (i--) {
          if (sheets[i].href === resolvedHref) {
            return cb();
          }
        }
        setTimeout(function () {
          onloadcssdefined(cb);
        });
      };
      function loadCB() {
        if (ss.addEventListener) {
          ss.removeEventListener("load", loadCB);
        }
        ss.media = media || "all";
      }
      if (ss.addEventListener) {
        ss.addEventListener("load", loadCB);
      }
      ss.onloadcssdefined = onloadcssdefined;
      onloadcssdefined(loadCB);
      return ss;
    },

    js: (src, opt) => new Promise((resolve, reject) => {
      var script = document.createElement('script');
      if (src.startsWith('/')) {
        src = ctx.root + src.substring(1);
      }
      script.src = src;
      if (opt) {
        for (let key of Object.keys(opt)) {
          script[key] = opt[key]
        }
      } else {
        // 默认异步，如果需要同步，第二个参数传入 {} 即可
        script.async = true
      }
      script.onerror = reject
      script.onload = script.onreadystatechange = function () {
        const loadState = this.readyState
        if (loadState && loadState !== 'loaded' && loadState !== 'complete') return
        script.onload = script.onreadystatechange = null
        resolve()
      }
      document.head.appendChild(script)
    }),

    jq: (fn) => {
      if (typeof jQuery === 'undefined') {
        utils.js(deps.jquery).then(fn)
      } else {
        fn()
      }
    },

    onLoading: (el) => {
      if (el) {
        $(el).append('<div class="loading-wrap"><svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="2"><path stroke-dasharray="60" stroke-dashoffset="60" stroke-opacity=".3" d="M12 3C16.9706 3 21 7.02944 21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3Z"><animate fill="freeze" attributeName="stroke-dashoffset" dur="1.3s" values="60;0"/></path><path stroke-dasharray="15" stroke-dashoffset="15" d="M12 3C16.9706 3 21 7.02944 21 12"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="15;0"/><animateTransform attributeName="transform" dur="1.5s" repeatCount="indefinite" type="rotate" values="0 12 12;360 12 12"/></path></g></svg></div>');
      }
    },
    onLoadSuccess: (el) => {
      if (el) {
        $(el).find('.loading-wrap').remove();
      }
    },
    onLoadFailure: (el) => {
      if (el) {
        $(el).find('.loading-wrap svg').remove();
        $(el).find('.loading-wrap').append('<svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path stroke-dasharray="60" stroke-dashoffset="60" d="M12 3L21 20H3L12 3Z"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.5s" values="60;0"/></path><path stroke-dasharray="6" stroke-dashoffset="6" d="M12 10V14"><animate fill="freeze" attributeName="stroke-dashoffset" begin="0.6s" dur="0.2s" values="6;0"/></path></g><circle cx="12" cy="17" r="1" fill="currentColor" fill-opacity="0"><animate fill="freeze" attributeName="fill-opacity" begin="0.8s" dur="0.4s" values="0;1"/></circle></svg>');
        $(el).find('.loading-wrap').addClass('error');
      }
    },
    request: (el, url, callback, onFailure) => {
      let retryTimes = 3;
      utils.onLoading(el);
      function req() {
        return new Promise((resolve, reject) => {
          let status = 0; // 0 等待 1 完成 2 超时
          let timer = setTimeout(() => {
            if (status === 0) {
              status = 2;
              timer = null;
              reject('请求超时');
              if (retryTimes == 0) {
                onFailure();
              }
            }
          }, 5000);
          fetch(url).then(function (response) {
            if (status !== 2) {
              clearTimeout(timer);
              resolve(response);
              timer = null;
              status = 1;
            }
            if (response.ok) {
              return response.json();
            }
            throw new Error('Network response was not ok.');
          }).then(function (data) {
            retryTimes = 0;
            utils.onLoadSuccess(el);
            callback(data);
          }).catch(function (error) {
            if (retryTimes > 0) {
              retryTimes -= 1;
              setTimeout(() => {
                req();
              }, 5000);
            } else {
              utils.onLoadFailure(el);
              onFailure();
            }
          });
        });
      }
      req();
    },
    /********************** requestAnimationFrame ********************************/
    // 1、requestAnimationFrame 会把每一帧中的所有 DOM 操作集中起来，在一次重绘或回流中就完成，并且重绘或回流的时间间隔紧紧跟随浏览器的刷新频率，一般来说，这个频率为每秒60帧。
    // 2、在隐藏或不可见的元素中，requestAnimationFrame 将不会进行重绘或回流，这当然就意味着更少的的 cpu，gpu 和内存使用量。
    requestAnimationFrame: (fn) => {
      if (!window.requestAnimationFrame) {
        window.requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame;
      }
      window.requestAnimationFrame(fn)
    },
    dark: {},
  };

  // utils.dark.mode 当前模式 dark or light
  // utils.dark.toggle() 暗黑模式触发器
  // utils.dark.push(callBack[,"callBackName"]) 传入触发器回调函数
  utils.dark.method = {
    toggle: new RunItem(),
  };
  utils.dark = Object.assign(utils.dark, {
    push: utils.dark.method.toggle.push,
  });
</script>
<script>
  const sidebar = {
    leftbar: () => {
      if (l_body) {
        l_body.toggleAttribute('leftbar');
        l_body.removeAttribute('rightbar');
      }
    },
    rightbar: () => {
      if (l_body) {
        l_body.toggleAttribute('rightbar');
        l_body.removeAttribute('leftbar');
      }
    },
    dismiss: () => {
      if (l_body) {
        l_body.removeAttribute('leftbar');
        l_body.removeAttribute('rightbar');
      }
    },
    toggleTOC: () => {
      document.querySelector('#data-toc').classList.toggle('collapse');
    }
  }
</script>
<script type="text/javascript">
  (() => {
    const tagSwitchers = document.querySelectorAll('.tag-subtree.parent-tag > a > .tag-switcher-wrapper')
    for (const tagSwitcher of tagSwitchers) {
      tagSwitcher.addEventListener('click', (e) => {
        const parent = e.target.closest('.tag-subtree.parent-tag')
        parent.classList.toggle('expanded')
        e.preventDefault()
      })
    }

    // Get active tag from query string, then activate it.
    const urlParams = new URLSearchParams(window.location.search)
    const activeTag = urlParams.get('tag')
    if (activeTag) {
      let tag = document.querySelector(`.tag-subtree[data-tag="${activeTag}"]`)
      if (tag) {
        tag.querySelector('a').classList.add('active')
        
        while (tag) {
          tag.classList.add('expanded')
          tag = tag.parentElement.closest('.tag-subtree.parent-tag')
        }
      }
    }
  })()
</script>


<!-- required -->
<script src="/js/main.js?v=1.29.1" defer></script>

<script type="text/javascript">
  const applyTheme = (theme) => {
    if (theme === 'auto') {
      document.documentElement.removeAttribute('data-theme')
    } else {
      document.documentElement.setAttribute('data-theme', theme)
    }

    applyThemeToGiscus(theme)
  }

  const applyThemeToGiscus = (theme) => {
    theme = theme === 'auto' ? 'preferred_color_scheme' : theme

    const cmt = document.getElementById('giscus')
    if (cmt) {
      // This works before giscus load.
      cmt.setAttribute('data-theme', theme)
    }

    const iframe = document.querySelector('#comments > section.giscus > iframe')
    if (iframe) {
      // This works after giscus loaded.
      const src = iframe.src
      const newSrc = src.replace(/theme=[\w]+/, `theme=${theme}`)
      iframe.src = newSrc
    }
  }

  const switchTheme = () => {
    // light -> dark -> auto -> light -> ...
    const currentTheme = document.documentElement.getAttribute('data-theme')
    let newTheme;
    switch (currentTheme) {
      case 'light':
        newTheme = 'dark'
        break
      case 'dark':
        newTheme = 'auto'
        break
      default:
        newTheme = 'light'
    }
    applyTheme(newTheme)
    window.localStorage.setItem('Stellar.theme', newTheme)
    utils.dark.mode = newTheme === 'auto' ? (window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light") : newTheme;
    utils.dark.method.toggle.start();

    const messages = {
      light: `切换到浅色模式`,
      dark: `切换到深色模式`,
      auto: `切换到跟随系统配色`,
    }
    hud?.toast?.(messages[newTheme])
  }

  (() => {
    // Apply user's preferred theme, if any.
    const theme = window.localStorage.getItem('Stellar.theme')
    if (theme !== null) {
      applyTheme(theme)
    } else {
      utils.dark.mode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
    }
    utils.dark.method.toggle.start();
  })()
</script>


<!-- optional -->

  <script type="module">
  import { init } from 'https://gcore.jsdelivr.net/npm/@waline/client@3.1.3/dist/waline.js';

  const el = document.getElementById('waline_container');
  util.viewportLazyload(el, load_waline, false);

  function load_waline(){
    if (!el) return;

    utils.css('https://gcore.jsdelivr.net/npm/@waline/client@3.1.3/dist/waline.css');
    utils.css('https://gcore.jsdelivr.net/npm/@waline/client@3.1.3/dist/waline-meta.css');

    const path = el.getAttribute('comment_id') ?? decodeURI(window.location.pathname);
    const waline = init(Object.assign({"js":"https://gcore.jsdelivr.net/npm/@waline/client@3.1.3/dist/waline.js","css":"https://gcore.jsdelivr.net/npm/@waline/client@3.1.3/dist/waline.css","meta_css":"https://gcore.jsdelivr.net/npm/@waline/client@3.1.3/dist/waline-meta.css","serverURL":"https://net0000.netlify.app/.netlify/functions/comment","locale":{"placeholder":"😎嗨，朋友，留下脚印再走呗。"},"reaction":true}, {
      el: '#waline_container',
      path: path,
      
    }));
  }
</script>




<script defer>
  window.addEventListener('DOMContentLoaded', (event) => {
    ctx.services = Object.assign({}, JSON.parse(`{"mdrender":{"js":"/js/services/mdrender.js"},"siteinfo":{"js":"/js/services/siteinfo.js","api":null},"ghinfo":{"js":"/js/services/ghinfo.js"},"sites":{"js":"/js/services/sites.js"},"friends":{"js":"/js/services/friends.js"},"timeline":{"js":"/js/services/timeline.js"},"fcircle":{"js":"/js/services/fcircle.js"},"weibo":{"js":"/js/services/weibo.js"},"memos":{"js":"/js/services/memos.js"},"twikoo":{"js":"/js/services/twikoo_latest_comment.js"},"waline":{"js":"/js/services/waline_latest_comment.js"},"artalk":{"js":"/js/services/artalk_latest_comment.js"},"giscus":{"js":"/js/services/giscus_latest_comment.js"}}`));
    for (let id of Object.keys(ctx.services)) {
      const js = ctx.services[id].js;
      if (id == 'siteinfo') {
        ctx.cardlinks = document.querySelectorAll('a.link-card[cardlink]');
        if (ctx.cardlinks?.length > 0) {
          utils.js(js, { defer: true }).then(function () {
            setCardLink(ctx.cardlinks);
          });
        }
      } else if (id == 'voice') {
        ctx.voiceAudios = document.querySelectorAll('.voice>audio');
        if (ctx.voiceAudios?.length > 0) {
          utils.js(js, { defer: true }).then(function () {
            createVoiceDom(ctx.voiceAudios);
          });
        }
      } else if (id == 'video') {
        ctx.videos = document.querySelectorAll('.video>video');
        if (ctx.videos?.length > 0) {
          utils.js(js, { defer: true }).then(function () {
            videoEvents(ctx.videos);
          });
        }
      } else if (id == 'download-file') {
        ctx.files = document.querySelectorAll('.file');
        if (ctx.files?.length > 0) {
          utils.js(js, { defer: true }).then(function () {
            downloadFileEvent(ctx.files);
          });
        }
      } else {
        const els = document.getElementsByClassName(`ds-${id}`);
        if (els?.length > 0) {
          utils.jq(() => {
            if (id == 'timeline' || 'memos' || 'marked') {
              utils.js(deps.marked).then(function () {
                utils.js(js, { defer: true });
              });
            } else {
              utils.js(js, { defer: true });
            }
          });
        }
      }
    }

    // chat iphone time
    let phoneTimes = document.querySelectorAll('.chat .status-bar .time');

    if (phoneTimes.length > 0) {
      NowTime();
      var date = new Date();
      var sec = date.getSeconds();
      var firstAdjustInterval = setInterval(firstAdjustTime, 1000 * (60 - sec));
    }

    function firstAdjustTime() {
      NowTime();
      clearInterval(firstAdjustInterval);
      setInterval(NowTime, 1000 * 60);
    }

    function NowTime() {
      for (let i = 0; i < phoneTimes.length; ++i) {
        var timeSpan = phoneTimes[i];
        var date = new Date();
        var hour = date.getHours();
        var min = date.getMinutes();
        timeSpan.innerHTML = check(hour) + ":" + check(min);
      }
    };

    function check(val) {
      if (val < 10) {
        return ("0" + val);
      }
      return (val);
    }

    // chat quote
    const chat_quote_obverser = new IntersectionObserver((entries, observer) => {
      entries.filter((entry) => { return entry.isIntersecting }).sort((a, b) => a.intersectionRect.y !== b.intersectionRect.y ? a.intersectionRect.y - b.intersectionRect.y : a.intersectionRect.x - b.intersectionRect.x).forEach((entry, index) => {
          observer.unobserve(entry.target);
          setTimeout(() => {
            entry.target.classList.add('quote-blink');
            setTimeout(() => {
              entry.target.classList.remove('quote-blink');
            }, 1000);
          }, Math.max(100, 16) * (index + 1));
        });
    });

    var chatQuotes = document.querySelectorAll(".chat .talk .quote");
    chatQuotes.forEach((quote) => {
      quote.addEventListener('click', function () {
        var chatCellDom = document.getElementById("quote-" + quote.getAttribute("quotedCellTag"));
        if (chatCellDom) {
          var chatDiv = chatCellDom.parentElement;
          var mid = chatDiv.clientHeight / 2;
          var offsetTop = chatCellDom.offsetTop;
          if (offsetTop > mid - chatCellDom.clientHeight / 2) {
            chatDiv.scrollTo({
              top: chatCellDom.offsetTop - mid + chatCellDom.clientHeight / 2,
              behavior: "smooth"
            });
          } else {
            chatDiv.scrollTo({
              top: 0,
              behavior: "smooth"
            });
          }
          chat_quote_obverser.observe(chatCellDom);
        }
      });
    });
  });
</script>

<script>
  window.addEventListener('DOMContentLoaded', (event) => {
    ctx.search = {
      path: `/search.json`,
    }
    utils.js('/js/search/local-search.js', { defer: true });
  });
</script><script>
  window.FPConfig = {
    delay: 0,
    ignoreKeywords: [],
    maxRPS: 5,
    hoverDelay: 25
  };
</script>
<script defer src="https://cdn.jsdelivr.net/npm/flying-pages@2/flying-pages.min.js"></script><script defer src="https://gcore.jsdelivr.net/npm/vanilla-lazyload@17.3.1/dist/lazyload.min.js"></script>
<script>
  // https://www.npmjs.com/package/vanilla-lazyload
  // Set the options globally
  // to make LazyLoad self-initialize
  window.lazyLoadOptions = {
    elements_selector: ".lazy",
  };
  // Listen to the initialization event
  // and get the instance of LazyLoad
  window.addEventListener(
    "LazyLoad::Initialized",
    function (event) {
      window.lazyLoadInstance = event.detail.instance;
    },
    false
  );
  document.addEventListener('DOMContentLoaded', function () {
    window.lazyLoadInstance?.update();
  });
</script><script>
  ctx.fancybox = {
    selector: `.timenode p>img,article p img,.tag-plugin>.image-bg>img,.atk-content>p>img`,
    css: `/vendor/css/fancybox.css`,
    js: `/vendor/js/fancybox.umd.js`
  };
  var selector = '[data-fancybox]:not(.error)';
  if (ctx.fancybox.selector) {
    selector += `, ${ctx.fancybox.selector}`
  }
  var needFancybox = document.querySelectorAll(selector).length !== 0;
  if (!needFancybox) {
    const els = document.getElementsByClassName('ds-memos');
    if (els != undefined && els.length > 0) {
      needFancybox = true;
    }
  }
  if (needFancybox) {
    utils.css(ctx.fancybox.css);
    utils.js(ctx.fancybox.js, { defer: true }).then(function () {
      Fancybox.bind(selector, {
        hideScrollbar: false,
        Thumbs: {
          autoStart: false,
        },
        caption: (fancybox, slide) => {
          return slide.triggerEl.alt || slide.triggerEl.dataset.caption || null
        }
      });
    })
  }
</script>
<script>
  window.addEventListener('DOMContentLoaded', (event) => {
    const swiper_api = document.getElementById('swiper-api');
    if (swiper_api != undefined) {
      utils.css(`https://unpkg.com/swiper@10.3.1/swiper-bundle.min.css`);
      utils.js(`https://unpkg.com/swiper@10.3.1/swiper-bundle.min.js`, { defer: true }).then(function () {
        const effect = swiper_api.getAttribute('effect') || '';
        const isHomepage = swiper_api.getAttribute('homepage') === 'true';
        var swiper = new Swiper('.swiper#swiper-api', {
          slidesPerView: 'auto',
          spaceBetween: 8,
          centeredSlides: !isHomepage,
          effect: effect,
          rewind: !isHomepage,
          loop: isHomepage,
          autoplay: isHomepage ? {
            disableOnInteraction: false
          } : false,
          pagination: {
            el: '.swiper-pagination',
            clickable: true,
          },
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
        });
      })
    }
  });
</script>
<script defer src="https://cdn.jsdelivr.net/npm/scrollreveal@4.0.9/dist/scrollreveal.min.js"></script>
<script>
  window.addEventListener('DOMContentLoaded', (event) => {
    const slideUp = {
      distance: `16px`,
      duration: `800`,
      interval: `100`,
      scale: `1`,
      opacity: 0,
      easing: "ease-out"
    };
    ScrollReveal().reveal('.l_left .slide-up', slideUp);
    ScrollReveal().reveal('.l_main .slide-up', slideUp);
    ScrollReveal().reveal('.l_right .slide-up', slideUp);
  });
</script>

  <script defer src="/vendor/js/chatgpt.js"></script>
  <script defer>
    window.addEventListener('DOMContentLoaded', (event) => {
      new ChucklePostAI(Object.assign({
        el: 'article.content',
        css: `/css/_plugins/tianli_gpt`
      }, JSON.parse(`{"enable":true,"js":"/vendor/js/chatgpt.js","field":"post","interface":{"name":"文章摘要","introduce":"我是文章辅助AI，点击下方的按钮，让我生成本文简介","version":"OpenAI","button":["介绍自己","生成摘要"]}}`)))
    });
  </script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    window.codeElements = document.querySelectorAll('.code');
    if (window.codeElements.length > 0) {
      ctx.copycode = {
        default_text: `Copy`,
        success_text: `Copied`,
        toast: `复制成功`,
      };
      utils.js('/js/plugins/copycode.js');
    }
  });
</script>


<!-- inject -->
<script src="/js/extra.js"></script><script src="/vendor/js/snow.js"></script><script src="/vendor/js/lantern.js"></script><script src="/js/dog.js"></script><script data-website-id="91357f39-3d88-42f3-bf11-e1c1206ac8ab" src="https://logsphere.codepzj.cn/js/track.js"></script>
</div><script src="https://cdn.jsdelivr.net/npm/echarts@5.5.1/dist/echarts.min.js"></script>
        
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const heatmapChartDom = document.getElementById('heatmapChart');
                if(heatmapChartDom){
                    const heatmapChart = echarts.init(heatmapChartDom, 'light');
                    const cellSize = [18, 18];
                    
                    const groupByYear = (data) => {
                        const result = {};
                        data.forEach(([date, value]) => {
                            const [year] = date.split('-').map(Number);
                            if (!result[year]) {
                                result[year] = [];
                            }
                            result[year].push([date, value]);
                        });
                        return result;
                    };
                    
                    const groupedData = groupByYear([["2024-01-11",2],["2025-02-07",1],["2025-02-12",1],["2025-02-13",2],["2025-02-15",12],["2025-04-03",1]]);
                    const years = Object.keys(groupedData).reverse();
                    
                    var initYear = parseInt(heatmapChartDom.getAttribute('year')) || new Date().getFullYear();
                    const minYear = years[years.length - 1];
                    const maxYear = years[0];
                    if (initYear < minYear || initYear > maxYear) {
                        initYear = maxYear;
                    }
                    console.log('[hexo-graph]generateHeatmapChart|initYear:', initYear, 'minYear:', minYear, 'maxYear:', maxYear);
                    
                    heatmapChart.setOption({
                        grid: {},
                        tooltip: { 
                            position: 'top', 
                            formatter: params => `${params.value[0]}: ${params.value[1]} Articles` 
                        },
                        calendar: { 
                            top: '10%',
                            left: 'left', 
                            right: '8%',
                            range: initYear,
                            cellSize: cellSize, 
                            splitLine: { lineStyle: { color: '#E0E0E0', width: 1 } }, 
                            itemStyle: { borderWidth: 1, borderColor: '#E0E0E0' }, 
                            dayLabel: { show: false },
                            monthLabel: { show: true },
                            yearLabel: { show: false },
                        },
                        visualMap: { 
                            show: true,
                            right: '8%',
                            bottom: '5%',
                            type: 'piecewise',
                            orient: 'horizontal',
                            text: ['More', 'Less'],
                            min: 0,
                            max: Math.max(...groupedData[initYear].map(item => item[1])),
                            inRange: { color: ["#ACE7AE","#69C16D","#549F57"] }
                        },
                        legend: {
                            type: 'scroll',
                            icon: 'none',
                            data: years,
                            orient: 'vertical',
                            top: '5%',
                            right: 'right',
                            itemWidth: 20,
                            itemHeight: 20,
                            itemGap: 10,
                            pageIconSize: 10,
                            pageTextStyle: { fontSize: 14 },
                            selectedMode: 'single',
                        },
                        series: years.map(year => ({
                            type: 'heatmap',
                            coordinateSystem: 'calendar',
                            data: groupedData[year],
                            name: year,
                            emphasis: {
                                disabled: true,
                            },
                            silent: year !== initYear,
                        })),
                    });
                    
                    // init selected year
                    heatmapChart.dispatchAction({
                        type: 'legendSelect',
                        name: initYear,
                    });
                    
                    heatmapChart.on('legendselectchanged', function(params) {
                        console.log('[hexo-graph]generateHeatmapChart|legendselectchanged:', params);
                        const selectedYear = Object.keys(params.selected).find(key => params.selected[key]);
                        if (selectedYear && groupedData[selectedYear]) {
                            heatmapChart.setOption({
                                calendar: {
                                    range: selectedYear,
                                },
                                visualMap: {
                                    max: Math.max(...groupedData[selectedYear].map(item => item[1])),
                                },
                                series: years.map(year => ({
                                    type: 'heatmap',
                                    coordinateSystem: 'calendar',
                                    data: groupedData[year],
                                    name: year,
                                    emphasis: {
                                        disabled: true,
                                    },
                                    silent: year !== selectedYear,
                                })),
                            });
                        }
                    });
                    
                    heatmapChart.on('click', function (params) {
                        if (params.componentType === 'series') {
                            const [year, month] = params.value[0].split('-');
                            window.location.href = '/archives/' + year + '/' + month;
                        }
                    });
                }
            });
        </script>
    
        
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const monthlyChartDom = document.getElementById('monthlyChart');
                if(monthlyChartDom){
                    const monthlyChart = echarts.init(monthlyChartDom, 'light');
                    monthlyChart.setOption({
                        xAxis: { 
                            type: 'category', 
                            data: ["2024-01","2025-02","2025-04"], 
                            axisLabel: { fontSize: 14, fontWeight: 'bold', fontFamily: 'Microsoft YaHei, SimSun, serif' }
                        },
                        yAxis: { type: 'value', splitLine: { lineStyle: { type: 'dashed', color: '#ccc' } } },
                        series: [{
                            name: 'Articles',
                            type: 'line',
                            data: [2,16,1],
                            smooth: true,
                            lineStyle: { color: '#5470C6', width: 2 },
                            itemStyle: { color: '#5470C6' },
                            areaStyle: { color: 'rgba(84, 112, 198, 0.4)' },
                            symbolSize: 10,
                            label: {
                                show: true,
                                position: 'top',
                                formatter: params => params.value,
                                fontSize: 14,
                                color: '#000',
                                fontWeight: 'bold',
                                fontFamily: 'Microsoft YaHei, SimSun, serif'
                            }
                        }]
                    });

                    monthlyChart.on('click', function (params) {
                        const [year, month] = params.name.split('-');
                        window.location.href = '/archives/' + year + '/' + month;
                    });
                }
            })
        </script>
    
        
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const tagsChartDom = document.getElementById('tagsChart');
                if(tagsChartDom){
                    const tagsChart = echarts.init(tagsChartDom, 'light');
                    tagsChart.setOption({
                        tooltip: { trigger: 'item', formatter: '{b}: {c} ({d}%)' },
                        series: [{
                            type: 'pie',
                            radius: '60%',
                            data: [{"name":"hexo","value":1},{"name":"云","value":1},{"name":"vercel","value":1},{"name":"部署","value":1},{"name":"动手能力","value":1},{"name":"超级大脑","value":1},{"name":"PC","value":1},{"name":"GIT","value":1}],
                            label: {
                                position: 'outside',
                                formatter: '{b} {c} ({d}%)',
                                fontSize: 14,
                                fontWeight: 'bold',
                                fontFamily: 'Microsoft YaHei, SimSun, serif'
                            },
                            color: ["#5470C6","#91CC75","#FAC858","#EE6666","#73C0DE","#3BA272","#FC8452","#9A60B4"],
                            labelLine: { show: true }
                        }],
                        legend: {
                            bottom: '0',
                            left: 'center',
                            data: [{"name":"hexo","value":1},{"name":"云","value":1},{"name":"vercel","value":1},{"name":"部署","value":1},{"name":"动手能力","value":1},{"name":"超级大脑","value":1},{"name":"PC","value":1},{"name":"GIT","value":1}].map(tag => tag.name),
                            textStyle: { fontSize: 14, fontWeight: 'bold', fontFamily: 'Microsoft YaHei, SimSun, serif' }
                        }
                    });

                    tagsChart.on('click', function (params) {
                        window.location.href = '/tags/' + params.name;
                    });
                }
            })
        </script>
    
        
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const categoriesChartDom = document.getElementById('categoriesChart');
                if(categoriesChartDom){
                    const categoriesChart = echarts.init(categoriesChartDom, 'light');
                    categoriesChart.setOption({
                        xAxis: { type: 'value', splitLine: { lineStyle: { type: 'dashed', color: '#ccc' } } },
                        yAxis: { 
                            type: 'category', 
                            data: [{"name":"hexo","value":1},{"name":"美化、动手","value":1}].map(category => category.name).reverse(), 
                            axisLabel: { fontSize: 14, fontWeight: 'bold', fontFamily: 'Microsoft YaHei, SimSun, serif' }
                        },
                        series: [{
                            name: 'Category Count',
                            type: 'bar',
                            data: [{"name":"hexo","value":1},{"name":"美化、动手","value":1}].map(category => category.value).reverse(),
                            label: {
                                show: true,
                                position: 'right',
                                formatter: params => params.value,
                                fontSize: 14,
                                color: '#000',
                                fontWeight: 'bold',
                                fontFamily: 'Microsoft YaHei, SimSun, serif'
                            },
                            itemStyle: {
                                color: new echarts.graphic.LinearGradient(0, 0, 1, 0, [
                                    { offset: 0, color: '#91CC75' },
                                    { offset: 1, color: '#73C0DE' }
                                ])
                            }
                        }]
                    });

                    categoriesChart.on('click', function (params) {
                        window.location.href = '/categories/' + params.name;
                    });
                }
            });
        </script>
    
        
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const categoriesTreeChartDom = document.getElementById('categoriesTreeChart');
                if(categoriesTreeChartDom){
                    const treeChart = echarts.init(categoriesTreeChartDom, 'light');
                    treeChart.setOption({
                        title: {
                            text: '操作提示：单击展开分类，双击进入具体分类页面',
                            textStyle: {
                                fontSize: 12,
                                color: '#999',
                                fontWeight: 'normal'
                            },
                            bottom: 0,
                            left: 'center'
                        },
                        tooltip: {
                            trigger: 'item',
                            triggerOn: 'mousemove'
                        },
                        series: [{
                            type: 'tree',
                            data: [{"name":"Categories","children":[{"name":"hexo","children":[],"count":1,"path":"hexo"},{"name":"美化、动手","children":[],"count":1,"path":"美化、动手"}],"count":0,"path":""}],
                            initialTreeDepth: -1,
                            top: '5%',
                            bottom: '10%',
                            left: '0%',
                            right: '0%',
                            symbolSize: 15,
                            layout: 'orthogonal',
                            orient: 'TB',
                            itemStyle: {
                                color: '#91CC75',
                                borderColor: '#73C0DE'
                            },
                            label: {
                                position: 'bottom',
                                verticalAlign: 'middle',
                                align: 'center',
                                fontSize: 14,
                                distance: 28,
                                formatter: function(params) {
                                    return params.data.name + (params.data.count ? ' (' + params.data.count + ')' : '');
                                }
                            },
                            leaves: {
                                label: {
                                    position: 'top',
                                    verticalAlign: 'middle',
                                    align: 'center'
                                }
                            },
                            emphasis: {
                                focus: 'descendant'
                            },
                            expandAndCollapse: true
                        }]
                    });

                    treeChart.on('dblclick', function (params) {
                        if (params.data && params.data.path) {
                            window.location.href = '/categories/' + params.data.path;
                        }
                    });
                }
            });
        </script>
    
    </body></html>
