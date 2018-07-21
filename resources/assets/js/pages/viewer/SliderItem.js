import React, {Component} from 'react';
import PropTypes from "prop-types";

class SliderItem extends Component {

    static propTypes = {
        element: PropTypes.shape({
            id: PropTypes.number.isRequired
        }).isRequired,
        elementType: PropTypes.string.isRequired
    };

    getContentOfElement = () => {
        const {elementType, element} = this.props;

        switch (elementType) {
            case 'icon':
                const iconStyle = element.bg_color ? {backgroundColor: element.bg_color} : {};

                return (<div className="icon-item" style={iconStyle}>
                    <img src={'/assets/' + element.filename_png}/>
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

export default SliderItem;