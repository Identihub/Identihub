import React, {Component} from 'react';
import PropTypes from 'prop-types';
import { isPublic } from '../helpers';
import {fetchBridge} from "../reducers/Bridge/BridgeApiCalls";

const renderSection = (data) => (WrappedComponent) => {

    return class renderSection extends Component {
        // componentDidMount() {
        //     if(!isPublic()){
        //         // this.props.dispatch(fetchBridge(this.state.id));
        //     }
        // }

        render() {
            const isPub = isPublic();
            let whatToRender = null;
            if(isPub && this.props.bridge[data].length > 0) {
                whatToRender = <WrappedComponent {...this.props} />
            } else if(!isPub) {
                whatToRender = <WrappedComponent {...this.props} />
            }

            return whatToRender
        }
    };
};

renderSection.propTypes = {
    data: PropTypes.array.isRequired,
    WrappedComponent: PropTypes.element.isRequired,
};

export default renderSection;