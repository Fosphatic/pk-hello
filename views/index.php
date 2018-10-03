<?php $view->style('hello', '/packages/fosphatic/hello/assets/css/hello.css') ?>
<?php $view->style('form-generator', '/packages/fosphatic/hello/assets/css/vue-form-generator.css') ?>
<?php $view->script('hello-js', '/packages/fosphatic/hello/app/bundle/hello.js', ['vue', 'jquery']) ?>

<div id="hello-form">

  <form id="contact-form" class="vue-form uk-form uk-form-stacked uk-width-1-2@m uk-width-1-3@l uk-container uk-container-small uk-container-center uk-text-center" @submit.prevent="submit" v-validator="form" v-cloak @submit.prevent="submit | valid" action="https://httpbin.org/post" method="POST" enctype="application/x-www-form-urlencoded">

    <fieldset class="uk-fieldset">
      <h1><?= __('Contact Form') ?></h1>

      <div class="uk-alert-danger" v-show="error" uk-alert><a class="uk-alert-close" uk-close></a>{{ error }}</div>

        <div class="uk-margin">
            <div class="uk-inline">
            <span class="uk-form-icon" uk-icon="icon: user"></span>
            <input id="name" class="uk-input uk-form-width-large" type="text" name="name" placeholder="<?= __('Name') ?>" required="" v-model="data.name" v-validate:required>
            </div>
            <p class="uk-alert-danger uk-text-danger uk-flex-inline uk-form-width-large uk-width-4-4@m" v-show="form.name.invalid" uk-alert><a class="uk-alert-close" uk-close></a><?= __('Name cannot be blank.') ?></p>
        </div>

      <div class="uk-margin">
          <div class="uk-inline">
          <span class="uk-form-icon" uk-icon="icon: mail"></span>
            <input type="email" name="email" id="email" required="" class="email uk-input uk-form-width-large !email.valid" placeholder="<?= __('Email') ?>" v-model="data.email" v-validate:email v-validate:required>
          </div>
            <p class="uk-alert-danger uk-text-danger uk-flex-inline uk-form-width-large uk-width-4-4@m" v-show="form.email.invalid" uk-alert><a class="uk-alert-close" uk-close></a><?= __('Email address is invalid.') ?></p>
      </div>

      <div class="uk-margin">
        <div class="uk-inline">
          <span class="uk-form-icon uk-form-icon-pencil" uk-icon="icon: pencil"></span>
          <textarea type="textArea" id="textarea" name="textarea" class="message uk-textarea uk-form-width-large" rows="5" placeholder="<?= __('Message') ?>" v-model="message.value" :maxlength="message.maxlength" required="" v-validate:required></textarea>
          <p class="uk-alert-danger uk-text-danger uk-flex-inline uk-form-width-large uk-width-4-4@m" v-show="form.message.value.invalid" uk-alert><a class="uk-alert-close" uk-close></a><?= __('Message cannot be blank.') ?></p>
        </div>
      </div>

      <div class="uk-margin">
        <button class="uk-button uk-button-primary" type="submit"><?= __('Submit') ?></button>
      </div>
    </fieldset>
  </form>
</div>

<script type="text/javascript" src="/packages/fosphatic/hello/assets/js/vue-form-generator.js"></script>
<script type="text/javascript" src="/packages/fosphatic/hello/app/bundle/helloform.js"></script>
