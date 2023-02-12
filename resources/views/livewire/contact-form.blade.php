<form wire:submit.prevent="saveMessage()" class="modal-viewport__form">
        <div class="modal-viewport__form-card">
            <div class="modal-viewport__form-header">
                <h5 class="modal-viewport__form-title">
                    Закажите праздник!
                    <br> Оставьте заявку и мы вам перезвоним
                </h5>
            </div>
            <div class="modal-viewport__form-body">
                <div class="modal-viewport__form-group">
                    <label class="required-input">Ваше имя</label>
                    <input wire:model="name" type="text" name="name" class="modal-viewport__form-input" id="contact-name" required placeholder="Иванов Андрей">
                </div>
                <div class="modal-viewport__form-group">
                    <label class="required-input">Телефон</label>
                    <input wire:model="phone" type="tel" name="phone" class="modal-viewport__form-input contact-phone" id="contact-phone" required placeholder="+7(___)___-__-__">
                </div>
                <div class="modal-viewport__form-group">
                    <label style="margin-bottom: 0.625rem; display: block;">Комментарии</label>
                    <textarea wire:model="message" name="contact-message" id="contact-message" cols="30" rows="4" class="modal-viewport__form-message"></textarea>
                </div>
                <div class="modal-viewport__form-group">
                    <button type="submit" class="modal-viewport__form-button button button--primary">Отправить</button>
                </div>
            </div>
        </div>
    </form>

