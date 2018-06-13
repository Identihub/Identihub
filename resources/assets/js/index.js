import React from 'react';
import ReactDOM from 'react-dom';
import Echo from "laravel-echo";
import App from './app';
import {configureStore} from './store';

import {fetchBridges, fetchBridge} from './reducers/Bridge/BridgeApiCalls';

const store = configureStore(window.__INITIAL_STATE__);
const mountApp = document.getElementById('app');

window.axios = require('axios');

window.axios.defaults.headers.common['X-CSRF-TOKEN'] = window.Laravel.csrfToken;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

try {
    window.Pusher = require('pusher-js');
    window.Echo = new Echo({
        broadcaster: 'pusher',
        key: window.Laravel.pusherId,
        cluster: 'eu',
        encrypted: true
    });


    window.Echo.channel('bridges')
        .listen('BridgeCreated', (e) => {
            store.dispatch(fetchBridges());
        })
        .listen('BridgeUpdated', (e) => {
            store.dispatch(fetchBridge(e.id));
        });
} catch (e) {
    console.log("Can't do a real time connection");
}

ReactDOM.render(
    <App store={store}/>,
    mountApp
);

