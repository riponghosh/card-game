import VueRouter from 'vue-router';


let routes=[
{
	path:'/',
	component:require('./components/frontend/Home')
},
{
	path:'/2',
	// props: {mess:'sec'},
	component:require('./components/frontend/2')
},
{
	path:'/3',
	component:require('./components/frontend/3')
},
{
	path:'/4',
	component:require('./components/frontend/4')
},
{
	path:'/profile',
	component:require('./components/frontend/profile')
},
{
	path:'/login',
	component:require('./components/frontend/login')
},
{
	path:'/register',
	component:require('./components/frontend/register')
}
];

export default new VueRouter({
	routes,
	linkActiveClass: 'active'
});