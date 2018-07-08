import React, {Component} from 'react';
import PropTypes from 'prop-types';
import CustomSizeDownload from '../CustomSizeDownload';

class PngDownloadArea extends Component {

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
            <div className="png-area">

                <CustomSizeDownload
                    defaultWidth={defaultWidth}
                    ratio={image.width_ratio}
                    downloadCustomSize={downloadCustomSize}
                    format="png"/>

            </div>
        );
    }
}

export default PngDownloadArea;