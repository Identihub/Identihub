import React from 'react';
import { HashRouter, Route, Switch, Redirect } from 'react-router-dom';
import BridgesList from './pages/BridgesPage';
import NewBridge from './pages/NewBridge';
import Bridge from './pages/Bridge';
import AddColor from './pages/AddColor';
import AddFont from './pages/AddFont';
import Viewer from './pages/Viewer';
import DeleteBridge from './pages/DeleteBridge';
import Helmet from 'react-helmet';

export default (
    <div>
        <HashRouter>
            <div>
                <Helmet
                    titleTemplate="Identihub - %s"
                >
                </Helmet>

                <Route exact path="/" render={() => (
                        <Redirect to="/bridges"/>
                )}/>

                <Route path="/bridges" strict={true} component={BridgesList}/>
                <Route path="/bridges/:id/delete-confirmation" component={DeleteBridge}/>
                <Route path="/bridges/new" strict={true} component={NewBridge}/>
                <Route path="/bridge/:id" component={Bridge}/>
                <Route path="/bridge/:id/add-color" component={AddColor}/>
                <Route path="/bridge/:id/add-font" component={AddFont}/>
                <Route path="/bridge/:id/view/:objectType/element/:elementId" component={Viewer}/>
            </div>
        </HashRouter>
    </div>
);
