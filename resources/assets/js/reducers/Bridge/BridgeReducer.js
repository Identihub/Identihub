// Import Actions
import { ADD_BRIDGE, ADD_BRIDGES, DELETE_BRIDGE  } from './BridgeActions';
import {
  UPDATE_SECTION_ON_COLOR,
  UPDATE_SECTION_ON_ICON,
  UPDATE_SECTION_ON_IMAGE,
  UPDATE_ORDER_ON_COLOR,
  UPDATE_ORDER_ON_FONT,
  UPDATE_ORDER_ON_ICON,
  UPDATE_ORDER_ON_IMAGE
} from '../Extra/ExtraActions';
import { arrangeElements } from '../../helpers';

// Initial State
const initialState = { data: [] };

const BridgeReducer = (state = initialState, action) => {
  switch (action.type) {
    case ADD_BRIDGE :
      console.log(state.data);
      console.log(state.data.length);
      let results = state.data.map((element) => {
        if(element.id === action.bridge.id){
          return action.bridge;
        }
        return element;
      });
      if(state.data.length === results.length){
        results = [...results, action.bridge];
      }
      console.log(results.length);
      return {
        data: results,
      };

    case ADD_BRIDGES :
      return {
        data: action.bridges,
      };

    case DELETE_BRIDGE :
      return {
        data: state.data.filter(bridge => bridge.cuid !== action.cuid),
      };

    case UPDATE_ORDER_ON_FONT:
      var { bridgeId,  fontId, newOrder} = action.payload;

      var bridge = state.data.find( (bridge) => bridge.id == bridgeId);
      const fonts = bridge.fonts;
      const font = fonts.find( fontElement => fontElement.id === fontId);

      const newFonts = arrangeElements(fonts, font, newOrder);

      return {
        data: state.data.map( bridgeElement => {
          if(bridgeElement.id === bridge.id){
            bridge.fonts = newFonts;
            return bridge;
          }
          return bridgeElement;
        })
      };

    case UPDATE_ORDER_ON_ICON:
      var { bridgeId,  iconId, newOrder} = action.payload;

      var bridge = state.data.find( (bridge) => bridge.id == bridgeId);
      const icons = bridge.icons;
      const icon = icons.find( iconElement => iconElement.id === iconId);

      const newIcons = arrangeElements(icons, icon, newOrder);

      return {
        data: state.data.map( bridgeElement => {
          if(bridgeElement.id === bridge.id){
            bridge.icons = newIcons;
            return bridge;
          }
          return bridgeElement;
        })
      };

    case UPDATE_ORDER_ON_IMAGE:
      var { bridgeId,  imageId, newOrder} = action.payload;

      var bridge = state.data.find( (bridge) => bridge.id == bridgeId);
      const images = bridge.images;
      const image = images.find( imageElement => imageElement.id === imageId);

      const newImages = arrangeElements(images, image, newOrder);

      return {
        data: state.data.map( bridgeElement => {
          if(bridgeElement.id === bridge.id){
            bridge.images = newImages;
            return bridge;
          }
          return bridgeElement;
        })
      };

    case UPDATE_ORDER_ON_COLOR:
      var { bridgeId,  colorId, newOrder} = action.payload;

      var bridge = state.data.find( (bridge) => bridge.id == bridgeId);
      var colors = bridge.colors;
      var color = colors.find( colorElement => colorElement.id === colorId);

      var newColors = arrangeElements(colors, color, newOrder);

      return {
        data: state.data.map( bridgeElement => {
          if(bridgeElement.id === bridge.id){
            bridge.colors = newColors;
            return bridge;
          }
          return bridgeElement;
        })
      };

    case UPDATE_SECTION_ON_COLOR:
      var {
        bridgeId, colorId, newSectionId
      } = action.payload;

      var bridge = state.data.find( (bridge) => bridge.id == bridgeId);
      var colors = bridge.colors;
      var color = colors.find( colorElement => colorElement.id === colorId);
      var colorsOnNewSection = colors.filter( colorElement => colorElement.section_id === newSectionId );

      var newColors = colors.map( colorElement => {
        if(colorElement.id === color.id){
          color.section_id = newSectionId;
          color.order = colorsOnNewSection.length;
          return color;
        }
        return colorElement;
      });

      return {
        data: state.data.map( bridgeElement => {
          if(bridgeElement.id === bridge.id){
            bridge.colors = newColors;
            return bridge;
          }
          return bridgeElement;
        })
      };

    case UPDATE_SECTION_ON_IMAGE:
      var {
        bridgeId, imageId, newSectionId
      } = action.payload;

      var bridge = state.data.find( (bridge) => bridge.id == bridgeId);
      var images = bridge.images;
      var image = images.find( imageElement => imageElement.id === imageId);
      var imagesOnNewSection = images.filter( imageElement => imageElement.section_id === newSectionId );

      var newImages = images.map( imageElement => {
        if(imageElement.id === image.id){
          image.section_id = newSectionId;
          image.order = imagesOnNewSection.length;
          return image;
        }
        return imageElement;
      });

      return {
        data: state.data.map( bridgeElement => {
          if(bridgeElement.id === bridge.id){
            bridge.images = newImages;
            return bridge;
          }
          return bridgeElement;
        })
      };

    case UPDATE_SECTION_ON_ICON:
      var {
        bridgeId, iconId, newSectionId
      } = action.payload;

      var bridge = state.data.find( (bridge) => bridge.id == bridgeId);
      var icons = bridge.icons;
      var icon = icons.find( iconElement => iconElement.id === iconId);
      var iconsOnNewSection = icons.filter( iconElement => iconElement.section_id === newSectionId );

      var newIcons = icons.map( iconElement => {
        if(iconElement.id === icon.id){
          icon.section_id = newSectionId;
          icon.order = iconsOnNewSection.length;
          return icon;
        }
        return iconElement;
      });

      return {
        data: state.data.map( bridgeElement => {
          if(bridgeElement.id === bridge.id){
            bridge.icons = newIcons;
            return bridge;
          }
          return bridgeElement;
        })
      };

    default:
      return state;
  }
};


export const getBridges = state => state.bridges.data;
export const getBridge = (state, id ) => state.bridges.data.find(function(bridge){
  return bridge.id === id;
});

export default BridgeReducer;
