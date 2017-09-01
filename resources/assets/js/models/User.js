class User {
	// methods in this class will issue db queries for the relevant entities in advance
	static find(id) {

		return axios.get('/user/' + id)
					.then(data => data);

	}

	static all(then) {
		
		return axios.get('/users')
					.then(({data}) => then(data));

	}
}


export default User;