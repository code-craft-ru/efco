<div id="popup-mailing" class="popup__mailing mfp-hide">
  <div class="popup__close">
    <span class="icon icon--close"></span>
  </div>
  <div class="popup__content">
      <form action="/" class='js-form'>
        <img  class='mailingimg' src="../images/mailing.png" alt="">
        <p class='p h-mrg-b-30'>Чтобы получать свежие молочные новости, оставьте свой e-mail.</p>
        <p class="p">Введите свой адрес электронной почты:</p>
        <input type="email" class='h-mrg-t-10' placeholder='e-mail...' name='subscribe[email]' required>
        <input type="hidden" name='subscribe[action]' class='js-switch-subscript__input'>
        <div class="h-mrg-t-25">
            <button type='submit' class='btn btn--feedback-submit h-mrg-r-5 js-switch-subscript__on'>Подписаться</button>
            <button type='submit' class='btn btn--feedback-submit js-switch-subscript__off'>Отписаться</button>
        </div>
        <div class="h-mrg-t-10">
          <div class="js-form__all-msg"></div>
        </div>
      </form>
  </div>
</div>
