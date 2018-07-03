import React, {Component} from 'react';
import PropTypes from 'prop-types';
import {connect} from 'react-redux';
import {bindActionCreators} from 'redux';
import {
    deleteImage,
    updateImageFile,
    downloadImageConverted
} from '../../reducers/Bridge/BridgeApiCalls';
import {isPublic} from '../../helpers';
import AdminOptions from "./admin/AdminOptions";
import PngDownloadArea from "./PngDownloadArea";
import JpgDownloadArea from "./JpgDownloadArea";


class ImageSidebar extends Component {

    state = {
        image_format: 'png'
    };

    deleteImage = () => {
        const {deleteImage, bridge, image, history} = this.props;
        if (deleteImage) {
            history.replace('/project/' + bridge.id);
            deleteImage(bridge.id, image.id);
        }
    };

    updateImage = (event) => {
        const {updateImageFile, bridge, image} = this.props;
        const file = event.target.files[0];
        updateImageFile(bridge.id, image.id, file);
    };

    downloadCustomSize = (width, height, format) => {
        const {downloadImageConverted, bridge, image} = this.props;
        downloadImageConverted(bridge.id, image.id, parseInt(width), parseInt(height), format);
    };

    getDownloadArea = () => {

        const {image} = this.props;

        const lastConverted = image.converted[image.converted.length - 1];

        switch (this.state.image_format) {
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
        const {image} = this.props;

        const lastConverted = image.converted[image.converted.length - 1];

        if (!image)
            return <div/>;

        const formatButtons = this.getFormatButtons();
        const downloadAreaComponent = this.getDownloadArea();

        let adminOptions = null;
        if (!isPublic()) {
            adminOptions = (
                <AdminOptions updateImage={this.updateImage} deleteImage={this.deleteImage} image={image}/>);
        }

        return (
            <div className="sidebar">

                <div className="bm-item-list ">

                    <div className="admin-option sidebar-padding">
                        <div className="header">
                            <span>Use Image</span>
                        </div>
                    </div>

                    {adminOptions}

                    <div id="download-section">
                        <div className="tab-section">

                            {formatButtons}

                        </div>

                        {downloadAreaComponent}

                    </div>

                </div>

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
        updateImageFile,
        downloadImageConverted
    }, dispatch)
};

export default connect(state => state, dispatchToProps)(ImageSidebar);
