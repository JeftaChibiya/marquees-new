class Attribute {

	// methods in this class will issue db queries for the relevant entities in advance
	static find(id) {

		return axios.get('/attributes/' + id)
					.then(({data}) => this.attribute);

	}

	static all(then) {
		
		return axios.get('/attributes')
					.then(({data}) => then(data));

	}
}


export default Attribute;