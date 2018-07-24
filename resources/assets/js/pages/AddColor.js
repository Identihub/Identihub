import React, {Component} from 'react';
import {connect} from 'react-redux';
import PropTypes from 'prop-types';
import {createColor} from '../reducers/Bridge/BridgeApiCalls';
import {getBridge} from '../reducers/Bridge/BridgeReducer';

const convert = require('color-convert');

class AddColor extends Component {

    constructor(props) {
        super(props);

        let bridge = JSON.parse(window.Laravel.bridge);

        this.state = {
            id: bridge.id,

            hex: 'FFFFFF',
            hexIsValid: true,

            r: 255,
            g: 255,
            b: 255,

            c: 0,
            m: 0,
            y: 0,
            k: 0
        };

        this.addColor = this.addColor.bind(this);
        this.handleRBG = this.handleRBG.bind(this);
        this.handleCMYK = this.handleCMYK.bind(this);
        this.handleHEX = this.handleHEX.bind(this);
        this.closeWindow = this.closeWindow.bind(this);
    }

    closeWindow() {
        this.props.history.goBack();
    }

    addColor(event) {
        const state = this.state;
        const rgb = state.r + " " + state.g + " " + state.b;
        const hex = state.hex;
        const cmyk = state.c + " " + state.m + " " + state.y + " " + state.k;
        if (state.hexIsValid) {
            this.props.dispatch(createColor(this.state.id, hex, rgb, cmyk));
            this.props.history.goBack();
        }
    }

    handleRBG(key, value) {
        let changes = {};

        if (value < 0 || value === "") {
            changes[key] = 0;
        } else if (value > 255) {
            changes[key] = 255;
        } else {
            changes[key] = value;
        }

        this.setState(changes);

        const cmyk = convert.rgb.cmyk(this.state.r, this.state.g, this.state.b);
        const hex = convert.rgb.hex(this.state.r, this.state.g, this.state.b);
        this.setState({
            c: cmyk[0],
            m: cmyk[1],
            y: cmyk[2],
            k: cmyk[3],
            hex: hex,
            hexIsValid: true
        });

    }

    handleCMYK(key, value) {
        let changes = {};

        if (value < 0 || value === "") {
            changes[key] = 0;
        } else if (value > 100) {
            changes[key] = 100;
        } else {
            changes[key] = value;
        }

        this.setState(changes);

        const rgb = convert.cmyk.rgb(this.state.c, this.state.m, this.state.y, this.state.k);
        const hex = convert.cmyk.hex(this.state.c, this.state.m, this.state.y, this.state.k);
        this.setState({
            r: rgb[0],
            g: rgb[1],
            b: rgb[2],
            hex: hex,
            hexIsValid: true
        });
    }

    handleHEX(element) {
        const value = element.target.value;
        const isValid = value.match("^([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$");
        if (isValid !== null) {
            const rgb = convert.hex.rgb(this.state.hex);
            const cmyk = convert.hex.cmyk(this.state.hex);
            this.setState({
                hex: value.toUpperCase(),
                hexIsValid: true,
                r: rgb[0],
                g: rgb[1],
                b: rgb[2],
                c: cmyk[0],
                m: cmyk[1],
                y: cmyk[2],
                k: cmyk[3]
            });
        } else {
            this.setState({
                hex: value.toUpperCase(),
                hexIsValid: false
            });
        }


    }

    render() {
        const that = this;
        const hexClassName = this.state.hexIsValid ? "tooltip" : "tooltip show";
        const buttonClassName = this.state.hexIsValid ? "button button-black" : "button button-white button-disabled";
        return (
            <div className="add-color">
                <span className="overlay" onClick={this.closeWindow}> </span>
                <div className="dialog-box">
                    <img className="close-window" onClick={this.closeWindow} src="/images/close.svg"/>
                    <div className="wrapper">
                        <div className="rgb">
                            <span>rgb( </span>
                            <input type="number" onChange={function (e) {
                                that.handleRBG("r", e.target.value)
                            }} value={this.state.r}/>
                            <span>, </span>
                            <input onChange={function (e) {
                                that.handleRBG('g', e.target.value)
                            }} type="number" value={this.state.g}/>
                            <span>, </span>
                            <input onChange={function (e) {
                                that.handleRBG('b', e.target.value)
                            }} type="number" value={this.state.b}/>
                            <span> )</span>
                        </div>
                        <div className="hex">
                            <span className={hexClassName}>Hex is not valid</span>
                            <span>#</span>
                            <input onChange={that.handleHEX} type="text" value={this.state.hex}/>
                        </div>
                        <div className="cmyk">
                            <span>cmyk( </span>
                            <input onChange={function (e) {
                                that.handleCMYK("c", e.target.value)
                            }} type="number" value={this.state.c}/>
                            <span>%, </span>
                            <input onChange={function (e) {
                                that.handleCMYK("m", e.target.value)
                            }} type="number" value={this.state.m}/>
                            <span>%, </span>
                            <input onChange={function (e) {
                                that.handleCMYK("y", e.target.value)
                            }} type="number" value={this.state.y}/>
                            <span>%, </span>
                            <input onChange={function (e) {
                                that.handleCMYK("k", e.target.value)
                            }} type="number" value={this.state.k}/>
                            <span>% )</span>
                        </div>
                        <a onClick={this.addColor} className={buttonClassName}>Add Color</a>
                    </div>
                </div>
            </div>
        );
    }
}

const mapStateToProps = (state, ownProps) => {
    return {
        bridge: getBridge(state, parseInt(ownProps.match.params.id))
    }
};

AddColor.propTypes = {
    dispatch: PropTypes.func.isRequired
};

export default connect(
    mapStateToProps
)(AddColor);