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
        onElementChange: PropTypes.func.isRequired,
    };

    static defaultProps = {
        activeElementIndex: 0,
    };

    componentDidMount() {
        window.addEventListener("keydown", this.onKeyDown, false);
    }

    componentWillUnmount() {
        window.removeEventListener("keydown", this.onKeyDown, false);
    }

    /**
     * Check if has next element and change page if yes.
     */
    onNextArrow = () => {
        const {elements, activeElementIndex} = this.props;

        if (elements[activeElementIndex + 1]) {
            this.slider.slickNext();
        }
    };

    /**
     * Check if has previous element and change page if yes.
     */
    onPreviousArrow = () => {
        const {elements, activeElementIndex} = this.props;

        if (elements[activeElementIndex - 1]) {
            this.slider.slickPrev();
        }
    };

    /**
     * Update element on slide change.
     */
    onSlideChange = (currentIndex) => {
        const {elements, onElementChange} = this.props;

        const element = elements[currentIndex];
        return onElementChange(element);
    };

    /**
     * Move slider items via keyboard, forward and backward keys.
     */
    onKeyDown = (event) => {
        const key = event.keyCode;

        switch (key) {
            case 37: {
                this.onPreviousArrow();
                break;
            }
            case 39: {
                this.onNextArrow();
                break;
            }
            default:
                break;
        }
    };

    render() {
        const settings = {
            dots: true,
            infinite: false,
            speed: 500,
            slidesToShow: 1,
            slidesToScroll: 1,
            adaptiveHeight: true,
            lazyLoad: true,
            initialSlide: this.props.activeElementIndex,
            nextArrow: <NextArrow onNextArrow={this.onNextArrow}/>,
            prevArrow: <PreviousArrow onPreviousArrow={this.onPreviousArrow}/>,
            afterChange: current => this.onSlideChange(current)
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