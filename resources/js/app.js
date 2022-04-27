require('./bootstrap');
import {createApp, h} from 'vue';
import {createInertiaApp} from '@inertiajs/inertia-vue3';
import {InertiaProgress} from '@inertiajs/progress';
import {Quasar} from 'quasar';
import {ZiggyVue} from 'ziggy';
import {Ziggy} from 'ziggy';

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => require(`./Pages/${name}.vue`),
    setup({el, app, props, plugin}) {
        return createApp({render: () => h(app, props)})
            .use(Quasar)
            .use(plugin, ZiggyVue, Ziggy)
            .mixin({methods: {route}})
            .mount(el);
    },
});


InertiaProgress.init({color: '#4B5563'});
import "bootstrap/dist/js/bootstrap.js"
