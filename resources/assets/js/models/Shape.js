class Shape {
	// methods in this class will issue db queries for the relevant entities in advance
	static find(id) {

		return axios.get('/shape/' + id)
					.then(data => data);

	}

	static all(then) {
		
		return axios.get('/shapes')
					.then(({data}) => then(data));

	}
}


export default Shape;