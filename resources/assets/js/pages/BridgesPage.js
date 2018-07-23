import React, {Component} from 'react';
import PropTypes from 'prop-types';
import { connect } from 'react-redux';
import { fetchBridges } from '../reducers/Bridge/BridgeApiCalls';
import { getBridges } from '../reducers/Bridge/BridgeReducer';
import { getHasBridges } from '../reducers/Extra/ExtraReducer';
import { Helmet } from 'react-helmet';

import CSSTransitionGroup from 'react-transition-group/CSSTransitionGroup';

import BridgesList from '../components/BridgesList';
import BridgesEmptyState from '../components/BridgesEmptyState';

export class BridgesPage extends Component {

    componentDidMount() {
        this.props.dispatch(fetchBridges());
    }

    render() {
        const block = this.props.hasBridges ?
            <BridgesList bridges={this.props.bridges} />
            :
            <BridgesEmptyState/>;

        let title = 'List';

        if(this.props.bridges.length){
            title = 'List (' + this.props.bridges.length + ')';
        }

        return (
            <div>
                <Helmet>
                    <title>{ title }</title>
                </Helmet>
                <CSSTransitionGroup
                    transitionName="example"
                    transitionEnterTimeout={500}
                    transitionLeaveTimeout={300}>
                    {block}
                </CSSTransitionGroup>
            </div>
        );
    }
}

const mapStateToProps = (state) => {
    return {
        bridges: getBridges(state),
        hasBridges: getHasBridges(state)
    }
};

BridgesPage.propTypes = {
    dispatch: PropTypes.func.isRequired,
    bridges: PropTypes.arrayOf(PropTypes.shape({
        name: PropTypes.string.isRequired
    })).isRequired,
    hasBridges: PropTypes.bool.isRequired
};

export default connect(
    mapStateToProps
)(BridgesPage);