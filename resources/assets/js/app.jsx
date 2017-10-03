import React from 'react';
import { Provider } from 'react-redux';
import { BrowserRouter } from 'react-router-dom';
import PropTypes from 'prop-types';

// Import Routes
import routes from './routes';

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