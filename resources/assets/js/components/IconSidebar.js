import React, {Component} from 'react';
import PropTypes from 'prop-types';
import {connect} from 'react-redux';
import {bindActionCreators} from 'redux';
import ReactSVG from 'react-svg';
import CopyToClipboard from 'react-copy-to-clipboard';
import NotificationSystem from 'react-notification-system';
import NewSize from '../components/NewSize';
import Spinner from '../components/Spinner';

import {deleteIcon, addIconConverted, updateIconFile} from '../reducers/Bridge/BridgeApiCalls';
import {paramsChecker, isPublic} from '../helpers';

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
    }

    componentDidMount() {
        this.notificationSystem = this.refs.notificationSystem;
    }

    addNotification() {
        console.log("Here");

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
        //console.log(this);
        const {updateIconFile, bridge, icon} = this.props;
        const file = e.target.files[0];
        updateIconFile(bridge.id, icon.id, file);
    }

    addNewConverted(width, height) {
        const {addIconConverted, bridge, icon} = this.props;
        addIconConverted(bridge.id, icon.id, parseInt(width), parseInt(height));
    }

    render() {
        console.log(this.props);

        const openSettings = this.openSettings;
        const openPrimary = this.openPrimary;
        const addNotification = this.addNotification;
        const deleteIcon = this.deleteIcon;
        const addNewConverted = this.addNewConverted;
        const emulateInputOnChange = this.emulateInputOnChange;

        const isPub = isPublic();

        const {margin} = this.state;
        const marginStyle = "-" + margin + "px";

        const {icon} = this.props;

        if (!icon)
            return <div></div>;

        const lastConverted = icon.converted[icon.converted.length - 1];
        console.log(lastConverted);

        let adminOptions = null;
        let newSize = null;
        // if (!isPub) {
        //     settingsButton = (
        //         <div onClick={openSettings}>
        //             <ReactSVG
        //                 path="/images/settings.svg"
        //             />
        //         </div>);
        //     // newSize = (
        //     //     <NewSize defaultWidth={lastConverted.width} ratio={this.props.icon.width_ratio} saveElement={addNewConverted}/>);
        // }


        if (!isPub) {
            adminOptions = (
                <div className="admin-option">
                    <div className="sidebar-padding">
                        <div className="header">
                            <span>User Asset</span>
                        </div>
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


        return (
            <div className="bm-item-list sidebar">
                {adminOptions}
                <div className="sidebar-client">
                    <div className="sidebar-section">
                        <div className="title">
                            <span>
                                SVG
                            </span>
                            <a id="title-icon" href={window.location.origin + '/assets/' + icon.filename}
                               download={icon.filename}>
                                <i className="fas fa-download"/>
                            </a>
                        </div>
                        <div className="sidebar-svg-url">
                            <div id="title">EMBED</div>
                            <div className="url">
                                <p>{window.location.origin + '/assets/' + icon.filename}</p>
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
                    <div className="sidebar-png sidebar-section">
                        <div className="title">
                            <span>
                                PNG
                            </span>
                        </div>
                    </div>
                </div>

                <div>

                </div>
                <NotificationSystem ref="notificationSystem"/>
            </div>
        );

        // return (
        //     <div className="icon-sidebar">
        //         <div className="primary-view" style={{marginLeft: marginStyle}}>
        //             <div className="head">
        //                 {settingsButton}
        //                 <h3>Logos</h3>
        //             </div>
        //             <div className="content">
        //                 <section>
        //                     <h4>SVG</h4><a className="button" href={window.location.origin + '/assets/' + icon.filename}
        //                                    download={icon.filename}>Download</a>
        //                     <div className="clipboard_and_text">
        //                         <div>
        //                            <CopyToClipboard text={window.location.origin + '/assets/' + icon.filename}
        //                                             className="clipboard" onCopy={() => {
        //                               addNotification()
        //                            }}>
        //             <span><ReactSVG
        //                 path="/images/clipboard.svg"
        //             /></span>
        //                             </CopyToClipboard>
        //                         </div>
        //                         <p>{window.location.origin + '/assets/' + icon.filename}</p>
        //                     </div>
        //                 </section>
        //                 <section>
        //                     <h4>PNG</h4>
        //                     {
        //                         icon.converted.map(function (convertedItem) {
        //                             return (
        //                                 <div key={convertedItem.id}>
        //                                     <div className="clipboard_and_text">
        //                                         <div>
        //                                             <CopyToClipboard
        //                                                 text={window.location.origin + '/assets/' + convertedItem.filename}
        //                                                 className="clipboard" onCopy={() => {
        //                                                 addNotification()
        //                                             }}>
        //                     <span>
        //                       <ReactSVG
        //                           path="/images/clipboard.svg"
        //                       />
        //                     </span>
        //                                             </CopyToClipboard>
        //                                         </div>
        //                                         <p>{window.location.origin + '/assets/' + convertedItem.filename}</p>
        //                                     </div>
        //                                     <div className="text">
        //                                         <p><span className="prefix">Width</span> <span className="primar">{convertedItem.width}</span></p>
        //                                         <p><span className="prefix">Height</span> <span className="primar">{convertedItem.height}</span></p>
        //                                         <a className="button"
        //                                            href={window.location.origin + '/assets/' + convertedItem.filename}
        //                                            download={convertedItem.filename}>Download</a>
        //                                     </div>
        //                                 </div>
        //                             );
        //                         })
        //                     }
        //                 </section>
        //                 {newSize}
        //             </div>
        //         </div>
        //         <div className="settings">
        //             <div className="head">
        //                 <div onClick={openPrimary}>
        //                     <ReactSVG
        //                         path="/images/close.svg"
        //                     />
        //                 </div>
        //                 <h3>Logo Settings</h3>
        //             </div>
        //             <div className="content">
        //                 <section className="text">
        //                     <input id="update-icon"
        //                            ref={input => this.inputElement = input}
        //                            onChange={this.updateIcon}
        //                            type="file"
        //                            accept="image/*"
        //                            name="icon"/>
        //                     <a className="button" onClick={emulateInputOnChange}>Update Logo File</a>
        //                 </section>
        //                 <section>
        //                     <div className="text">
        //                         <a className="button" onClick={deleteIcon}>Delete</a>
        //                     </div>
        //                 </section>
        //             </div>
        //         </div>
        //         <NotificationSystem ref="notificationSystem"/>
        //     </div>
        // );

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
        updateIconFile
    }, dispatch)
};

export default connect(state => state, dispatchToProps)(IconSidebar);