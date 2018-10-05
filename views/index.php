<?php $view->style('hello', '/packages/fosphatic/hello/assets/css/hello.css') ?>

<div id="helloform">

  <form id="form" class="vue-form uk-form uk-form-stacked uk-width-1-2@m uk-width-1-3@l uk-container uk-container-small uk-container-center uk-text-center" v-on:submit.prevent="sendMail" v-validator="form" v-cloak @submit.prevent="sendMail | valid" v-if="isSend == false">

      <h1><?= __('Contact Form') ?></h1>

      <div class="uk-alert-danger" v-show="error" uk-alert><a class="uk-alert-close" uk-close></a>{{ error }}</div>

        <div class="uk-margin">
            <div class="uk-inline">
            <span class="uk-form-icon" uk-icon="icon: user"></span>
            <input id="name" class="uk-input uk-form-width-large" type="text" name="name" placeholder="<?= __('Name') ?>" v-model="name"  v-validate:name v-validate:required>
            </div>
            <p class="uk-alert-danger uk-text-danger uk-flex-inline uk-form-width-large uk-width-4-4@m" v-show="form.name.invalid" uk-alert><a class="uk-alert-close" uk-close></a><?= __('Name cannot be blank.') ?></p>
        </div>

      <div class="uk-margin">
          <div class="uk-inline">
          <span class="uk-form-icon" uk-icon="icon: mail"></span>
            <input type="email" name="email" id="email" class="email uk-input uk-form-width-large" placeholder="<?= __('Email') ?>" v-model="email" v-validate:email v-validate:required>
          </div>
            <p class="uk-alert-danger uk-text-danger uk-flex-inline uk-form-width-large uk-width-4-4@m" v-show="form.email.invalid" uk-alert><a class="uk-alert-close" uk-close></a><?= __('Email address is invalid.') ?></p>
      </div>

      <div class="uk-margin">
        <div class="uk-inline">
          <span class="uk-form-icon uk-form-icon-pencil" uk-icon="icon: pencil"></span>
          <textarea type="textarea" id="message" name="message" class="message uk-textarea uk-form-width-large" rows="5" placeholder="<?= __('Message') ?>"  v-validate:message v-model="message" v-validate:required></textarea>
          <p class="uk-alert-danger uk-text-danger uk-flex-inline uk-form-width-large uk-width-4-4@m" v-show="form.message.invalid" uk-alert><a class="uk-alert-close" uk-close></a><?= __('Message cannot be blank.') ?></p>
        </div>
      </div>

      <div class="uk-margin">
        <button class="uk-button uk-button-primary" type="submit"><?= __('Submit') ?></button>
      </div>
  </form>
</div>

<div v-if=isSend == true>
    <h2>
      {{getMessage}}
    </h2>
</div>
