import React, {Component} from 'react';
import PropTypes from 'prop-types';
import CopyToClipboard from 'react-copy-to-clipboard';

class SvgDownloadArea extends Component {

    static propTypes = {
        icon: PropTypes.shape({
            id: PropTypes.number
        }),
        addNotification: PropTypes.func.isRequired
    };

    render() {

        const {icon, addNotification} = this.props;

        let downloadBtn = "";
        if (icon.dont_use) {
            downloadBtn = <a className="btn-white disabled">
                <i className="fas fa-download"/>&nbsp;&nbsp; Download
            </a>;
        } else {
            downloadBtn =
                <a className="btn-white"
                   href={window.location.origin + '/assets/' + icon.filename}
                   download={icon.filename}>
                    <i className="fas fa-download"/>&nbsp;&nbsp; Download
                </a>;
        }

        return (
            <div className="svg-area">

                <div className="sidebar-section-url">
                    <div className="sidebar-little-title">EMBED</div>
                    <div className="url url-lighter">
                        <input type="text"
                               defaultValue={`${window.location.origin + '/assets/' + icon.filename}`}/>
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

                <div className="download-btn">
                    {downloadBtn}
                </div>

            </div>
        );
    }
}

export default SvgDownloadArea;