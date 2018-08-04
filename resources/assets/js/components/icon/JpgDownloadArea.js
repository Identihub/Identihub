import React, {Component} from 'react';
import PropTypes from 'prop-types';
import CustomSizeDownload from '../CustomSizeDownload';

class JpgDownloadArea extends Component {

    static propTypes = {
        icon: PropTypes.shape({
            id: PropTypes.number
        }),
        downloadCustomSize: PropTypes.func.isRequired,
        defaultWidth: PropTypes.number.isRequired
    };

    render() {

        const {icon, defaultWidth, downloadCustomSize} = this.props;

        return (
            <div className="jpg-area">

                <CustomSizeDownload
                    defaultWidth={defaultWidth}
                    ratio={icon.width_ratio}
                    downloadCustomSize={downloadCustomSize}
                    format="jpg"
                    disabledDownload={!!icon.dont_use}/>

            </div>
        );
    }
}

export default JpgDownloadArea;