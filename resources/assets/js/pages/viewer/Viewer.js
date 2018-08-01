import React, {Component} from 'react';
import PropTypes from 'prop-types';
import {connect} from 'react-redux';
import {getSectionTypes, getSectionType} from '../../reducers/SectionType/SectionTypeReducer';
import ReactSVG from 'react-svg';
import FontSidebar from '../../components/font/FontSidebar';
import ColorSidebar from '../../components/color/ColorSidebar';
import IconSidebar from '../../components/icon/IconSidebar';
import ImageSidebar from '../../components/image/ImageSidebar';
import {sortWithSectionAndOrder} from '../../helpers';
import {slide as Menu} from 'react-burger-menu'
import {getBridge} from '../../selectors/BridgeSelector';
import {withRouter} from 'react-router-dom';
import SliderWrapper from "./SliderWrapper";
import {bindActionCreators} from "redux";
import {setDontUseIndicator} from "../../reducers/Extra/ExtraActions";

class Viewer extends Component {

    constructor(props) {
        super(props);

        const objectType = this.props.match.params.objectType;
        const elementId = this.props.match.params.elementId;

        const orderedElements = this.getOrderedElements(this.props, objectType);

        this.state = {
            objectType: objectType,
            elementId: elementId,
            orderedElements: orderedElements,
            screenWidth: null,
            dontUseIndicator: false
        }
    }

    componentDidMount() {
        this.updateWindowDimensions();

        const {activeElement} = this.activeElement();
        this.setState({
            ...this.state,
            dontUseIndicator: activeElement.dont_use
        });

        window.addEventListener('resize', this.updateWindowDimensions);
        window.addEventListener("keydown", this.onEscKeyDown, false);
    }

    componentWillUnmount() {
        window.removeEventListener('resize', this.updateWindowDimensions);
        window.removeEventListener("keydown", this.onEscKeyDown, false);
    }

    componentWillReceiveProps(nextProps) {

        const orderedElements = this.getOrderedElements(nextProps, this.state.objectType);
        const elementId = nextProps.match.params.elementId;

        this.setState({
            ...this.state,
            orderedElements: orderedElements,
            elementId: elementId
        });
    }

    updateWindowDimensions = () => {
        this.setState({
            ...this.state,
            screenWidth: window.innerWidth
        });
    };

    /**
     * Close page.
     */
    closePage = () => {
        const {bridge} = this.props;
        this.props.history.push('/');
    };

    /**
     * Get ordered elements.
     */
    getOrderedElements = (props, objectType) => {
        const {bridge, iconsSection, colorsSection, fontsSection, imagesSection} = props;

        if (!bridge || !iconsSection || !colorsSection || !fontsSection || !imagesSection || !objectType)
            return null;

        let elements = null;
        let elementsSection = null;

        switch (objectType) {
            case "icon":
                elements = bridge.icons;
                elementsSection = iconsSection;
                break;
            case "color":
                elements = bridge.colors;
                elementsSection = colorsSection;
                break;
            case "font":
                elements = bridge.fonts;
                elementsSection = fontsSection;
                break;
            case 'image':
                elements = bridge.images;
                elementsSection = imagesSection;
                break;
            default:
                return;
        }

        return sortWithSectionAndOrder(elements, bridge.sections, elementsSection);
    };

    /**
     * Get sidebar component based on object type.
     */
    getSidebar = () => {

        const {objectType, orderedElements, elementId} = this.state;
        const {bridge} = this.props;

        switch (objectType) {
            case 'icon':
                let icon = orderedElements.find(function (item) {
                    return item.id == elementId;
                });
                return <IconSidebar bridge={bridge} icon={icon} history={this.props.history}/>;

            case 'image':
                let image = orderedElements.find(function (item) {
                    return item.id == elementId;
                });
                return <ImageSidebar bridge={bridge} image={image} history={this.props.history}/>;

            case 'color':
                let color = orderedElements.find(function (item) {
                    return item.id == elementId;
                });
                return <ColorSidebar bridge={bridge} color={color} history={this.props.history}/>

            case 'font':
                let font = orderedElements.find(function (item) {
                    return item.id == elementId;
                });
                return <FontSidebar bridge={bridge} font={font} history={this.props.history}/>;

            default:
                break;
        }
    };

