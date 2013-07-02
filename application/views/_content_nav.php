<?php if(empty($selector)) { $selector = "";}?>
<div class="navbar navbar-inverse">
  <div class="navbar-inner">
    <div class="container">
      <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="brand" href="<?=site_url("/")?>">
      	<img class="logo" src="<?=base_url("img/Ingress-flat-circle-256.png")?>" alt="Ingree Logo" style="margin-right:20px;" />Ingress.tw
      </a>
      <div class="fb-like-container"><div class="fb-like" data-href="<?=site_url("/")?>" data-send="false" data-layout="button_count" data-width="150" data-show-faces="false"></div></div>
      <div class="nav-collapse collapse">
        <ul class="nav">
          <li class="<?=$selector=="home" ? "active":""?>">
            <a href="<?=site_url("/")?>">首頁</a>
          </li>
          <li class="<?=$selector=="invite" ? "active":""?>">
            <a href="<?=site_url("/invite")?>">如何取得邀請碼</a>
          </li>

	      <li class="<?=$selector=="guide" ? "active":""?>">
            <a href="<?=site_url("/guide")?>">新手教學</a>
          </li>
	<?php if(0){?>
          <li class="<?=$selector=="story" ? "active":""?>">
            <a href="<?=site_url("/story")?>">故事劇情</a>
          </li>
     <?php } ?>
          <li class="<?=$selector=="status" ? "active":""?>">
            <a href="<?=site_url("/status")?>">戰情概要</a>
          </li>
          <li class="<?=$selector=="history" ? "active":""?>">
            <a href="<?=site_url("/history")?>">台灣大事紀</a>
          </li>
          <li  class="<?=$selector=="links" ? "active":""?>">
            <a href="<?=site_url("/links")?>">相關連結</a>
          </li>
          <li  class="<?=$selector=="about" ? "active":""?>">
            <a href="<?=site_url("/about")?>"> 關於我們</a>
          </li>
        </ul>
      </div>
      <style>
.fb-like-container{
      height: 25px;
width: 150px;
float: right;
margin-right: 10px;
margin-top: 16px;
}
</style>
    </div>
  </div>
</div>