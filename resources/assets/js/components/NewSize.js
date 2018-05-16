import React, {Component} from 'react';
import PropTypes from 'prop-types';


export const roundNumber = (number) => {
    return Math.round(number);
};

class NewSize extends Component {

    constructor(props) {
        super(props);

        this.state = {
            opened: false,
            width: null,
            height: null
        };

        this.changeWidth = this.changeWidth.bind(this);
        this.changeHeight = this.changeHeight.bind(this);
        this.openComponent = this.openComponent.bind(this);
        this.closeComponent = this.closeComponent.bind(this);
    }

    componentWillReceiveProps(nextProps, nextState) {
        if ((this.state.width === null) && (nextProps.defaultWidth))
            this.setState((prevState, _) => {
                return {
                    width: nextProps.defaultWidth,
                    height: nextProps.defaultWidth / this.props.ratio
                }
            })
    }

    changeWidth(width) {
        this.setState((prevState, _) => {
            return {
                width: width,
                height: width / this.props.ratio
            }
        });
    }

    changeHeight(height) {
        this.setState((prevState, _) => {
            return {
                width: height * this.props.ratio,
                height: height
            }
        });
    }

    openComponent() {
        this.setState((prevState, _) => {
            return {
                opened: true
            };
        });
    }

    closeComponent() {
        this.setState((prevState, _) => {
            return {
                opened: false
            };
        });
    }

    render() {

        const changeWidth = this.changeWidth;
        const changeHeight = this.changeHeight;
        const closeComponent = this.closeComponent;
        const openComponent = this.openComponent;


        const {saveElement} = this.props;
        let {width, height, opened} = this.state;
        if ((width === null) && (this.props.defaultWidth)) {
            width = this.props.defaultWidth;
            height = width / this.props.ratio
        }

        console.log(roundNumber(height));

        // if ((!saveElement) || (!width))
        //     return (<div />);

        return (
            <section className="new-size">
                <div className="sidebar-section-img-info">
                    <div className="sidebar-image-info">
                        <div className="sidebar-little-title">WIDTH(px)</div>
                        <input type="number" className="info info-lighter" value={roundNumber(width)}
                               onChange={(e) => {
                                   changeWidth(e.target.value)
                               }} placeholder="Set width"/>
                    </div>
                    <i className="fas fa-lock lock"/>
                    <div className="sidebar-image-info">
                        <div className="sidebar-little-title">HEIGHT</div>
                        <input type="number" className="info info-lighter" value={roundNumber(height)}
                               onChange={(e) => {
                                   changeHeight(e.target.value)
                               }} placeholder="Set height"/>
                    </div>
                    <a className="add-size" onClick={() => {
                        saveElement(roundNumber(width), roundNumber(height));
                        closeComponent()
                    }}>ADD SIZE</a>
                </div>
            </section>
        );
    }

}

NewSize.propTypes = {
    defaultWidth: PropTypes.number,
    ratio: PropTypes.number
};

export default NewSize;