import React, {Component} from 'react';
import PropTypes from 'prop-types';
import {connect} from 'react-redux';
import {getSectionTypes, getSectionType} from '../../reducers/SectionType/SectionTypeReducer';
import ReactSVG from 'react-svg';
import FontSidebar from '../../components/font/FontSidebar';
import ColorSidebar from '../../components/color/ColorSidebar';
import IconSidebar from '../../components/icon/IconSidebar';
import ImageSidebar from '../../components/image/ImageSidebar';
import {paramsChecker, isPublic, sortWithSectionAndOrder} from '../../helpers';
import {slide as Menu} from 'react-burger-menu'
import {getBridge, getBridges} from '../../selectors/BridgeSelector';
import {withRouter} from 'react-router-dom';
import SliderWrapper from "./SliderWrapper";

class Viewer extends Component {

    constructor(props) {
        super(props);

        const objectType = props.match.params.objectType;

        this.state = {
            objectType: objectType,
            elementId: props.match.params.elementId,
            orderedElements: null,
            screenWidth: null,
        };
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

        const {bridge, iconsSection, colorsSection, fontsSection, imagesSection} = nextProps;
        const {objectType} = this.state;

        if (!bridge || !iconsSection || !colorsSection || !fontsSection || !imagesSection || !objectType)
            return;

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

        const orderedElements = sortWithSectionAndOrder(elements, bridge.sections, elementsSection);

        this.setState({
            ...this.state,
            orderedElements
        });
    }

    closePage = () => {
        const {bridge} = this.props;
        this.props.history.push('/project/' + bridge.id);
    };

    render() {
        if (this.state === null)
            return (<div/>);

        const {objectType, orderedElements, elementId, screenWidth} = this.state;
        const {bridge, iconsSection, colorsSection, fontsSection, imagesSection} = this.props;

        const closePage = this.closePage;

        if (!bridge || !iconsSection || !colorsSection || !fontsSection || !imagesSection || !orderedElements)
            return (<div/>);

        let sidebar = null;
        const container = screenWidth > 900 ? "container__desktop" : "container";

        switch (objectType) {
            case 'icon':
                let icon = orderedElements.find(function (item) {
                    return item.id == elementId;
                });
                sidebar = <IconSidebar bridge={bridge} icon={icon} history={this.props.history}/>;
                break;


            case 'image':
                let image = orderedElements.find(function (item) {
                    return item.id == elementId;
                });
                sidebar = <ImageSidebar bridge={bridge} image={image} history={this.props.history}/>;
                break;


            case 'color':
                let color = orderedElements.find(function (item) {
                    return item.id == elementId;
                });
                sidebar = <ColorSidebar bridge={bridge} color={color} history={this.props.history}/>
                break;


            case 'font':
                let font = orderedElements.find(function (item) {
                    return item.id == elementId;
                });
                sidebar = <FontSidebar bridge={bridge} font={font} history={this.props.history}/>;
                break;


            default:
                break;
        }

        return (
            <div className="viewer-page" id="outter-container">
                <main className={screenWidth > 900 ? 'viewer__desktop' : "viewer"} id="page-wrap">
                    <div onClick={closePage}>
                        <ReactSVG
                            path="/images/close.svg"
                            className="close"/>
                    </div>

                    <div className="slider-wrapper">
                        <SliderWrapper/>
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