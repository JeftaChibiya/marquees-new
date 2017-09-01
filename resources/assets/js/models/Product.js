class Product {
	// methods in this class will issue db queries for the relevant entities in advance
	static find(id) {

		return axios.get('/product/' + id)
					.then(data => data);

	}

	static all(then) {
		
		return axios.get('/products')
					.then(({data}) => then(data));

	}
}


export default Product;