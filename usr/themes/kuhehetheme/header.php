<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-dns-prefetch-control" content="on">

  <meta name="renderer" content="webkit">
  <meta name="force-rendering" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <meta name="HandheldFriendly" content="True">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="theme-color" media="(prefers-color-scheme: dark)" content="#000">
  <meta name="theme-color" content="#f9fafb">



<meta property="og:image" <?php if($this->is('post')||$this->is('page')): ?>
content="<?php $this->options->logoUrl(); ?>"<?php else: ?>
<?php if ($this->options->logoUrl){ ?>content="<?php $this->options->logoUrl();?>"<?php }else{ ?>content="<?php $this->options->siteUrl(); ?>logo.jpg"<?php };?><?php endif; ?>>
<meta property="og:title" content="<?php $this->archiveTitle(array(
'category'=>_t('%s '),
'search'=>_t('包含关键字 %s 的文章'),
'tag' =>_t('标签 %s 下的文章'),
'author'=>_t('%s 的主页')
), '', ' - '); ?><?php $this->options->title(); ?>"/>
<meta property="og:description" content="<?php $this->options->description(); ?>">  
<meta property="og:url" content="<?php $this->permalink() ?>"/>  
<meta itemprop="name" content="<?php $this->archiveTitle(array(
'category'=>_t('%s '),
'search'=>_t('包含关键字 %s 的文章'),
'tag' =>_t('标签 %s 下的文章'),
'author'=>_t('%s 的主页')
), '', ' - '); ?><?php $this->options->title(); ?>">
<meta itemprop="description" content="<?php $this->options->description(); ?>">
<meta itemprop="image" <?php if($this->is('post')||$this->is('page')): ?>
content="<?php $this->options->logoUrl(); ?>"<?php else: ?>
<?php if ($this->options->logoUrl){ ?>content="<?php $this->options->logoUrl();?>"<?php }else{ ?>content="<?php $this->options->siteUrl(); ?>logo.jpg"<?php };?><?php endif; ?>>





<title>
<?php if($this->is('index')): ?>
<?php $this->options->title(); if($this->_currentPage>1) echo '-第'.$this->_currentPage.'页'; ?>
<?php else :?>
<?php $this->options->title(); echo '-'; $this->archiveTitle('','',''); if($this->_currentPage>1) echo '-第'.$this->_currentPage.'页'; ?>
<?php endif; ?>
</title>



<meta name="description" content="<?php $this->options->description(); ?>">

<meta name="keywords" content="小呵爱分享">

  <!-- feed -->

<!-- <link rel="alternate" href="/atom.xml" title="酷小呵" type="application/atom+xml"> -->

<link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">

<link rel="stylesheet" href="<?php $this->options->themeUrl('style2.css'); ?>">

<link rel="stylesheet" href="<?php $this->options->themeUrl('css/main.css'); ?>">

<link rel="stylesheet" href="<?php $this->options->themeUrl('css/custom.css'); ?>">

<link rel="stylesheet" href="<?php $this->options->themeUrl('css/ys.css'); ?>">






<script defer src="https://use.fontawesome.com/releases/v5.11.2/js/all.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.11.2/js/v4-shims.js"></script>




<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/izitoast@1.4.0/dist/css/iziToast.min.css">

 <link rel="stylesheet" href="https://cdn.bootcdn.net/ajax/libs/lxgw-wenkai-screen-webfont/1.7.0/style.min.css" media="all"> 

<!-- <link rel="stylesheet" href="https://npm.elemecdn.com/lxgw-wenkai-webfont@1.1.0/lxgwwenkai-regular.css" media="all"> -->



<?php if ($this->is('post')): ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@5.4.5/css/swiper.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@5.4.5/js/swiper.min.js"></script>


<script>
document.addEventListener('DOMContentLoaded', function() {
  // 您的 Swiper 相关代码放在这里
if(0!==$(".joe_post__ad .swiper-container").length){let e="vertical";new Swiper(".swiper-container",{keyboard:!0,direction:e,loop:!0,autoplay:!0,mousewheel:!0,pagination:{el:".swiper-pagination"},})}
});
</script>

<?php endif; ?>




<?php if ($this->is('post')): ?>
<script src="<?php $this->options->themeUrl('js/ssbg.js'); ?>"></script>
<?php endif; ?>


<style>
<?php if ($this->options->headcs()): ?>
<?php $this->options->headcs(); ?>
<?php endif; ?>


.l_left {
  background-image: url("<?php if ($this->options->leftimg()): ?><?php $this->options->leftimg(); ?><?php endif; ?>");
}


