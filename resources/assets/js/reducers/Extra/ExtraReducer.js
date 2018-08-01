// Import Actions
import {CHANGE_HAS_BRIDGES, ADD_FONTS, DELETE_FONTS, SET_ICON_UPDATED, SET_DONT_USE_INDICATOR} from './ExtraActions';

// Initial State
const initialState = {
    hasBridges: true,
    fonts: [],
    icon_updated: false,
    dont_use_indicator: false
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

        case SET_ICON_UPDATED:
            return {
                ...state,
                icon_updated: action.payload.updatedId
            };

        case SET_DONT_USE_INDICATOR:
            return {
                ...state,
                dont_use_indicator: action.payload.dontUse
            };

        default:
            return state;
    }
};

export const getHasBridges = state => state.extras.hasBridges;
export const getFonts = state => state.extras.fonts;

export default ExtraReducer;
