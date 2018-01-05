import VueRouter from 'vue-router'; 

let routes = [
	{
		path: '/', 
		redirect: '/dashboard'
	},
	{
		path: '/dashboard', 
		component: require('./views/Dashboard')
	},	
	{
		path: '/catalog', 
		component: require('./views/Catalog')
	},
	{
		path: '/categories', 
		component: require('./views/Categories')
	},	
	{
		path: '/attributes', 
		component: require('./views/Attributes')
	},	
	{
		path: '/manage-users', 
		component: require('./views/Users')

	},		
	{
		path: '/add-category', 
		component: require('./views/AddCategory')
	},		
	{
		path: '/add-product', 
		component: require('./views/AddProduct')
	},
	{
		path: '/add-attribute', 
		component: require('./views/AddAttribute')
	},	
	{
		path: '/edit-product/:id/edit', 
		component: require('./views/EditProduct')			
	},	
	{
		path: '/edit-category/:id/edit', 
		component: require('./views/EditCategory')

	},
	{
		path: '/edit-shape/:id/edit', 
		component: require('./views/EditShape')			
	},	
	{
		path: '/view-product/:id/view', 
		component: require('./views/ViewProduct')			
	},	
	{
		path: '/view-category/:id/View', 
		component: require('./views/ViewCategory')

	},		
	{
		path: '/register', 
		component: require('./views/Register')

	},
	{
		path: '/login', 
		component: require('./views/Login')

	},
	{
		path: '/shapes', 
		component: require('./views/Shapes')

	},
	{
		path: '/add-shape', 
		component: require('./views/AddShape')

	},
	{
		path: '/custom/:id/shape', 
		component: require('./views/Custom')

	}											
];

export default new VueRouter({	
	
	routes

});