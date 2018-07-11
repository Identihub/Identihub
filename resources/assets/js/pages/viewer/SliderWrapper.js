import React, {Component} from "react";
import Slider from "react-slick";
import SliderItem from "./SliderItem";
import ReactSVG from 'react-svg';

function NextArrow(props) {
    const {className, style, onClick} = props;
    return (
        <div
            className={className}
            style={{...style}}
            onClick={onClick}>
            <ReactSVG
                path="/images/forward.svg"
                className="backward"/>
            <span className="sr-only">Previous</span>
        </div>
    );
}

function PreviousArrow(props) {
    const {className, style, onClick} = props;
    return (
        <div
            className={className}
            style={{...style}}
            onClick={onClick}>
            <ReactSVG
                path="/images/backward.svg"
                className="forward"/>
            <span className="sr-only">Next</span>
        </div>
    );
}

class SliderWrapper extends Component {

    render() {
        var settings = {
            dots: true,
            infinite: true,
            speed: 500,
            slidesToShow: 1,
            slidesToScroll: 1,
            nextArrow: <NextArrow/>,
            prevArrow: <PreviousArrow/>
        };

        return (
            <Slider {...settings}>
                <SliderItem index={1}/>
                <SliderItem index={2}/>
                <SliderItem index={3}/>
                <SliderItem index={4}/>
                <SliderItem index={5}/>
                <SliderItem index={6}/>
            </Slider>
        );
    }
}

export default SliderWrapper;