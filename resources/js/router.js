import Vue from 'vue';
import VueRouter from 'vue-router';
import UserSearch from "./pages/UserSearch";
import DevicelogSeach from "./pages/DevicelogSeach";
import dashboard from "./pages/dashboard";
import showDevice from "./pages/showDevice";
import count from "./pages/count";

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    linkExactActiveClass: 'active',
    routes:[
        {
            path: '/UserSearch',
            name: 'UserSearch',
            component: UserSearch
        },
        {
            path: '/DevicelogSeach',
            name: 'DevicelogSeach',
            component: DevicelogSeach
        },
        {
            path: '/dashboard',
            name: 'dashboard',
            component: dashboard
        },
        {
            path: '/showDevice/:id',
            name: 'showDevice',
            component: showDevice
        },
        {
            path: '/count/:id',
            name: 'count',
            component: count
        }

     ]
});

export default router;
