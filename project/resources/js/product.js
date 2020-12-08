import VueRouter from 'vue-router';
import ProductListComponent from './components/product/ProductListComponent';

require('./bootstrap');
window.Vue = require('vue');

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'histroy',
    routes: [
        {
            path: '/list',
            name: 'product.list',
            component: ProductListComponent
        },
    ]
});

const app = new Vue({
    el: '#product',
    router
});
