/**
 * Main store function
 */
import {createStore, applyMiddleware, compose} from 'redux';
import thunk from 'redux-thunk';
import rootReducer from './reducers';
import logger from 'redux-logger';
import {composeWithDevTools} from 'redux-devtools-extension';


export function configureStore(initialState = {}) {
    // Middleware and store enhancers
    const middlewares = [
        thunk,
        // logger
    ];


    const enhancers = [
        applyMiddleware(...middlewares),
    ];

    //if (process.env.NODE_ENV === 'development') {
    //Enable DevTools only when rendering on client and during development.
    //enhancers.push(window.devToolsExtension ? window.devToolsExtension() : DevTools.instrument());
    //}

    const store = createStore(rootReducer, initialState, composeWithDevTools(...enhancers));

    // For hot reloading reducers
    if (module.hot) {
        // Enable Webpack hot module replacement for reducers
        module.hot.accept('./reducers', () => {
            const nextReducer = require('./reducers').default; // eslint-disable-line global-require
            store.replaceReducer(nextReducer);
        });
    }

    return store;
}
