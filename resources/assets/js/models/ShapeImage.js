class ShapeImage {
	// methods in this class will issue db queries for the relevant entities in advance
	static find(id) {

		return axios.get('/shapes-image' + id)
					.then(data => data);

	}

	static all(then) {
		
		return axios.get('/shapes-images')
					.then(({data}) => then(data));

	}
}


export default ShapeImage;