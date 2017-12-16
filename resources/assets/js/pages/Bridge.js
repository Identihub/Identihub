import React, {Component} from 'react';
import PropTypes from 'prop-types';
import {connect} from 'react-redux';
import {fetchBridge, updateBridgeNameRequest} from '../reducers/Bridge/BridgeApiCalls';
import {getBridge} from '../reducers/Bridge/BridgeReducer';
import {getSectionTypes} from '../reducers/SectionType/SectionTypeReducer';
import {Helmet} from 'react-helmet';
import DebounceInput from 'react-debounce-input';
import {updateBridgeSlugRequest} from '../reducers/Bridge/BridgeApiCalls';
import FontSection from '../components/FontSection';
import ColorSection from '../components/ColorSection';
import IconSection from '../components/IconSection';
import ImageSection from '../components/ImageSection';
import {DragDropContext} from 'react-dnd';
import HTML5Backend from 'react-dnd-html5-backend';
import {Link} from 'react-router-dom';
import {paramsChecker, isPublic} from '../helpers';
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
        if (!isPublic()) {
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
        if (!(bridge && sectionTypes && sectionTypes.length > 0)) {
            return (
                <div className="bridge-page">
                    <Helmet>
                        <title></title>
                    </Helmet>
                </div>
            );
        }

        let breadCrumb = null;
        if (!isPub) {
            breadCrumb = (
                <div className="breadcrumb">
                    <Link to="/projects">Projects</Link> {'>>'} <span>{bridge.name}</span>
                </div>
            );
        }

        let bridgeName = null;
        if (!isPub) {
            bridgeName = (<div className="title-section">
                <DebounceInput value={bridge.name || ''} className="input-ghost"
                               placeholder="Project Name" debounceTimeout="500"
                               minLength="4" onChange={this.updateName}
                />
            </div>);
        } else {
            bridgeName = (<div className="title-section">
                <DebounceInput value={bridge.name || ''} className="input-ghost"
                               placeholder="Project Name" debounceTimeout="500"
                               minLength="4" onChange={this.updateName}
                               disabled="true"
                />
            </div>);
        }

        let link = null;
        if (!isPub) {
            link = (
                <LinkClipboard bridge={bridge} publicBridgePath={publicBridgePath} updateSlug={this.updateSlug}/>
            );
        }

        let content = null;



        const sectionMap = {
            ICONS: IconSection,
            COLORS: ColorSection,
            FONTS: FontSection,
            IMAGES: ImageSection,
        };

        const sectionTypeContent = sectionTypes.map(sectionType => {
            console.log('Component name:');
            console.log(sectionType.name);
            const Component = sectionMap[sectionType.name];
            return <Component bridge={bridge} history={this.props.history} />
        });

        return (
            <div className="bridge-page">
                <Helmet>
                    <title>{bridge.name}</title>
                </Helmet>
                <div>

                    {breadCrumb}
                    {bridgeName}
                    {link}
                    {sectionTypeContent}
                </div>
            </div>
        );

    };

}

const mapStateToProps = (state, ownProps) => {
    ownProps = paramsChecker(ownProps);
    const bridgeId = ownProps.match.params.id;
    //console.log(getSectionTypes(state));
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