import React, {Component} from 'react';
import PropTypes from 'prop-types';


export const roundNumber = (number) => {
    return Math.round(number);
};

class CustomSizeDownload extends Component {

    static propTypes = {
        ratio: PropTypes.number,
        defaultWidth: PropTypes.number,
        format: PropTypes.string,
        downloadCustomSize: PropTypes.func.isRequired,
        disabledDownload: PropTypes.bool
    };

    static defaultProps = {
        format: "png",
        disabledDownload: false
    };

    state = {
        width: null,
        height: null
    };

    componentWillReceiveProps(nextProps, nextState) {
        if ((this.state.width === null) && (nextProps.defaultWidth))
            this.setState((prevState, _) => {
                return {
                    width: nextProps.defaultWidth,
                    height: nextProps.defaultWidth / this.props.ratio
                }
            })
    }

    changeWidth = (width) => {
        this.setState((prevState, _) => {
            return {
                width: width,
                height: width / this.props.ratio
            }
        });
    };

    changeHeight = (height) => {
        this.setState((prevState, _) => {
            return {
                width: height * this.props.ratio,
                height: height
            }
        });
    };

    render() {
        const {downloadCustomSize, format, disabledDownload} = this.props;

        let {width, height} = this.state;

        if ((width === null) && (this.props.defaultWidth)) {
            width = this.props.defaultWidth;
            height = width / this.props.ratio
        }

        if ((!downloadCustomSize) || (!width))
            return (<div/>);

        let downloadBtn = "";
        if (disabledDownload) {
            downloadBtn = <a className="btn-white disabled">
                <i className="fas fa-download"/>&nbsp;&nbsp; Download
            </a>;
        } else {
            downloadBtn = <a className="btn-white"
                             onClick={() => {
                                 downloadCustomSize(roundNumber(width), roundNumber(height), format);
                             }}>
                <i className="fas fa-download"/>&nbsp;&nbsp; Download
            </a>;
        }

        return (

            <div>

                <section className="custom-size">
                    <div className="sidebar-section-img-info">
                        <div className="sidebar-image-info">
                            <div className="sidebar-little-title">WIDTH(px)</div>
                            <input type="number" className="info info-lighter" placeholder="Set width"
                                   value={roundNumber(width)}
                                   onChange={(e) => {
                                       this.changeWidth(e.target.value)
                                   }}/>
                        </div>
                        <i className="fas fa-lock lock"/>
                        <div className="sidebar-image-info">
                            <div className="sidebar-little-title">HEIGHT(px)</div>
                            <input type="number" className="info info-lighter" placeholder="Set height"
                                   value={roundNumber(height)}
                                   onChange={(e) => {
                                       this.changeHeight(e.target.value)
                                   }}/>
                        </div>
                    </div>

                </section>


                <div className="download-btn">
                    {downloadBtn}
                </div>
            </div>
        );
    }
}

export default CustomSizeDownload;