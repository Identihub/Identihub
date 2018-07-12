import React, {Component} from "react";
import Slider from "react-slick";
import SliderItem from "./SliderItem";
import ReactSVG from 'react-svg';
import PropTypes from "prop-types";

function NextArrow(props) {
    const {className, style, onNextArrow} = props;
    return (
        <div
            className={className}
            style={{...style}}
            onClick={onNextArrow}>
            <ReactSVG
                path="/images/forward.svg"
                className="backward"/>
            <span className="sr-only">Previous</span>
        </div>
    );
}

function PreviousArrow(props) {
    const {className, style, onPreviousArrow} = props;
    return (
        <div
            className={className}
            style={{...style}}
            onClick={onPreviousArrow}>
            <ReactSVG
                path="/images/backward.svg"
                className="forward"/>
            <span className="sr-only">Next</span>
        </div>
    );
}

class SliderWrapper extends Component {

    static propTypes = {
        elements: PropTypes.array.isRequired,
        elementType: PropTypes.string.isRequired,
        activeElementIndex: PropTypes.number,
        onChangeElement: PropTypes.func.isRequired
    };

    static defaultProps = {
        activeElementIndex: 0,
    };

    onNextArrow = () => {
        const {elements, activeElementIndex} = this.props;

        if (elements[activeElementIndex + 1]) {
            this.slider.slickNext();
            const element = elements[activeElementIndex + 1];

            this.onChangeElement(element);
        }
    };

    onPreviousArrow = () => {
        this.slider.slickPrev();
    };

    render() {
        const settings = {
            dots: true,
            infinite: true,
            speed: 500,
            slidesToShow: 1,
            slidesToScroll: 1,
            adaptiveHeight: true,
            nextArrow: <NextArrow onNextArrow={this.onNextArrow}/>,
            prevArrow: <PreviousArrow onPreviousArrow={this.onPreviousArrow}/>,
            initialSlide: this.props.activeElementIndex
        };

        let items = this.props.elements.map((element, index) => <SliderItem key={index} element={element}
                                                                            elementType={this.props.elementType}/>);

        return (
            <Slider ref={slider => (this.slider = slider)} {...settings}>
                {items}
            </Slider>
        );
    }
}

export default SliderWrapper;