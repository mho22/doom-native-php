import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { DefineComponent, createApp, h } from 'vue';


createInertiaApp( {
    progress : false,
    title: () => import.meta.env.VITE_APP_NAME,
    resolve: ( name : string ) => resolvePageComponent( `./pages/${name}.vue`, import.meta.glob<Promise<DefineComponent>>( './pages/**/*.vue', { eager : true } ) ).then( page => page ),
    setup( { el, App, props, plugin } ) { createApp( { render: () => h( App, props ) } ).use( plugin ).mount( el ); },
} );
