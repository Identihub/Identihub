import React, {Component} from 'react';
import PropTypes from 'prop-types';
import {connect} from 'react-redux';
import {bindActionCreators} from 'redux';
import CopyToClipboard from 'react-copy-to-clipboard';
import NotificationSystem from 'react-notification-system';
import {deleteColor} from '../../reducers/Bridge/BridgeApiCalls';
import {isPublic} from '../../helpers';

class ColorSidebar extends Component {

    propTypes = {
        color: PropTypes.shape({
            id: PropTypes.number
        })
    };

    componentDidMount() {
        this.notificationSystem = this.refs.notificationSystem;
    }

    addNotification = () => {
        this.notificationSystem.addNotification({
            message: 'Color copied to clipboard',
            level: 'success'
        });
    };

    deleteColor = () => {
        const {deleteColor, bridge, color, history} = this.props;
        deleteColor(bridge.id, color.id);
        history.replace('/project/' + bridge.id);
    };

    render() {
        const {color} = this.props;

        let adminSettings = null;
        if (!isPublic()) {
            adminSettings = (
                <div className="settings">
                    <div className="buttons">
                        <a className="button-outline-delete settings-button"
                           onClick={this.deleteColor}>DELETE</a>
                    </div>
                </div>
            );
        }

        if (!color)
            return <div/>;

        const rgbColorValue = "rgb(" + color.rgb.split(' ').join(', ') + ")";

        return (
            <div className="bm-item-list sidebar">
                <div className="sidebar-padding">
                    <div className="header">
                        <span>Use Color</span>
                    </div>
                    {adminSettings}
                </div>

                <div id="sidebar-hr">
                    <hr/>
                </div>

                <div className="sidebar-client sidebar-margin-top">
                    <div className="sidebar-section-url">
                        <div className="sidebar-little-title">HEX</div>
                        <div className="url url-lighter">
                            <input type="text"
                                   readOnly
                                   value={"#" + color.hex}/>
                            <span id="copy-to-clip">
                                        <CopyToClipboard
                                            text={"#" + color.hex}
                                            className="clipboard" onCopy={() => {
                                            this.addNotification()
                                        }}>
                                                <span id="icon">
                                                    <i className="far fa-copy"/>
                                                </span>
                                        </CopyToClipboard>
                                    </span>
                        </div>
                    </div>
                </div>

                <div className="sidebar-client sidebar-margin-top">
                    <div className="sidebar-section-url">
                        <div className="sidebar-little-title">RGB</div>
                        <div className="url url-darker">
                            <input type="text"
                                   readOnly
                                   value={rgbColorValue}/>
                            <span id="copy-to-clip">
                                        <CopyToClipboard
                                            text={rgbColorValue}
                                            className="clipboard" onCopy={() => {
                                            this.addNotification()
                                        }}>
                                                <span id="icon">
                                                    <i className="far fa-copy"/>
                                                </span>
                                        </CopyToClipboard>
                                    </span>
                        </div>
                    </div>
                </div>

                <NotificationSystem ref="notificationSystem"/>
            </div>
        );
    }
}

const mapDispatchToProps = (dispatch) => {
    return bindActionCreators({
        deleteColor
    }, dispatch)
};

export default connect(null, mapDispatchToProps)(ColorSidebar);

