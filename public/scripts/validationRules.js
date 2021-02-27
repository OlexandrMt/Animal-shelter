export const validationRules = {
	login: {
		username: {
			required: true,
			minlength: 3,
			maxlength: 20
		},
		password: {
			required: true,
			minlength: 3,
			maxlength: 20
		}
	},
	register: {
		onfocusout: false,
		username: {
			required: true,
			minlength: 3,
			maxlength: 20,
		},
		password: {
			required: true,
			minlength: 3,
			maxlength: 20
		},
		confirmPassword: {
			equalTo: "#password"
		},
		email: {
			required: true,      
			email: true
		}
	}
}