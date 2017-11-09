import React, { Component } from 'react';
import PropTypes from 'prop-types';
import { connect } from 'react-redux';
import { getBridge } from '../reducers/Bridge/BridgeReducer';
import { getSectionTypes, getSectionType } from '../reducers/SectionType/SectionTypeReducer';
import ReactSVG from 'react-svg';
import { sortWithSectionAndOrder } from '../helpers';
import FontSidebar from '../components/FontSidebar';
import ColorSidebar from '../components/ColorSidebar';
import IconSidebar from '../components/IconSidebar';
import ImageSidebar from '../components/ImageSidebar';
import { paramsChecker, isPublic } from '../helpers';

class Viewer extends Component {

    constructor(props) {
        super(props);

        props = paramsChecker(props);

        const { bridge, iconsSection, colorsSection, fontsSection, imagesSection } = props;
        const objectType = props.match.params.objectType;

        let elements = null;
        let elementsSection = null;

        if(bridge){
            switch (objectType){
            case "icon":
                elements = bridge.icons;
                elementsSection = iconsSection;
                break;
            case "image":
                elements = bridge.images;
                elementsSection = imagesSection;
                break;
            case "color":
                elements = bridge.colors;
                elementsSection = colorsSection;
                break;
            case "font":
                elements = bridge.fonts;
                elementsSection = fontsSection;
                break;
            default:
                return;
            }
        }

        this.state = {
            objectType: objectType,
            elementId: props.match.params.elementId,
            orderedElements: ( bridge && elementsSection) ? sortWithSectionAndOrder(elements, bridge.sections, elementsSection) : null
        };

        this.goBackward = this.goBackward.bind(this);
        this.goForward = this.goForward.bind(this);
        this.closePage = this.closePage.bind(this);
    }

    componentWillReceiveProps(nextProps) {

        const { bridge, iconsSection, colorsSection, fontsSection, imagesSection } = nextProps;
        const { objectType } = this.state;

        if(!bridge || !iconsSection || !colorsSection || !fontsSection || !imagesSection || !objectType)
            return;

        let elements = null;
        let elementsSection = null;

        switch (objectType){
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

        this.setState((prevState, props) => {
            return {orderedElements, elementId: nextProps.match.params.elementId};
        });
    }

    goForward() {
        const {elementId, orderedElements} = this.state;
        let hasFoundElement = false;
        let nextElement = orderedElements.find(function(element) {
            if(hasFoundElement)
                return true;
            if(Number(element.id) === Number(elementId))
                hasFoundElement = true;
            return false;
        });

        if(nextElement)
          this.changeToElement(nextElement);
    }

    changeToElement(element){
        const { objectType } = this.state;
        const { bridge } = this.props;

        if(!objectType || !bridge)
            return;

        this.setState((prevState, props) => {
            return {elementId: element.id}
        });

        let isPub = isPublic();

        let url = null;

        if(!isPub){
          url = '/project/' + bridge.id + '/view/' + objectType + '/element/' + element.id;
        }else{
          url = '/view/' + objectType + '/element/' + element.id;
        }

        this.props.history.replace(url);
    }

    goBackward() {
        const {elementId, orderedElements} = this.state;
        let prevElement = null;
        orderedElements.find(function(element) {
            if(Number(element.id) === Number(elementId))
                return true;
            prevElement = element;
            return false;
        });

        if(prevElement)
            this.changeToElement(prevElement);
    }

    findOrderOfElement(elements, selectedElementId) {
        let order = 0;
        if(!elements)
            return null;

        elements.find(function(element){
            if(Number(element.id) === Number(selectedElementId))
                return true;
            order = order + 1;
            return false;
        });
        return order;
    }

    closePage() {
        this.props.history.goBack();
    }

    render() {

        if(this.state === null)
            return (<div> </div>);

        const { objectType, orderedElements, elementId } = this.state;
        const { bridge, iconsSection, colorsSection, fontsSection, imagesSection } = this.props;

        const goForward = this.goForward;
        const goBackward = this.goBackward;
        const closePage = this.closePage;

        if(!bridge || !iconsSection || !colorsSection || !fontsSection || !imagesSection || !orderedElements)
            return (<div> </div>);

        const order = this.findOrderOfElement(orderedElements, elementId);

        const marginLeft = "calc(" + (-100 * order) + "vw + " + (300 * order) + "px)";

        let sortedItems = null;
        let sidebar = null;

        switch (objectType) {
            case 'icon':
                sortedItems = orderedElements ? orderedElements.map(function(icon){
                    return( <div key={icon.id} className="item">
                        <div className="container">
                            <img src={'/assets/' + icon.filename}/>
                        </div>
                    </div> )
                }) : null;
                let icon = orderedElements.find(function(item) { return item.id == elementId; });
                sidebar = <IconSidebar bridge={bridge} icon={icon} history={this.props.history}/>;
                break;
            case 'image':
                sortedItems = orderedElements ? orderedElements.map(function(image){
                  return( <div key={image.id} className="item">
                      <div className="container">
                          <img className="image-viewer" src={'/assets/' + image.filename}/>
                      </div>
                  </div> )
                }) : null;
                let image = orderedElements.find(function(item) { return item.id == elementId; });
                sidebar = <ImageSidebar bridge={bridge} image={image} history={this.props.history}/>;
                break;
            case 'color':
                sortedItems = orderedElements ? orderedElements.map(function(color){
                    return( <div key={color.id} className="item">
                        <div className="container">
                            <div className="color" style={{backgroundColor: "#" + color.hex}}> </div>
                        </div>
                    </div> )
                }) : null;
                let color = orderedElements.find(function(item) { return item.id == elementId; });
                sidebar = <ColorSidebar bridge={bridge} color={color} history={this.props.history}/>
                break;
            case 'font':
                sortedItems = orderedElements ? orderedElements.map(function(font){
                    return( <div key={font.id} className="item">
                        <div className="container">
                            <img className="" src={'/fonts/' + font.variant.image_link}/>
                        </div>
                    </div> )
                }) : null;
                let font = orderedElements.find(function(item) { return item.id == elementId; });
                sidebar = <FontSidebar bridge={bridge} font={font} history={this.props.history}/>;
                break;
            default:
                break;
        }

        return (
            <div className="viewer-page">
                <div className="viewer">
                    <div onClick={closePage}>
                        <ReactSVG
                            path="/images/close.svg"
                            className="close"
                        />
                    </div>
                    <div onClick={goBackward}>
                        <ReactSVG
                            path="/images/backward.svg"
                            className="backward"
                        />
                    </div>
                    <div onClick={goForward}>
                        <ReactSVG
                            path="/images/forward.svg"
                            className="forward"
                        />
                    </div>
                    <div className="items" style={{marginLeft: marginLeft}}>
                      {sortedItems}
                      <div className="clearfix"></div>
                    </div>
                </div>
                <div className="sidebar">
                  {sidebar}
                </div>
            </div>
        );
    }


}

const mapStateToProps = (state, ownProps) => {
    ownProps = paramsChecker(ownProps);
    const bridgeId = ownProps.match.params.id;
    return {
        bridge: getBridge(state, parseInt(bridgeId)),
        sectionTypes: getSectionTypes(state),
        iconsSection: getSectionType(state, "ICONS"),
        colorsSection: getSectionType(state, "COLORS"),
        fontsSection: getSectionType(state, "FONTS"),
        imagesSection: getSectionType(state, "IMAGES")
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

export default connect(mapStateToProps)(Viewer);