</style>


<?php if ($this->is('single') && isset($this->fields->headcode)): ?>
    <?php echo $this->fields->headcode; ?>
<?php endif; ?>


<?php if ($this->is('single') && $this->fields->isLatex == 1): ?>
<script defer type="text/javascript" src="https://cdn.jsdelivr.net/npm/katex@0.16.9/dist/katex.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/katex@0.16.9/dist/katex.min.css" />
<script defer type="text/javascript" src="https://cdn.jsdelivr.net/npm/katex@0.16.9/dist/contrib/auto-render.min.js"></script>
<?php endif; ?>




<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.21.16/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.21.16/dist/js/uikit-icons.min.js"></script>





<script src="<?php $this->options->themeUrl('js/jindutiao.js'); ?>"></script>



<?php if ($this->is('single') && $this->fields->ishighlight == 1): ?>
<script src="<?php $this->options->themeUrl('js/high.js'); ?>"></script>
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/high.css'); ?>">
<?php endif; ?>



<?php if ($this->is('post') && $this->fields->fancybox == 1): ?>
<link href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js" type="ee71b4ea12285dc3ed787f94-text/javascript"></script>
<?php endif; ?>



<?php if ($this->is('single') && $this->fields->ishighli == 1): ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.9.0/build/styles/atom-one-dark.min.css">
<script src="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.9.0/build/highlight.min.js"></script>
<!-- and it's easy to individually load additional languages -->
<script src="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.9.0/build/languages/go.min.js"></script>
<script>
hljs.highlightAll();
</script>
<?php endif; ?>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script>
    function search() {
      var keyword = $('#search-Input').val();
      $.ajax({
        url: 'search.php?s=' + keyword,
        type: 'GET',
        success: function(response) {
          $('#search-result').html(response);
        },
        error: function() {
          $('#search-result').html('<div class="search-no-result">没有找到内容😶！</div>');
        }
      });
    }

</script>


<?php if ($this->is('single') && $this->fields->iscopycode == 1): ?>
<script>
    // 在代码块右上角添加复制按钮
    document.addEventListener('DOMContentLoaded', initCodeCopyButton);
    function initCodeCopyButton() {
        function initCSS(callback) {
            const css = `
               .btn-code-copy {
                    position: absolute;
                    line-height:.5em;
                    top:.2em;
                    right:.2em;
                    color: #fff;  /* 文字颜色为白色 */
                    background-color: #4CAF50;  /* 绿色背景 */
                    border: 1px solid #4CAF50;  /* 绿色边框 */
                    border-radius: 4px;  /* 圆角 */
                    padding: 5px 10px;  /* 内边距 */
                    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);  /* 阴影效果 */
                }
               .btn-code-copy:hover {
                    color: #fff;  /* 鼠标悬停时文字颜色保持白色 */
                    background-color: #388E3C;  /* 鼠标悬停时背景颜色更深 */
                    border: 1px solid #388E3C;  /* 鼠标悬停时边框颜色更深 */
                    cursor: pointer;
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);  /* 鼠标悬停时阴影加深 */
                }
                `;
            const styleId = btoa('btn-code-copy').replace(/[=+\/]/g, '');
            const head = document.getElementsByTagName('head')[0];
            if (!head.querySelector('#' + styleId)) {
                const style = document.createElement('style');
                style.id = styleId;
                if (style.styleSheet) {
                    style.styleSheet.cssText = css;
                } else {
                    style.appendChild(document.createTextNode(css));
                }
                head.appendChild(style);
            }
            callback();
        };
        function copyTextContent(source) {
            let result = false;
            const target = document.createElement('pre');
            target.style.opacity = '0';
            target.textContent = source.textContent;
            document.body.appendChild(target);
            try {
                const range = document.createRange();
                range.selectNode(target);
                window.getSelection().removeAllRanges();
                window.getSelection().addRange(range);
                document.execCommand('copy');
                window.getSelection().removeAllRanges();
                result = true;
            } catch (e) { console.log('copy failed.'); }
            document.body.removeChild(target);
            return result;
        };
        function initButton(pre) {
            const code = pre.querySelector('code');
            if (code) {
                const preParent = pre.parentElement;
                const newPreParent = document.createElement('div');
                newPreParent.style = 'position: relative';
                preParent.insertBefore(newPreParent, pre);
                const copyBtn = document.createElement('div');
                copyBtn.innerHTML = '复制';
                copyBtn.className = 'btn-code-copy';
                copyBtn.addEventListener('click', () => {
        