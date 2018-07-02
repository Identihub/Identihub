import React, {Component} from 'react';
import PropTypes from 'prop-types';
import CustomSizeDownload from '../CustomSizeDownload';

class JpgDownloadArea extends Component {

    static propTypes = {
        image: PropTypes.shape({
            id: PropTypes.number
        }),
        downloadCustomSize: PropTypes.func.isRequired,
        defaultWidth: PropTypes.number.isRequired
    };

    render() {

        const {image, defaultWidth, downloadCustomSize} = this.props;

        return (
            <div className="jpg-area">

                <CustomSizeDownload
                    defaultWidth={defaultWidth}
                    ratio={image.width_ratio}
                    downloadCustomSize={downloadCustomSize}
                    format="jpg"/>
            </div>
        );
    }
}

export default JpgDownloadArea;