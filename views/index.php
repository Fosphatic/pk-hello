<?php $view->style('hello', '/packages/fosphatic/hello/assets/css/hello.css') ?>
<?php $view->style('form-generator', '/packages/fosphatic/hello/assets/css/vue-form-generator.css') ?>
<?php $view->script('hello-js', '/packages/fosphatic/hello/app/bundle/hello.js', ['vue', 'jquery']) ?>



<form id="hello-form" class="uk-form uk-form-stacked uk-width-1-2@m uk-width-1-3@l uk-container uk-container-small uk-container-center uk-text-center" v-validator="form" v-cloak @submit.prevent="submit | valid">

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
        <textarea id="textarea" name="textarea" class="message uk-textarea uk-form-width-large" rows="5" placeholder="<?= __('Message') ?>" v-model="message.text" required="" v-validate:required></textarea>
        <p class="uk-alert-danger uk-text-danger uk-flex-inline uk-form-width-large uk-width-4-4@m" v-show="message.invalid" uk-alert><a class="uk-alert-close" uk-close></a><?= __('Message cannot be blank.') ?></p>
      </div>
    </div>

    <p class="uk-form-row">
        <input type="submit" class="uk-button uk-button-primary" type="submit">
    </p>
</form>

<div id="hello-form">

  <form class="vue-form uk-form uk-form-stacked uk-width-1-2@m uk-width-1-3@l uk-container uk-container-small uk-container-center uk-text-center" @submit.prevent="submit">

    <div class="error-message">
      <p class="uk-alert-danger uk-text-danger uk-flex-inline uk-form-width-large uk-width-4-4@m" v-show="!email.valid" uk-alert><a class="uk-alert-close" uk-close></a>Oh, please enter a valid email address.</p>
    </div>

    <fieldset class="uk-fieldset">
      <legend><h1>Contact Form</h1></legend>

        <div class="uk-margin">
            <div class="uk-inline">
            <span class="uk-form-icon" uk-icon="icon: user"></span>
            <input id="name" class="uk-input uk-form-width-large" type="text" name="name" placeholder="<?= __('Name') ?>" required="" v-model="name">
            </div>
            <p class="uk-alert-danger uk-text-danger uk-flex-inline uk-form-width-large uk-width-4-4@m" v-show="!name.valid" uk-alert><a class="uk-alert-close" uk-close></a><?= __('Name cannot be blank.') ?></p>
        </div>

      <div class="uk-margin">
          <div class="uk-inline">
          <span class="uk-form-icon" uk-icon="icon: mail"></span>
            <input type="email" name="email" id="email" required="" class="email uk-input uk-form-width-large !email.valid" placeholder="<?= __('Email') ?>"   v-model="email.value">
          </div>
            <p class="uk-alert-danger uk-text-danger uk-flex-inline uk-form-width-large uk-width-4-4@m" v-show="!email.valid" uk-alert><a class="uk-alert-close" uk-close></a><?= __('Email address is invalid.') ?></p>
      </div>

      <div class="uk-margin">
        <div class="uk-inline">
          <span class="uk-form-icon uk-form-icon-pencil" uk-icon="icon: pencil"></span>
          <textarea id="textarea" name="textarea" class="message uk-textarea uk-form-width-large" rows="5" placeholder="<?= __('Message') ?>" v-model="message.text" :maxlength="message.maxlength" required=""></textarea>
          <p class="uk-alert-danger uk-text-danger uk-flex-inline uk-form-width-large uk-width-4-4@m" v-show="message.invalid" uk-alert><a class="uk-alert-close" uk-close></a><?= __('Message cannot be blank.') ?></p>
        </div>
      </div>

      <div>
        <input type="submit" class="uk-button uk-button-primary" type="submit" value="Submit">
      </div>
    </fieldset>
  </form>
</div>


<h1 class="text-center">Demo of vue-form-generator</h1>
  <div class="container" id="helloform">
    <div class="panel panel-default">
      <div class="panel-heading">Form</div>
      <div class="panel-body">
        <vue-form-generator :schema="schema", :model="model", :options="formOptions"></vue-form-generator>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">Model</div>
      <div class="panel-body">
        <pre v-if="model">{{{ model | prettyJSON }}}</pre>
      </div>
    </div>

  </div>
  <script type="text/javascript" src="/packages/fosphatic/hello/assets/js/vue-form-generator.js"></script>
  <script type="text/javascript" src="/packages/fosphatic/hello/app/bundle/generator.js"></script>
