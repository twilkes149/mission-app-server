Method: post
Input fields: M-Auth_Token, username, password

	if token is supplied	
		if username and password are supplied
			if (username and password exist in database)
				create authToken for user
				return (authToken)
			else
				return error (invalid username or password)
		else
			return error (no username or password supplied)
	else
		return error (invalid token)