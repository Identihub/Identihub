import React, {Component} from 'react';
import {connect} from 'react-redux';
import PropTypes from 'prop-types';
import DebounceInput from 'react-debounce-input';
import {createWriting} from '../reducers/Bridge/BridgeApiCalls';

class AddWriting extends Component {
    constructor(props) {
        super(props);

        let bridge = JSON.parse(window.Laravel.bridge);

        this.state = {
            id: bridge.id,

            titleValue: '',
            descriptionValue: '',
        };
    }

    createWriting = () => {
        const variants = this.state.selectedVariants;
        const fontFamilyId = this.state.selectedFontFamily.id;
        const bridgeId = this.state.id;

        this.props.dispatch(createWriting(bridgeId, title, description));
        this.closeWindow();
    };

    closeWindow = () => {
        this.props.history.goBack();
    };

    render() {

        const searchFontFamily = this.state.searchFontFamily;
        const searchFontFamilyFunction = this.searchFontFamily;
        const closeWindowFunction = this.closeWindow;
        const fonts = this.state.fonts;
        const selectFontFamilyFunction = this.selectFontFamily;
        const selectedFontFamily = this.state.selectedFontFamily;
        const getSelectedFontFamily = this.getSelectedFontFamily;
        const toggleVariant = this.toggleVariant;
        const buttonClassName = this.state.selectedVariants.length === 0 ? "button button-white button-disabled" : "button button-black";
        const createFont = this.createWriting;

        return (
            <div className="add-font">
                <span onClick={closeWindowFunction} className="overlay"> </span>
                <div className="dialog-box">
                    <img src="/images/close.svg" className="close-window" onClick={closeWindowFunction}/>
                    <div className="wrapper">
                        <div className="input-wrapper">
                            <DebounceInput value={searchFontFamily}
                                           className="input"
                                           placeholder="Font Family"
                                           onChange={searchFontFamilyFunction}/>
                        </div>
                        {
                            selectedFontFamily ?
                                <div className="variant-list">
                                    <VariantList toggleVariant={toggleVariant}
                                                 variants={getSelectedFontFamily().variants}/>
                                    <a onClick={createFont} className={buttonClassName}> Add Fonts </a>
                                </div>
                                :
                                <div className="font-list">
                                    <FontList fonts={fonts} selectItem={selectFontFamilyFunction}/>
                                </div>
                        }
                    </div>
                </div>
            </div>
        )
    }
}

const mapStateToProps = (state, ownProps) => {
    return {
        fonts: getFonts(state)
    }
};

AddWriting.propTypes = {
    dispatch: PropTypes.func.isRequired
};

export default connect(
    mapStateToProps
)(AddWriting);