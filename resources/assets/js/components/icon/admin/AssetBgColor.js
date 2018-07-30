import React, {Component} from 'react';
import {PhotoshopPicker} from 'react-color';
import PropTypes from 'prop-types';

class AssetBgColor extends Component {

    static propTypes = {
        onBgColorChange: PropTypes.func.isRequired,
        selectedColor: PropTypes.string
    };

    state = {
        displayColorPicker: false,
        selectedColor: '#ffffff'
    };

    componentWillMount() {
        if (this.props.selectedColor) {
            this.setState({selectedColor: this.props.selectedColor});
        } else {
            this.setState({selectedColor: '#ffffff'});
        }
    }

    componentWillReceiveProps(nextProps) {
        if (nextProps.selectedColor) {
            this.setState({selectedColor: nextProps.selectedColor});
        } else {
            this.setState({selectedColor: '#ffffff'});
        }
    }

    handleFocus = () => {
        this.setState({displayColorPicker: true});
    };

    handleClose = () => {
        this.setState({displayColorPicker: false});
        this.props.onBgColorChange(this.state.selectedColor);
    };

    handleChange = (color) => {
        this.setState({selectedColor: color.hex});
    };

    setWhiteColor = () => {
        this.setState({selectedColor: '#ffffff'});
        this.props.onBgColorChange('#ffffff');
    };

    setBlackColor = () => {
        this.setState({selectedColor: '#000000'});
        this.props.onBgColorChange('#000000');
    };

    render() {

        const {selectedColor} = this.state;
        const colorValue = selectedColor.substr(1).toUpperCase();

        const previewStyle = {
            backgroundColor: selectedColor,
        };

        return (
            <div className="asset-bg-color">
                <span>Background</span>

                <div className="color-settings">
                    <div className="default-colors">
                        <div className="default-color white" onClick={this.setWhiteColor}></div>
                        <div className="default-color black" onClick={this.setBlackColor}></div>
                    </div>
                    <div className="color-picker">
                        <input type="text" className="input-picker"
                               onFocus={this.handleFocus} value={colorValue} readOnly={true}/>

                        <div className="preview-color" onClick={this.handleFocus} style={previewStyle}></div>

                        {this.state.displayColorPicker ? <div className="popover">
                            <div className="cover" onClick={this.handleClose}/>
                            <PhotoshopPicker color={selectedColor} onChange={this.handleChange}/>
                        </div> : null}
                    </div>
                </div>
            </div>);
    }
}

export default AssetBgColor;