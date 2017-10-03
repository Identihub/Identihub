// Export Constants
export const CHANGE_HAS_BRIDGES = 'CHANGE_HAS_BRIDGES';
export const ADD_FONTS = 'ADD_FONTS';
export const DELETE_FONTS = 'DELETE_FONTS';
export const UPDATE_SECTION_ON_COLOR = 'UPDATE_SECTION_ON_COLOR';
export const UPDATE_SECTION_ON_IMAGE = 'UPDATE_SECTION_ON_IMAGE';
export const UPDATE_SECTION_ON_ICON = 'UPDATE_SECTION_ON_ICON';
export const UPDATE_ORDER_ON_COLOR = 'UPDATE_ORDER_ON_COLOR';
export const UPDATE_ORDER_ON_FONT = 'UPDATE_ORDER_ON_FONT';
export const UPDATE_ORDER_ON_ICON = 'UPDATE_ORDER_ON_ICON';
export const UPDATE_ORDER_ON_IMAGE = 'UPDATE_ORDER_ON_IMAGE';

// Export Actions
export function changeHasBridges(hasBridges) {
  return {
    type: CHANGE_HAS_BRIDGES,
    hasBridges,
  };
}

export function addFonts(fonts) {
  return {
    type: ADD_FONTS,
    fonts
  }
}

export function deleteFonts() {
  return {
    type: DELETE_FONTS
  }
}

export function updateSectionOnColor(bridgeId, colorId, newSectionId) {
  return {
    type: UPDATE_SECTION_ON_COLOR,
    payload: {
      bridgeId,
      colorId,
      newSectionId
    }
  }
}

export function updateSectionOnIcon(bridgeId, iconId, newSectionId) {
  return {
    type: UPDATE_SECTION_ON_ICON,
    payload: {
      bridgeId,
      iconId,
      newSectionId
    }
  }
}

export function updateSectionOnImage(bridgeId, imageId, newSectionId) {
  return {
    type: UPDATE_SECTION_ON_IMAGE,
    payload: {
      bridgeId,
      imageId,
      newSectionId
    }
  }
}

export function updateOrderOnColor(bridgeId, colorId, newOrder) {
    return {
        type: UPDATE_ORDER_ON_COLOR,
        payload: {
            bridgeId,
            colorId,
            newOrder
        }
    }
}

export function updateOrderOnFont(bridgeId, fontId, newOrder) {
  return {
    type: UPDATE_ORDER_ON_FONT,
    payload: {
      bridgeId,
      fontId,
      newOrder
    }
  }
}

export function updateOrderOnIcon(bridgeId, iconId, newOrder) {
  return {
    type: UPDATE_ORDER_ON_ICON,
    payload: {
      bridgeId,
      iconId,
      newOrder
    }
  }
}

export function updateOrderOnImage(bridgeId, imageId, newOrder) {
  return {
    type: UPDATE_ORDER_ON_IMAGE,
    payload: {
      bridgeId,
      imageId,
      newOrder
    }
  }
}


