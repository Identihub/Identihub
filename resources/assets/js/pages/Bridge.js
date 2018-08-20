import React, {Component} from 'react';
import PropTypes from 'prop-types';
import {connect} from 'react-redux';
import {fetchBridge, updateBridgeNameRequest} from '../reducers/Bridge/BridgeApiCalls';
import {getBridge} from '../reducers/Bridge/BridgeReducer';
import {getSectionTypes} from '../reducers/SectionType/SectionTypeReducer';
import {Helmet} from 'react-helmet';
import DebounceInput from 'react-debounce-input';
import {updateBridgeSlugRequest} from '../reducers/Bridge/BridgeApiCalls';
import FontSection from '../components/font/FontSection';
import ColorSection from '../components/color/ColorSection';
import IconSection from '../components/icon/IconSection';
import ImageSection from '../components/image/ImageSection';
import WritingSection from '../components/writing/WritingSection';
import {DragDropContext} from 'react-dnd';
import HTML5Backend from 'react-dnd-html5-backend';
import {isPublic} from '../helpers';
import LinkClipboard from '../components/LinkClipboard';

export class Bridge extends Component {

    state = {
        public_bridge_path: null
    };

    componentDidMount() {

        if (window.Laravel.bridge) {
            let bridge = JSON.parse(window.Laravel.bridge);

            this.setState({
                public_bridge_path: window.Laravel.public_bridge_path
            });

            if (!isPublic()) {
                this.props.dispatch(fetchBridge(bridge.id));
            }
        }
    }

    updateName = (event) => {
        const name = event.target.value;
        this.props.dispatch(updateBridgeNameRequest(this.props.bridge.id, name));
    };

    updateSlug = (event) => {
        const name = event.target.value;
        this.props.dispatch(updateBridgeSlugRequest(this.props.bridge.id, name));
    };

    emptyPage = () => {
        return (
            <div className="bridge-page">
                <Helmet>
                    <title/>
                </Helmet>
            </div>
        );
    };

    bridgeNameInput = (bridge) => {
        if (!isPublic()) {
            return (<div className="title-section">
                <DebounceInput value={bridge.name || ''} className="input-ghost background-light-gray-Hovered"
                               placeholder="Project Name" debounceTimeout="500"
                               minLength="4" onChange={this.updateName}/>
            </div>);
        } else {
            return (<div className="title-section">
                <DebounceInput value={bridge.name || ''} className="input-ghost"
                               placeholder="Project Name" debounceTimeout="500"
                               minLength="4" disabled="true"/>
            </div>);
        }
    };

    render() {
        const {bridge, sectionTypes} = this.props;
        const {public_bridge_path} = this.state;

        if (!(bridge && sectionTypes && sectionTypes.length > 0)) {
            return this.emptyPage();
        }

        const bridgeNameInput = this.bridgeNameInput(bridge);

        let projectLink = null;
        if (!isPublic()) {
            projectLink =
                <LinkClipboard bridge={bridge} publicBridgePath={public_bridge_path} updateSlug={this.updateSlug}/>;
        }

        return (
            <div className="bridge-page">
                <Helmet>
                    <title>{bridge.name}</title>
                </Helmet>
                <div>

                    {bridgeNameInput}
                    {projectLink}

                    <IconSection bridge={bridge}/>
                    <ColorSection bridge={bridge} history={this.props.history}/>
                    <FontSection bridge={bridge} history={this.props.history}/>
                    <ImageSection bridge={bridge} history={this.props.history}/>
                    <WritingSection bridge={bridge} history={this.props.history}/>
                </div>
            </div>
        );
    }
}

const mapStateToProps = (state, ownProps) => {
    let bridge = JSON.parse(window.Laravel.bridge);
    return {
        bridge: getBridge(state, parseInt(bridge.id)),
        sectionTypes: getSectionTypes(state)
    }
};

Bridge.propTypes = {
    dispatch: PropTypes.func.isRequired,
    bridge: PropTypes.shape({
        name: PropTypes.string.isRequired
    }),
    sectionTypes: PropTypes.array
};

export default connect(mapStateToProps)(DragDropContext(HTML5Backend)(Bridge));
