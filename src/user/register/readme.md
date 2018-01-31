Method: post
Input fields: username, password, M-Auth-Token

	if token is supplied	
		if username and password are supplied
			if username doesn't exists in database
				encrypt password
				save password and username

				if familyName //we are creating a family
					create unique familyID
				else if familyKey //we are joining a family
					if familyKey exists in database
						save familyKey to user in user table
					else
						return error (no family exists with that key)
			else
				return error (username already exists)
		else
			return error
	else
		return error (invalid token)