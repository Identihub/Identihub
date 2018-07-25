import React from 'react';
import {HashRouter, Route, Redirect} from 'react-router-dom';
import BridgesList from './pages/BridgesPage';
import NewBridge from './pages/NewBridge';
import DeleteBridge from './pages/DeleteBridge';
import Helmet from 'react-helmet';

export default (
    <div>
        <HashRouter>
            <div>
                <Helmet
                    titleTemplate="Identihub - %s">
                </Helmet>

                <Route exact path="/" render={() => <Redirect to="/projects"/>}/>
                <Route path="/projects" strict={true} component={BridgesList}/>
                <Route path="/projects/:id/delete-confirmation" component={DeleteBridge}/>
                <Route path="/projects/new" strict={true} component={NewBridge}/>
            </div>
        </HashRouter>
    </div>
);
