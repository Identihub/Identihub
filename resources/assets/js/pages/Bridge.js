import React, { Component } from 'react';
import PropTypes from 'prop-types';
import { connect } from 'react-redux';
import { fetchBridge, updateBridgeNameRequest} from '../reducers/Bridge/BridgeApiCalls';
import { getBridge } from '../reducers/Bridge/BridgeReducer';
import { getSectionTypes } from '../reducers/SectionType/SectionTypeReducer';
import { Helmet } from 'react-helmet';
import DebounceInput from 'react-debounce-input';
import { updateBridgeSlugRequest } from '../reducers/Bridge/BridgeApiCalls';
import FontSection from '../components/font/FontSection';
import ColorSection from '../components/color/ColorSection';
import IconSection from '../components/icon/IconSection';
import ImageSection from '../components/image/ImageSection';
import { DragDropContext } from 'react-dnd';
import HTML5Backend from 'react-dnd-html5-backend';
import { Link } from 'react-router-dom';
import { paramsChecker, isPublic } from '../helpers';
import CopyToClipboard from 'react-copy-to-clipboard';
import NotificationSystem from 'react-notification-system';
import ReactSVG from 'react-svg';
import LinkClipboard from '../components/LinkClipboard';

export class Bridge extends Component {
    constructor(params) {
        super(params);

        params = paramsChecker(params);

        this.state = {
            id: params.match.params.id,
            public_bridge_path: window.Laravel.public_bridge_path
        };

        this.updateName = this.updateName.bind(this);
        this.updateSlug = this.updateSlug.bind(this);
    }

    componentDidMount() {
        if(!isPublic()){
            this.props.dispatch(fetchBridge(this.state.id));
        }
    }

    updateName(event) {
        const name = event.target.value;
        this.props.dispatch(updateBridgeNameRequest(this.props.bridge.id, name));
    }

    updateSlug(event) {
        const name = event.target.value;
        this.props.dispatch(updateBridgeSlugRequest(this.props.bridge.id, name));
    }

    render() {
        const bridge = this.props.bridge;
        const sectionTypes = this.props.sectionTypes;
        const publicBridgePath = this.state.public_bridge_path;
        const isPub = isPublic();


        // If one variable is null render empty page
        if(!(bridge && sectionTypes && sectionTypes.length > 0)){
            return (
                <div className="bridge-page">
                    <Helmet>
                        <title> </title>
                    </Helmet>
                </div>
            );
        }

        let breadCrumb = null;
        if(!isPub){
            breadCrumb = (
                <div className="breadcrumb">
                    <Link to="/projects">Projects</Link> { '>>' } <span>{ bridge.name }</span>
                </div>
            );
        }

        let bridgeName = null;
        if(!isPub){
            bridgeName = ( <div className="title-section">
                <DebounceInput value={bridge.name || ''} className="input-ghost background-light-gray-Hovered"
                               placeholder="Project Name" debounceTimeout="500"
                               minLength="4" onChange={this.updateName}
                />
            </div> );
        }else{
            bridgeName = ( <div className="title-section">
                <DebounceInput value={bridge.name || ''} className="input-ghost"
                               placeholder="Project Name" debounceTimeout="500"
                               minLength="4" onChange={this.updateName}
                               disabled="true"
                />
            </div> );
        }

        let link = null;
        if(!isPub){
            link = (
              <LinkClipboard bridge={bridge} publicBridgePath={publicBridgePath} updateSlug={this.updateSlug}/>
            );
        }

        return (
            <div className="bridge-page">
                <Helmet>
                    <title>{ bridge.name }</title>
                </Helmet>
                <div>

                    {/*{ breadCrumb }*/}
                    { bridgeName }
                    { link }

                    <IconSection  bridge={bridge}/>
                    <ColorSection bridge={bridge} history={this.props.history}/>
                    <FontSection bridge={bridge} history={this.props.history}/>
                    <ImageSection bridge={bridge} history={this.props.history}/>
                </div>
            </div>
        );
    }
}

const mapStateToProps = (state, ownProps) => {
    ownProps = paramsChecker(ownProps);
    const bridgeId = ownProps.match.params.id;
    return {
        bridge: getBridge(state, parseInt(bridgeId)),
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
