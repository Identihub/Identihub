import React, {Component} from 'react';
import PropTypes from 'prop-types';
import {connect} from 'react-redux';
import {bindActionCreators} from 'redux';
import NotificationSystem from 'react-notification-system';

import SvgDownloadArea from './SvgDownloadArea';

import {
    deleteIcon,
    addIconConverted,
    updateIconFile,
    downloadIconConverted
} from '../../reducers/Bridge/BridgeApiCalls';
import {isPublic} from '../../helpers';
import PngDownloadArea from "./PngDownloadArea";
import JpgDownloadArea from "./JpgDownloadArea";
import AdminOptions from "./AdminOptions";

class IconSidebar extends Component {

    state = {
        icon_format: 'svg'
    };

    componentDidMount() {
        this.notificationSystem = this.refs.notificationSystem;
    }

    addNotification = () => {
        this.notificationSystem.addNotification({
            message: 'Link copied to clipboard.',
            level: 'success'
        });
    };

    deleteIcon = () => {
        const {deleteIcon, bridge, icon, history} = this.props;
        if (deleteIcon) {
            history.replace('/project/' + bridge.id);
            deleteIcon(bridge.id, icon.id);
        }
    };

    updateIcon = (event) => {
        const {updateIconFile, bridge, icon} = this.props;
        const file = event.target.files[0];
        updateIconFile(bridge.id, icon.id, file);
    };

    downloadCustomSize = (width, height, format) => {
        const {downloadIconConverted, bridge, icon} = this.props;
        downloadIconConverted(bridge.id, icon.id, parseInt(width), parseInt(height), format);
    };

    getDownloadArea = () => {

        const {icon} = this.props;

        const lastConverted = icon.converted[icon.converted.length - 1];

        switch (this.state.icon_format) {
            case 'svg':
                return (<SvgDownloadArea icon={icon} addNotification={this.addNotification}/>);

            case 'png':
                return (<PngDownloadArea icon={icon}
                                         downloadCustomSize={this.downloadCustomSize}
                                         defaultWidth={lastConverted.width}/>);
            case 'jpg':
                return (<JpgDownloadArea icon={icon}
                                         downloadCustomSize={this.downloadCustomSize}
                                         defaultWidth={lastConverted.width}/>);
        }
    };

    changeDownloadFormat = (format) => {
        this.setState({
            ...this.state,
            icon_format: format
        });
    };

    getFormatButtons = () => {
        return ['svg', 'png', 'jpg'].map((format, index) => {

            const isActive = (format === this.state.icon_format) ? 'active' : '';

            return <a className={`btn-outline-white format-btn ${isActive}`}
                      key={index}
                      onClick={() => {
                          this.changeDownloadFormat(format)
                      }}>{format.toUpperCase()}</a>
        });
    };

    render() {
        const {icon} = this.props;

        if (!icon)
            return <div/>;

        const formatButtons = this.getFormatButtons();
        const downloadAreaComponent = this.getDownloadArea();


        let adminOptions = null;
        if (!isPublic()) {
            adminOptions = (
                <AdminOptions updateIcon={this.updateIcon} deleteIcon={this.deleteIcon}/>
            );
        }

        return (
            <div className="sidebar">
                <div className="bm-item-list">
                    <div className="admin-option sidebar-padding">
                        <div className="header">
                            <span>Use Asset</span>
                        </div>
                    </div>
                    {adminOptions}

                    <div id="download-section">
                        <div className="tab-section">

                            {formatButtons}

                        </div>

                        {downloadAreaComponent}

                    </div>

                    <NotificationSystem ref="notificationSystem"/>
                </div>
            </div>
        );
    }
}

IconSidebar.propTypes = {
    icon: PropTypes.shape({
        id: PropTypes.number
    })
};

const dispatchToProps = (dispatch) => {
    return bindActionCreators({
        deleteIcon,
        addIconConverted,
        updateIconFile,
        downloadIconConverted
    }, dispatch)
};

export default connect(state => state, dispatchToProps)(IconSidebar);
