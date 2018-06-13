import React, {Component} from 'react';
import PropTypes from 'prop-types';
import {connect} from 'react-redux';
import {bindActionCreators} from 'redux';
import CopyToClipboard from 'react-copy-to-clipboard';
import NotificationSystem from 'react-notification-system';
import {
    deleteImage,
    addImageConverted,
    updateImageFile,
    downloadImageConverted
} from '../../reducers/Bridge/BridgeApiCalls';
import {paramsChecker, isPublic} from '../../helpers';
import Spinner from '../../components/Spinner';
import CustomSizeDownload from "../CustomSizeDownload";


class ImageSidebar extends Component {
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
        this.deleteImage = this.deleteImage.bind(this);
        this.addNewConverted = this.addNewConverted.bind(this);
        this.emulateInputOnChange = this.emulateInputOnChange.bind(this);
        this.updateImage = this.updateImage.bind(this);
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

    deleteImage() {
        const {deleteImage, bridge, image, history} = this.props;
        if (deleteImage) {
            history.replace('/project/' + bridge.id);
            deleteImage(bridge.id, image.id);
        }
    }

    emulateInputOnChange(event) {
        this.inputElement.click();
    }

    updateImage(e) {
        const {updateImageFile, bridge, image} = this.props;
        const file = e.target.files[0];
        updateImageFile(bridge.id, image.id, file);
    }

    addNewConverted(width, height) {
        const {addImageConverted, bridge, image} = this.props;
        addImageConverted(bridge.id, image.id, parseInt(width), parseInt(height));
    }

    downloadCustomSize(width, height) {
        const {downloadImageConverted, bridge, image} = this.props;
        downloadImageConverted(bridge.id, image.id, parseInt(width), parseInt(height));
    }

    render() {
        const openSettings = this.openSettings;
        const openPrimary = this.openPrimary;
        const addNotification = this.addNotification;
        const deleteImage = this.deleteImage;
        const addNewConverted = this.addNewConverted;
        const emulateInputOnChange = this.emulateInputOnChange;
        const downloadCustomSize = this.downloadCustomSize;

        const isPub = isPublic();

        const {margin} = this.state;
        const marginStyle = "-" + margin + "px";

        const {image} = this.props;

        const lastConverted = image.converted[image.converted.length - 1];

        if (!image)
            return <div></div>;

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

                                <input id="update-icon"
                                       ref={input => this.inputElement = input}
                                       onChange={this.updateIcon}
                                       type="file"
                                       accept="image/*"
                                       name="icon"/>
                                <a className="button-outline-white settings-button"
                                   onClick={emulateInputOnChange}>UPDATE</a>

                                <a className="button-outline-delete settings-button button-left"
                                   onClick={deleteImage}>DELETE</a>
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
            ratio={this.props.image.width_ratio}
            downloadCustomSize={downloadCustomSize}/>);

        return (
            <div className="bm-item-list sidebar">
                <div className="admin-option sidebar-padding">
                    <div className="header">
                        <span>Use Image</span>
                    </div>
                </div>
                {adminOptions}
                <div className="sidebar-client">
                    <div className="sidebar-section">
                        <div className="title">
                            <span>
                                SOURCE FILE
                            </span>
                            <a className="download-icon"
                               href={window.location.origin + '/assets/' + image.filename}
                               download={image.filename}>
                                <i className="fas fa-download"/>
                            </a>
                        </div>
                        <div className="sidebar-section-url">
                            <div className="sidebar-little-title">EMBED</div>
                            <div className="url url-lighter">
                                <input type="text"
                                       defaultValue={window.location.origin + '/assets/' + image.filename}/>
                                <span id="copy-to-clip">
                                    <CopyToClipboard
                                        text={window.location.origin + '/assets/' + image.filename}
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
                                    CONVERTED FILES
                                </span>
                        </div>
                    </div>
                    {
                        image.converted.map((convertedItem, index) => {
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

                                                        <span id="icon"><i className="far fa-copy"/></span>
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
        );

    }
}

ImageSidebar.propTypes = {
    image: PropTypes.shape({
        id: PropTypes.number
    })
};

const dispatchToProps = (dispatch) => {
    return bindActionCreators({
        deleteImage,
        addImageConverted,
        updateImageFile,
        downloadImageConverted
    }, dispatch)
};

export default connect(state => state, dispatchToProps)(ImageSidebar);
