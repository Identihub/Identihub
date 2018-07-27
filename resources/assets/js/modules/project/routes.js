import React from 'react';
import {HashRouter, Route} from 'react-router-dom';
import Bridge from '../../pages/Bridge';
import Helmet from 'react-helmet';
import Viewer from '../../pages/viewer/Viewer';
import AddColor from '../../pages/AddColor';
import AddFont from '../../pages/AddFont';

export default (
    <div>
        <HashRouter>
            <div>
                <Helmet
                    titleTemplate="Identihub - %s">
                </Helmet>
                <Route path="/" component={Bridge}/>
                <Route path="/view/:objectType/element/:elementId" component={Viewer}/>
                <Route path="/add-color" component={AddColor}/>
                <Route path="/add-font" component={AddFont}/>
            </div>
        </HashRouter>
    </div>
);
