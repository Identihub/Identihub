import React, {Component} from 'react';
import {connect} from 'react-redux';
import PropTypes from 'prop-types';
import {getFonts} from '../reducers/Extra/ExtraReducer';
import {searchFont} from '../reducers/Bridge/BridgeApiCalls';
import DebounceInput from 'react-debounce-input';
import {addFonts} from '../reducers/Extra/ExtraActions';
import FontList from '../components/font/FontList';
import VariantList from '../components/font/VariantList';
import {createFont} from '../reducers/Bridge/BridgeApiCalls';


class AddFont extends Component {
    constructor(props) {
        super(props);

        this.state = {
            id: props.match.params.id,
            isSearching: false,

            searchFontFamily: "",
            selectedFontFamily: null,

            fonts: [],

            selectedVariants: [],
        };

        this.searchFontFamily = this.searchFontFamily.bind(this);
        this.closeWindow = this.closeWindow.bind(this);
        this.selectFontFamily = this.selectFontFamily.bind(this);
        this.getSelectedFontFamily = this.getSelectedFontFamily.bind(this);
        this.toggleVariant = this.toggleVariant.bind(this);
        this.createFont = this.createFont.bind(this);
    }

    componentWillReceiveProps(nextProps) {
        this.updateFonts(nextProps)
    }

    updateFonts(nextProps) {
        if (nextProps.fonts) {
            this.setState({
                fonts: nextProps.fonts
            });
        }
    }

    searchFontFamily(value) {
        value = value.target.value;
        this.setState({
            searchFontFamily: value,
            selectedFontFamily: null,
            selectedVariants: []
        });
        if (value.length < 4) {
            this.props.dispatch(addFonts([]));
        } else {
            this.props.dispatch(searchFont(value));
        }

    }

    selectFontFamily(fontFamilyId) {
        const fonts = this.state.fonts;
        this.setState({
            selectedFontFamily: fontFamilyId,
            searchFontFamily: fonts.find(font => (
                font.id === fontFamilyId
            )).family
        });
    }

    getSelectedFontFamily() {
        const selectedFontFamilyId = this.state.selectedFontFamily;
        const fonts = this.state.fonts;
        return fonts.find((item) => {
            return item.id === selectedFontFamilyId
        });
    }

    createFont() {
        const variants = this.state.selectedVariants;
        const fontFamilyId = this.state.selectedFontFamily.id;
        const bridgeId = this.state.id;

        if (variants.length > 0) {
            variants.map((variant) => {
                this.props.dispatch(createFont(bridgeId, fontFamilyId, variant.id))
            });
            this.closeWindow();
        }
    }

    toggleVariant(variant) {
        const variants = this.state.selectedVariants;
        const isVariantPresent = variants.find((variantFromState) => {
            return variant.id === variantFromState.id;
        });

        if (isVariantPresent) {
            const filteredVariants = variants.filter((value, key) => {
                return value.id !== variant.id;
            });

            this.setState({
                selectedVariants: filteredVariants
            });

        } else {
            variants.push(variant);
            this.setState({
                selectedVariants: variants
            });
        }
    }

    closeWindow() {
        this.props.history.goBack();
    }

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
        const createFont = this.createFont;

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

AddFont.propTypes = {
    dispatch: PropTypes.func.isRequired
};

export default connect(
    mapStateToProps
)(AddFont);