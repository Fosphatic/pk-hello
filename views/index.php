<?php $view->style('hello', '/packages/fosphatic/hello/assets/css/hello.css') ?>
<?php $view->script('hello-js', '/packages/fosphatic/hello/app/bundle/hello.js', ['vue', 'jquery']) ?>

<form id="hello" class="uk-form uk-form-stacked uk-width-1-2@m uk-width-1-3@l uk-container uk-container-small uk-container-center uk-text-center" v-validator="form" v-cloak @submit.prevent="submit | valid">

    <div class="uk-margin">
        <div class="uk-inline">
        <span class="uk-form-icon" uk-icon="icon: user"></span>
        <input id="name" class="uk-input uk-form-width-large" type="text" name="name" placeholder="<?= __('Name') ?>" required="" v-model="name" v-validate:required>
        </div>
        <p class="uk-alert-danger uk-text-danger uk-flex-inline uk-form-width-large uk-width-4-4@m" v-show="name.invalid" uk-alert><a class="uk-alert-close" uk-close></a><?= __('Name cannot be blank.') ?></p>
    </div>

    <div class="uk-margin">
        <div class="uk-inline">
        <span class="uk-form-icon" uk-icon="icon: mail"></span>
          <input id="email" class="uk-input uk-form-width-large" type="email" name="email" placeholder="<?= __('Email') ?>"  required="" v-model="email.value" v-validate:required>
        </div>
          <p class="uk-alert-danger uk-text-danger uk-flex-inline uk-form-width-large uk-width-4-4@m" v-show="email.invalid" uk-alert><a class="uk-alert-close" uk-close></a><?= __('Email address is invalid.') ?></p>
    </div>

    <div class="uk-margin">
      <div class="uk-inline">
        <span class="uk-form-icon uk-form-icon-pencil" uk-icon="icon: pencil"></span>
        <textarea id="message" class="uk-textarea uk-form-width-large" rows="5" placeholder="<?= __('Message') ?>" v-model="message.text" required="" v-validate:required></textarea>
        <p class="uk-alert-danger uk-text-danger uk-flex-inline uk-form-width-large uk-width-4-4@m" v-show="message.invalid" uk-alert><a class="uk-alert-close" uk-close></a><?= __('Message cannot be blank.') ?></p>
      </div>
    </div>

    <p class="uk-form-row">
        <button class="uk-button uk-button-primary" type="submit"><?= __('Submit') ?></button>
    </p>

</form>
