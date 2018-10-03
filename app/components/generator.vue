<template lang='html'>
  <div id='helloform'>
    <form class="uk-form uk-form-stacked uk-width-1-2@m uk-width-1-3@l uk-container uk-container-small uk-container-center uk-text-center">
      <vue-form-generator :schema='schema' :model='model' :options='formOptions'></vue-form-generator>
    </form>
  </div>
</template>
<script>

var VueFormGenerator = window.VueFormGenerator;

var vm = new Vue({
	el: "#helloform",
	components: {
		"vue-form-generator": VueFormGenerator.component
	},

	filters: {
		prettyJSON: function(json) {
			if (json) {
				json = JSON.stringify(json, undefined, 4);
				json = json.replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;");
				return json.replace(/("(\\u[a-zA-Z0-9]{4}|\\[^u]|[^\\"])*"(\s*:)?|\b(true|false|null)\b|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?)/g, function (match) {
					var cls = "number";
					if (/^"/.test(match)) {
						if (/:$/.test(match)) {
							cls = "key";
						} else {
							cls = "string";
						}
					} else if (/true|false/.test(match)) {
						cls = "boolean";
					} else if (/null/.test(match)) {
						cls = "null";
					}
					return "<span class=\"" + cls + "\">" + match + "</span>";
				});
			}
		}
	},

	data: {
		model: {
			name: "John Doe",
			email: "john.doe@gmail.com",
			status: true
		},
		schema: {
			fields: [
				{
					type: "text",
					label: "Name",
					model: "name",
					readonly: false,
					featured: true,
					required: true,
					disabled: false,
					placeholder: "Name",
					validator: VueFormGenerator.validators.string
				},
				{
					type: "email",
					label: "E-mail",
					model: "email",
					placeholder: "User's e-mail address",
					validator: VueFormGenerator.validators.email
				},
				{
					type: "textArea",
					label: "Message",
					model: "message",
          message: "Message",
          hint: "Max 500 characters",
					max: 500,
					placeholder: "Message",
					rows: 4,
          required: true,
					validator: VueFormGenerator.validators.string
				}
			]
		},

		formOptions: {
			validateAfterLoad: false,
			validateAfterChanged: true
		}
	}
});
</script>
