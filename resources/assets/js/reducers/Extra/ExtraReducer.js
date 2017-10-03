// Import Actions
import { CHANGE_HAS_BRIDGES, ADD_FONTS, DELETE_FONTS } from './ExtraActions';

// Initial State
const initialState = {
  hasBridges: true,
  fonts: []
};

const ExtraReducer = (state = initialState, action) => {
  switch (action.type) {
      case CHANGE_HAS_BRIDGES :
          return Object.assign({}, state, {
              hasBridges: action.hasBridges
          });
      case ADD_FONTS:
          return Object.assign({}, state, {
              fonts: action.fonts
          });

      case DELETE_FONTS:
          return Object.assign({}, state, {
              fonts: []
          });
    // case ADD_BRIDGES :
    //   return {
    //     data: action.bridges,
    //   };
    //
    // case DELETE_BRIDGE :
    //   return {
    //     data: state.data.filter(bridge => bridge.cuid !== action.cuid),
    //   };

    default:
      return state;
  }
};

export const getHasBridges = state => state.extras.hasBridges;
export const getFonts = state => state.extras.fonts;

export default ExtraReducer;