    onElementChange = (element) => {
        const {objectType} = this.state;
        const {bridge, setDontUseIndicator} = this.props;

        if (!objectType || !bridge)
            return;

        const url = '/view/' + objectType + '/element/' + element.id;

        this.setState({
            ...this.state,
            dontUseIndicator: element.dont_use
        });

        return this.props.history.push(url);
    };

    activeElement = () => {
        const {elementId, orderedElements} = this.state;

        let activeIndex = null;
        let activeElement = null;

        orderedElements.forEach(function (element, index) {
            if (element.id == elementId) {
                activeIndex = index;
                activeElement = element;
            }
        });

        return {activeIndex, activeElement};
    };

    onEscKeyDown = (event) => {
        const key = event.keyCode;

        if (key === 27) {
            this.closePage();
        }
    };

    shouldComponentUpdate(nextProps, nextState) {
        if (this.state.elementId !== nextProps.elementId) {
            return true;
        }
    }

    /**
     * Render view.
     */
    render() {
        if (this.state === null)
            return (<div/>);

        const {orderedElements, screenWidth, elementId, dontUseIndicator} = this.state;
        const {bridge, iconsSection, colorsSection, fontsSection, imagesSection} = this.props;

        if (!bridge || !iconsSection || !colorsSection || !fontsSection || !imagesSection || !orderedElements)
            return (<div/>);

        let sidebar = this.getSidebar();
        const viewerClassName = screenWidth > 900 ? 'viewer__desktop' : "viewer";

        const {activeIndex, activeElement} = this.activeElement();

        let dont_use_indicator = "";
        if (dontUseIndicator) {
            dont_use_indicator = <div className="dont-use-indicator">
                <span className="times">&times;</span>&nbsp;&nbsp;&nbsp;<span>Do not use</span>
            </div>;
        }


        return (
            <div className="viewer-page" id="outter-container">
                <main className={viewerClassName} id="page-wrap">
                    <div onClick={this.closePage}>
                        <ReactSVG
                            path="/images/close.svg"
                            className="close"/>
                    </div>

                    {dont_use_indicator}

                    <div className="slider-wrapper">
                        <SliderWrapper elements={orderedElements}
                                       elementType={this.state.objectType}
                                       activeElementIndex={activeIndex}
                                       activeElement={activeElement}
                                       onElementChange={this.onElementChange}/>
                    </div>
                </main>

                {
                    screenWidth > 900
                        ? <div className="viewer-sidebar__desktop">{sidebar}</div>
                        : <Menu
                            left
                            noOverlay
                            width={320}
                            className={"viewer-sidebar"}
                            pageWrapId={"page-wrap"}
                            outerContainerId={"outter-container"}
                            customBurgerIcon={<ReactSVG path="/images/hamburger.svg" className="open-menu"/>}
                            customCrossIcon={<span className="close-menu"><i className="fas fa-bars"/></span>}>

                            {sidebar}

                        </Menu>
                }
            </div>
        );
    }
}

Viewer.propTypes = {
    bridge: PropTypes.shape({
        id: PropTypes.number.isRequired
    }),
    sectionTypes: PropTypes.array,
    iconsSection: PropTypes.shape({
        id: PropTypes.number
    }),
    colorsSection: PropTypes.shape({
        id: PropTypes.number
    }),
    fontsSection: PropTypes.shape({
        id: PropTypes.number
    })
};

const mapStateToProps = (state, ownProps) => {

    let bridge = JSON.parse(window.Laravel.bridge);

    return {
        bridge: getBridge(parseInt(bridge.id))(state),
        sectionTypes: getSectionTypes(state),
        iconsSection: getSectionType(state, "ICONS"),
        colorsSection: getSectionType(state, "COLORS"),
        fontsSection: getSectionType(state, "FONTS"),
        imagesSection: getSectionType(state, "IMAGES"),
        dont_use_indicator: state.extras.dont_use_indicator
    }
};

const mapDispatchToProps = (dispatch) => {
    return bindActionCreators({
        setDontUseIndicator,
    }, dispatch)
};

export default withRouter(connect(mapStateToProps, mapDispatchToProps)(Viewer));