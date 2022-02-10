//Dipendenze
import Vue from 'vue';
import VueRouter from 'vue-router';

import Home from './pages/Home';
import About from './pages/About';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/', 
            name: 'Home',
            component: Home,
        },
        {
            path: '/about', 
            name: 'about',
            component: About,
        },
    ]
});

// Export delle rotte per essere usato con import in altri file

export default router;
