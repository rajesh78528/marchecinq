import Vue from 'vue'
import Router from 'vue-router'

import ProductList from './components/product/ProductList.vue'
import ProductDetail from './components/product/ProductDetail.vue'


Vue.use(Router)
export default new Router({
    mode: 'history',
    routes: [

        {
            path: '/list/:slug',
            name: 'list',
            component: ProductList,
            meta: {
            },
        },
        {
            path: '/detail/:slug',
            name: 'detail',
            component: ProductDetail,
            meta: {
            },
        }

    ]
})