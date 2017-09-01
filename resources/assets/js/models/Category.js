class Category {

	// methods in this class will issue db queries for the relevant entities in advance
	static find(id) {

		return axios.get('/category/' + id)
					.then(({data}) => this.category);

	}

	static all(then) {
		
		return axios.get('/categories')
					.then(({data}) => then(data));

	}
}


export default Category;

// Example use inside a component
// 
// created() {
//     Category.all(categories => this.categories = categories);
// }