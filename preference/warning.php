<div class="preference-modal">
<style>
    .contents {
      backdrop-filter: blur(20px);
      background: var(--site-background);
    }
    #saved {
      opacity: 0;
    }
    </style>
    
<div class="preference">
    <style>   .preference-close {   left: 20px;   }</style><title>セットアップをやり直す</title>
<h2 class="preference-title">  
 すべての設定を消去してもよろしいですか？</h2>
</div>
<div class="preference-contents">
<div class="preference-main" id="preference-list">
  <p>テーマ設定など、すべての設定が含まれます</p>
        <div id="preference-setup-modal-end" style="display: flex;justify-content: flex-end;align-items: center;padding-bottom: 15px;">
    
        <p class="preference-submit" onclick="exit_modal_setup()" style="margin-right: 10px;">はい</p> <p class="preference-etc" onclick="exit_setup()" style="margin-right: 0px;">いいえ</p> 
  </div>
    
</div>