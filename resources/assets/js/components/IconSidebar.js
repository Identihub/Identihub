import React, {Component} from 'react';
import PropTypes from 'prop-types';
import {connect} from 'react-redux';
import {bindActionCreators} from 'redux';
import CopyToClipboard from 'react-copy-to-clipboard';
import NotificationSystem from 'react-notification-system';
import Spinner from '../components/Spinner';

import {deleteIcon, addIconConverted, updateIconFile, downloadIconConverted} from '../reducers/Bridge/BridgeApiCalls';
import {paramsChecker, isPublic} from '../helpers';
import CustomSizeDownload from "./CustomSizeDownload";

class IconSidebar extends Component {

    constructor(props) {
        super(props);

        this.notificationSystem = null;
        this.inputElement = null;

        this.state = {
            margin: 0
        };

        this.openSettings = this.openSettings.bind(this);
        this.openPrimary = this.openPrimary.bind(this);
        this.addNotification = this.addNotification.bind(this);
        this.deleteIcon = this.deleteIcon.bind(this);
        this.addNewConverted = this.addNewConverted.bind(this);
        this.emulateInputOnChange = this.emulateInputOnChange.bind(this);
        this.updateIcon = this.updateIcon.bind(this);
        this.downloadCustomSize = this.downloadCustomSize.bind(this);
    }

    componentDidMount() {
        this.notificationSystem = this.refs.notificationSystem;
    }

    addNotification() {
        this.notificationSystem.addNotification({
            message: 'Link copied to clipboard ',
            level: 'success'
        });
    }

    openSettings() {
        this.setState((prevState, _) => {
            return {margin: 300}
        })
    }

    openPrimary() {
        this.setState((prevState, _) => {
            return {margin: 0}
        })
    }

    deleteIcon() {
        const {deleteIcon, bridge, icon, history} = this.props;
        if (deleteIcon) {
            history.replace('/project/' + bridge.id);
            deleteIcon(bridge.id, icon.id);
        }
    }

    emulateInputOnChange(event) {
        this.inputElement.click();
    }

    updateIcon(e) {
        const {updateIconFile, bridge, icon} = this.props;
        const file = e.target.files[0];
        updateIconFile(bridge.id, icon.id, file);
    }

    addNewConverted(width, height) {
        const {addIconConverted, bridge, icon} = this.props;
        addIconConverted(bridge.id, icon.id, parseInt(width), parseInt(height));
    }

    downloadCustomSize(width, height) {
        const {downloadIconConverted, bridge, icon} = this.props;
        downloadIconConverted(bridge.id, icon.id, parseInt(width), parseInt(height));
    }

