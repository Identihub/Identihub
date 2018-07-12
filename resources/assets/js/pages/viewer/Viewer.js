import React, {Component} from 'react';
import PropTypes from 'prop-types';
import {connect} from 'react-redux';
import {getSectionTypes, getSectionType} from '../../reducers/SectionType/SectionTypeReducer';
import ReactSVG from 'react-svg';
import FontSidebar from '../../components/font/FontSidebar';
import ColorSidebar from '../../components/color/ColorSidebar';
import IconSidebar from '../../components/icon/IconSidebar';
import ImageSidebar from '../../components/image/ImageSidebar';
import {isPublic, paramsChecker, sortWithSectionAndOrder} from '../../helpers';
import {slide as Menu} from 'react-burger-menu'
import {getBridge} from '../../selectors/BridgeSelector';
import {withRouter} from 'react-router-dom';
import SliderWrapper from "./SliderWrapper";

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
        }
    }

    componentDidMount() {
        this.updateWindowDimensions();
        window.addEventListener('resize', this.updateWindowDimensions);
    }

    componentWillUnmount() {
        window.removeEventListener('resize', this.updateWindowDimensions);
    }

    updateWindowDimensions = () => {
        this.setState({
            ...this.state,
            screenWidth: window.innerWidth
        });
    };

    componentWillReceiveProps(nextProps) {

        const orderedElements = this.getOrderedElements(nextProps, this.state.objectType);

        this.setState({
            ...this.state,
            orderedElements: orderedElements
        });
    }

    /**
     * Close page.
     */
    closePage = () => {
        const {bridge} = this.props;
        this.props.history.push('/project/' + bridge.id);
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

    onChangeElement = (element) => {
        const {objectType} = this.state;
        const {bridge} = this.props;

        if (!objectType || !bridge)
            return;

        alert('element new');

        this.setState((prevState, props) => {
            return {
                ...this.state,
                elementId: element.id
            }
        });

        let url = null;

        if (!isPublic()) {
            url = '/project/' + bridge.id + '/view/' + objectType + '/element/' + element.id;
        } else {
            url = '/view/' + objectType + '/element/' + element.id;
        }

        this.props.history.replace(url);
    };

    indexOfActiveElement = () => {
        const {elementId} = this.state;

        // TODO: Find index of active element.
    };

    /**
     * Render view.
     */
    render() {
        if (this.state === null)
            return (<div/>);

        const {orderedElements, screenWidth} = this.state;
        const {bridge, iconsSection, colorsSection, fontsSection, imagesSection} = this.props;

        if (!bridge || !iconsSection || !colorsSection || !fontsSection || !imagesSection || !orderedElements)
            return (<div/>);

        let sidebar = this.getSidebar();
        const viewerClassName = screenWidth > 900 ? 'viewer__desktop' : "viewer";

        const activeElementIndex = this.indexOfActiveElement();

        return (
            <div className="viewer-page" id="outter-container">
                <main className={viewerClassName} id="page-wrap">
                    <div onClick={this.closePage}>
                        <ReactSVG
                            path="/images/close.svg"
                            className="close"/>
                    </div>

                    <div className="slider-wrapper">
                        <SliderWrapper elements={orderedElements}
                                       elementType={this.state.objectType}
                                       activeElement={activeElementIndex}
                                       onChangeElement={this.onChangeElement}/>
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

const mapStateToProps = (state, ownProps) => {

    ownProps = paramsChecker(ownProps);
    const bridgeId = ownProps.match.params.id;

    return {
        bridge: getBridge(parseInt(bridgeId))(state),
        sectionTypes: getSectionTypes(state),
        iconsSection: getSectionType(state, "ICONS"),
        colorsSection: getSectionType(state, "COLORS"),
        fontsSection: getSectionType(state, "FONTS"),
        imagesSection: getSectionType(state, "IMAGES"),
    }
};

Viewer.propTypes = {
    dispatch: PropTypes.func.isRequired,
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

export default withRouter(connect(mapStateToProps)(Viewer));