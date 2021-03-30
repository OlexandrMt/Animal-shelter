export const validationRules = {
	login: {
		username: {
			required: true,
			minlength: 3,
			maxlength: 255
		},
		password: {
			required: true,
			minlength: 3,
			maxlength: 255
		}
	},
	register: {
		username: {
			required: true,
			minlength: 3,
			maxlength: 255,
		},
		password: {
			required: true,
			minlength: 3,
			maxlength: 255
		},
		confirmPassword: {
			equalTo: "#password"
		},
		email: {
			required: true,      
			email: true
		}
	},
	contact: {
		username: {
			required: true,
			minlength: 3,
			maxlength: 20,
		},
		email: {
			required: true,      
			email: true
		},
		message: {
			minlength: 3,
			maxlength: 1000,
		}
	}
}