<script>

var VueFormGenerator = window.VueFormGenerator;

var vm = new Vue({
	el: "#hello-form",
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
      message: "Message",
			status: false
		},
		schema: {
			fields: [
				{
					type: "text",
					label: "Name",
					model: "name",
          name: "John Doe",
					readonly: false,
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
          hint: "Max 500 characters",
					max: 500,
					placeholder: "Message",
					rows: 4,
          required: true,
					validator: VueFormGenerator.validators.string
				},
        {
					type: "submit",
					label: "",
					buttonText: "Submit",
					validateBeforeSubmit: true
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