    render() {
        const openSettings = this.openSettings;
        const openPrimary = this.openPrimary;
        const addNotification = this.addNotification;
        const deleteIcon = this.deleteIcon;
        const addNewConverted = this.addNewConverted;
        const emulateInputOnChange = this.emulateInputOnChange;
        const downloadCustomSize = this.downloadCustomSize;

        const isPub = isPublic();

        const {margin} = this.state;
        const marginStyle = "-" + margin + "px";

        const {icon} = this.props;

        if (!icon)
            return <div/>;

        const lastConverted = icon.converted[icon.converted.length - 1];

        let adminOptions = null;
        let customSizeDownload = null;


        if (!isPub) {
            adminOptions = (
                <div className="admin-option">
                    <div className="sidebar-padding">
                        <div className="settings">
                            <div className="title">
                                <span>Admin</span>
                            </div>
                            <div className="featured">
                                <span>Featured Image</span>
                                {/* THE CHECKBOX FOR SETTING FEATURED */}
                                <span id="checkbox">
                                    <Spinner
                                        width={14}
                                        height={14}
                                    />
                                </span>
                            </div>
                            <div className="buttons">
                                {/*<section className="update">*/}
                                <input id="update-icon"
                                       ref={input => this.inputElement = input}
                                       onChange={this.updateIcon}
                                       type="file"
                                       accept="image/*"
                                       name="icon"/>
                                <a className="button-outline-white settings-button"
                                   onClick={emulateInputOnChange}>UPDATE</a>
                                {/*</section>*/}
                                <a className="button-outline-delete settings-button button-left"
                                   onClick={deleteIcon}>DELETE</a>
                            </div>
                        </div>
                    </div>
                    <div id="sidebar-hr">
                        <hr/>
                    </div>

                </div>
            );
        }

        customSizeDownload = (<CustomSizeDownload
            defaultWidth={lastConverted.width}
            ratio={this.props.icon.width_ratio}
            downloadCustomSize={downloadCustomSize}/>);

        return (
            <div className="sidebar">
                <div className="bm-item-list">
                    <div className="admin-option sidebar-padding">
                        <div className="header">
                            <span>Use Asset</span>
                        </div>
                    </div>
                    {adminOptions}
                    <div className="sidebar-client">
                        <div className="sidebar-section">
                            <div className="title">
                            <span>
                                SVG
                            </span>
                                <a className="download-icon" href={window.location.origin + '/assets/' + icon.filename}
                                   download={icon.filename}>
                                    <i className="fas fa-download"/>
                                </a>
                            </div>
                            <div className="sidebar-section-url">
                                <div className="sidebar-little-title">EMBED</div>
                                <div className="url url-lighter">
                                    <input type="text"
                                           defaultValue={`${window.location.origin + '/assets/' + icon.filename}`}/>
                                    {/*<p>{`${window.location.origin + '/assets/' + icon.filename}`.substring(0, 35)}</p>*/}
                                    <span id="copy-to-clip">
                                    <CopyToClipboard
                                        text={window.location.origin + '/assets/' + icon.filename}
                                        className="clipboard" onCopy={() => {
                                        addNotification()
                                    }}>
                                            <span id="icon">
                                                <i className="far fa-copy"/>
                                            </span>
                                    </CopyToClipboard>
                                </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="sidebar-margin-top sidebar-section">
                        <div className="sidebar-client">
                            <div className="title">
                                <span>
                                    PNG
                                </span>
                            </div>
                        </div>
                        {
                            icon.converted.map((convertedItem, index) => {
                                return (
                                    <div key={`icon-sidebar-item-${index}`}>
                                        <div className="sidebar-client">
                                            <div>
                                                <div className="sidebar-section-img-info">
                                                    <div className="sidebar-image-info">
                                                        <div className="sidebar-little-title">WIDTH(px)</div>
                                                        <div className="info info-darker">{convertedItem.width}</div>
                                                    </div>
                                                    <i className="fas fa-lock lock"/>
                                                    <div className="sidebar-image-info">
                                                        <div className="sidebar-little-title">HEIGHT</div>
                                                        <div className="info info-darker">{convertedItem.height}</div>
                                                    </div>
                                                    <a className="download-icon"
                                                       href={window.location.origin + '/assets/' + convertedItem.filename}
                                                       download={convertedItem.filename}>
                                                        <i className="fas fa-download" id="download-icon"/>
                                                    </a>
                                                </div>
                                                <div className="sidebar-section-url">
                                                    <div className="sidebar-little-title">EMBED</div>
                                                    <div className="url url-darker">
                                                        <input type="text"
                                                               defaultValue={window.location.origin + '/assets/' + convertedItem.filename}/>
                                                        <span id="copy-to-clip">
                                                    <CopyToClipboard
                                                        text={window.location.origin + '/assets/' + convertedItem.filename}
                                                        className="clipboard" onCopy={() => {
                                                        addNotification()
                                                    }}>
                                                        <span id="icon">
                                                            <i className="far fa-copy"/>
                                                        </span>
                                                    </CopyToClipboard>
                                                </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="sidebar-hr">
                                            <hr/>
                                        </div>
                                    </div>
                                );
                            })
                        }
                    </div>

                    <div className="sidebar-client new-size">
                        {customSizeDownload}
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
