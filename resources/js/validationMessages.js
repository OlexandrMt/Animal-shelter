export const validationMessages = {
	login:{
		username: {
			required: "Username can not be empty",
			minlength: "Username should contain at least 3 characters",
			maxlength: "Username should contain at most 20 characters"
		},
		password: {
			required: "Password can not be empty",
			minlength: "Password should contain at least 3 characters",
			maxlength: "Password should contain at most 20 characters"
		}
	},
	register: {
		username: {
			required: "Username can not be empty",
			minlength: "Username should contain at least 3 characters",
			maxlength: "Username should contain at most 20 characters"
		},
		password: {
			required: "Password can not be empty",
			minlength: "Password should contain at least 3 characters",
			maxlength: "Password should contain at most 20 characters"
		},
		confirmPassword: {
			equalTo: "Passwords don't match"
		},
		email: "Please enter a valid email address"
	},
	contact: {
		username: {
			required: "Username can not be empty",
			minlength: "Username should contain at least 3 characters",
			maxlength: "Username should contain at most 20 characters"
		},
		email: "Please enter a valid email address",
		message: {
			required: "Message can not be empty",
			minlength: "Message should contain at least 3 characters",
			maxlength: "Message should contain at most 1000 characters"
		}
	}
}