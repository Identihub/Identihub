import React, {Component} from 'react';
import PropTypes from "prop-types";
import {connect} from "react-redux";

class SliderItem extends Component {

    static propTypes = {
        element: PropTypes.shape({
            id: PropTypes.number.isRequired
        }).isRequired,
        elementType: PropTypes.string.isRequired
    };

    getContentOfElement = () => {
        const {elementType, element} = this.props;

        let randomId = Math.floor(Math.random() * 1000);

        switch (elementType) {
            case 'icon':
                const iconStyle = element.bg_color ? {backgroundColor: element.bg_color} : {};

                let imgAsset = `/assets/${element.filename_png}`;
                if (this.props.icon_updated && this.props.icon_updated === element.id) {
                    let randomId = Math.floor(Math.random() * 1000);
                    imgAsset = `/assets/${element.filename_png}?id=${randomId}`;
                }

                return (<div className="icon-item" style={iconStyle}>
                    <img src={imgAsset}/>
                </div>);

            case 'image':
                return (<div className="image-item">
                    <img className="image-viewer" src={'/assets/' + element.filename}/>
                </div>);

            case 'color':
                return (<div className="color-item">
                    <div className="color" style={{backgroundColor: "#" + element.hex}}/>
                </div>);

            case 'font':
                return (<div className="font-item">
                    <img className="font" src={'/fonts/' + element.variant.image_link}/>
                </div>);

            default:
                return <div/>;
        }

    };

    render() {
        const content = this.getContentOfElement();

        return (
            <div className="slider-item">
                {content}
            </div>
        );
    }
}

const mapStateToProps = (state, ownProps) => {
    return {
        icon_updated: state.extras.icon_updated,
    }
};

export default connect(mapStateToProps)(SliderItem);