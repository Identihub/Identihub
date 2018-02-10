import React from 'react';
import ReactDOM from 'react-dom';
import routes from './public-routes';
import { configureStore } from './store';
import PropTypes from 'prop-types';
import { Provider } from 'react-redux';
import { BrowserRouter } from 'react-router-dom';
import { fillStore } from './helpers';

const store = configureStore(window.__INITIAL_STATE__);
const mountApp = document.getElementById('app');

export default function App(props) {
    return (
        <Provider store={props.store}>
            <BrowserRouter>
                {routes}
            </BrowserRouter>
        </Provider>
    );
}

App.propTypes = {
    store: PropTypes.object.isRequired,
};

fillStore(store);

ReactDOM.render(<App store={store}/>, mountApp);

