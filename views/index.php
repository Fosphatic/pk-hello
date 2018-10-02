<?php $view->style('hello', 'extensions/hello/assets/css/hello.css') ?>

<div class="hello">
    <h1>Hello <?= count($names) == 1 ? $names[0] : "to the ".count($names). " of you"; ?></h1>
</div>

<p><?= _c("{0}: No names|one: One name|more: %names% names", count($names), ["%names%" => count($names)]) ?><p>


<?php foreach ($names as $name): ?>
    <p class="uk-alert"><?= __("Hello %name%!", ["%name%" => $name]) ?></p>
<?php endforeach ?>

<form id="contact-message" class="uk-form uk-form-stacked uk-width-1-2@m uk-width-1-3@l uk-container uk-container-small uk-container-center uk-text-center v-validator="form" v-cloak @submit.prevent="submit | valid">

    <div class="uk-margin">
        <div class="uk-inline">
        <span class="uk-form-icon" uk-icon="icon: user"></span>
        <input class="uk-input uk-form-width-large" type="text" name="name" placeholder="<?= __('Name') ?>" v-model="name" v-validate:required>
        </div>
        <p class="uk-alert-danger uk-text-danger uk-flex-inline uk-form-width-large uk-width-4-4@m" v-show="form.name.invalid" uk-alert><a class="uk-alert-close" uk-close></a><?= __('Name cannot be blank.') ?></p>
    </div>

    <div class="uk-margin">
        <div class="uk-inline">
        <span class="uk-form-icon" uk-icon="icon: mail"></span>
          <input class="uk-input uk-form-width-large" type="email" name="email" placeholder="<?= __('Email') ?>" v-model="user.email" v-validate:email v-validate:required>
        </div>
          <p class="uk-alert-danger uk-text-danger uk-flex-inline uk-form-width-large uk-width-4-4@m" v-show="form.email.invalid" uk-alert><a class="uk-alert-close" uk-close></a><?= __('Email address is invalid.') ?></p>
    </div>

    <div class="uk-margin">
      <div class="uk-inline">
        <span class="uk-form-icon uk-form-icon-pencil" uk-icon="icon: pencil"></span>
        <textarea class="uk-textarea uk-form-width-large" rows="5" placeholder="<?= __('Message') ?>" v-model="form.message" v-validate:required></textarea>
        <p class="uk-alert-danger uk-text-danger uk-flex-inline uk-form-width-large uk-width-4-4@m" v-show="form.password.invalid" uk-alert><a class="uk-alert-close" uk-close></a><?= __('Message cannot be blank.') ?></p>
      </div>
    </div>

    <p class="uk-form-row">
        <button class="uk-button uk-button-primary" type="submit"><?= __('Submit') ?></button>
    </p>

</form>
