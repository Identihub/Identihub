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
import CustomSizeDownload from "../CustomSizeDownload";
import AdminOptions from "./admin/AdminOptions";
import PngDownloadArea from "./PngDownloadArea";
import JpgDownloadArea from "./JpgDownloadArea";


class ImageSidebar extends Component {

    state = {
        margin: 0,
        image_format: 'png'
    };

    componentDidMount() {
        this.notificationSystem = this.refs.notificationSystem;
    }

    addNotification = () => {
        this.notificationSystem.addNotification({
            message: 'Link copied to clipboard ',
            level: 'success'
        });
    };

    openSettings = () => {
        this.setState((prevState, _) => {
            return {margin: 300}
        })
    };

    openPrimary = () => {
        this.setState((prevState, _) => {
            return {margin: 0}
        })
    };

    deleteImage = () => {
        const {deleteImage, bridge, image, history} = this.props;
        if (deleteImage) {
            history.replace('/project/' + bridge.id);
            deleteImage(bridge.id, image.id);
        }
    };

    emulateInputOnChange = (event) => {
        this.inputElement.click();
    };

    updateImage = (e) => {
        const {updateImageFile, bridge, image} = this.props;
        const file = e.target.files[0];
        updateImageFile(bridge.id, image.id, file);
    };

    addNewConverted = (width, height) => {
        const {addImageConverted, bridge, image} = this.props;
        addImageConverted(bridge.id, image.id, parseInt(width), parseInt(height));
    };

    downloadCustomSize = (width, height) => {
        const {downloadImageConverted, bridge, image} = this.props;
        downloadImageConverted(bridge.id, image.id, parseInt(width), parseInt(height));
    };

    getDownloadArea = () => {

        const {image} = this.props;

        const lastConverted = image.converted[image.converted.length - 1];

        switch (this.state.icon_format) {
            case 'png':
                return (<PngDownloadArea image={image}
                                         downloadCustomSize={this.downloadCustomSize}
                                         defaultWidth={lastConverted.width}/>);
            case 'jpg':
                return (<JpgDownloadArea image={image}
                                         downloadCustomSize={this.downloadCustomSize}
                                         defaultWidth={lastConverted.width}/>);
        }
    };

    changeDownloadFormat = (format) => {
        this.setState({
            ...this.state,
            image_format: format
        });
    };

    getFormatButtons = () => {
        return ['png', 'jpg'].map((format, index) => {

            const isActive = (format === this.state.image_format) ? 'active' : '';

            return <a className={`btn-outline-white format-btn ${isActive}`}
                      key={index}
                      onClick={() => {
                          this.changeDownloadFormat(format)
                      }}>{format.toUpperCase()}</a>
        });
    };

    render() {
        const openSettings = this.openSettings;
        const openPrimary = this.openPrimary;
        const addNotification = this.addNotification;
        const deleteImage = this.deleteImage;
        const addNewConverted = this.addNewConverted;
        const emulateInputOnChange = this.emulateInputOnChange;
        const downloadCustomSize = this.downloadCustomSize;

        const {margin} = this.state;
        const marginStyle = "-" + margin + "px";

        const {image} = this.props;

        const lastConverted = image.converted[image.converted.length - 1];

        if (!image)
            return <div></div>;

        const formatButtons = this.getFormatButtons();

        let customSizeDownload = null;

        let adminOptions = null;
        if (!isPublic()) {
            adminOptions = (<AdminOptions updateImage={this.updateImage()} deleteImage={this.deleteImage()}
                                          image={image}/>);

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
