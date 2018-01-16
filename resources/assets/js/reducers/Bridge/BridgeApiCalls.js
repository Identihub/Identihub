import axios from 'axios';
import _ from 'lodash';
import { addBridges, addBridge } from './BridgeActions';
import { changeHasBridges } from '../Extra/ExtraActions';
import { addSectionTypes } from '../SectionType/SectionTypeActions';
import { addFonts } from '../Extra/ExtraActions';

export function fetchBridges() {
    return (dispatch) => {
        return axios.get('/api/v1/bridges')
            .then(function (response) {
                dispatch(addBridges(response.data.bridges));
                dispatch(addSectionTypes(response.data.section_types));
                if(response.data.bridges.length === 0){
                    dispatch(changeHasBridges(false));
                }else{
                    dispatch(changeHasBridges(true));
                }

            })
            .catch(function (error) {
                console.log(error);
            });
    };
}

export function fetchBridge(id) {
    return (dispatch) => {
        return axios.get('/api/v1/bridges/' + id)
            .then(function (response) {
                dispatch(addBridge(response.data.bridge));
                dispatch(addSectionTypes(response.data.section_types));
                dispatch(changeHasBridges(true));
            })
            .catch(function (error) {
                console.log(error);
            });
    };
}

export function deleteBridge(id) {
  return (dispatch) => {
    return axios.delete('/api/v1/bridges/' + id)
      .then(function (response) {
        dispatch(addBridges(response.data.bridges));
        dispatch(addSectionTypes(response.data.section_types));
        if(response.data.bridges.length === 0){
          dispatch(changeHasBridges(false));
        }else{
          dispatch(changeHasBridges(true));
        }
      })
      .catch(function (error) {
        console.log(error);
      });
  };
}

export function addBridgeRequest(name) {
    return (dispatch) => {
        return axios.post('/api/v1/bridges', { name: name})
            .then(function (response) {
                console.log(response);
                dispatch(addBridge(response.data.bridge));
                dispatch(changeHasBridges(true));
            })
            .catch(function (error) {
                console.log(error);
            });
    }
}

export function updateBridgeNameRequest(id, name) {
    return (dispatch) => {
        return axios.patch('/api/v1/bridges/' + id + '/name', { name: name})
            .then(function(response) {
                dispatch(addBridge(response.data.bridge));
            })
            .catch(function (error) {
                console.log(error);
            });
    }
}

export function updateBridgeSlugRequest(id, name) {
  return (dispatch) => {
    return axios.patch('/api/v1/bridges/' + id + '/slug', { slug: name})
      .then(function(response) {
        dispatch(addBridge(response.data.bridge));
      })
      .catch(function (error) {
        console.log(error);
      });
  }
}

export function updateSectionTitle(bridgeId, sectionId, text) {
    return (dispatch) => {
        return axios.patch('/api/v1/bridges/' + bridgeId + '/sections/' +  sectionId + '/updateTitle', {title: text})
            .then(function(response) {
                dispatch(addBridge(response.data.bridge));
            })
            .catch(function (error) {
                console.log(error);
            });
    }
}

export function updateSectionDescription(bridgeId, sectionId, text) {
    return (dispatch) => {
        return axios.patch('/api/v1/bridges/' + bridgeId + '/sections/' +  sectionId + '/updateDescription', {description: text})
            .then(function(response) {
                dispatch(addBridge(response.data.bridge));
            })
            .catch(function (error) {
                console.log(error);
            });
    }
}

export function createSection(bridgeid, sectionTypeId) {
    return (dispatch) => {
        return axios.post('/api/v1/bridges/' + bridgeid + '/sections', {section_type: sectionTypeId})
            .then(function(response){
                dispatch(addBridge(response.data.bridge));
            })
            .catch(function(error) {
                console.log(error);
            });
    }
}

export function deleteSection(bridgeid, sectionId) {
  return (dispatch) => {
    return axios.delete('/api/v1/bridges/' + bridgeid + '/sections/' + sectionId)
      .then(function(response){
        dispatch(addBridge(response.data.bridge));
      })
      .catch(function(error) {
        console.log(error);
      });
  }
}

export function createIcon(bridgeId, files, callbackProgress){
    let data = new FormData();
    _.map(files, (f) => data.append('icons[]', f));

    return (dispatch) => {
        return axios.post('/api/v1/bridges/' + bridgeId + '/icons', data, {onUploadProgress: callbackProgress})
            .then(function(response){
                dispatch(addBridge(response.data.bridge));
            })
            .catch(function(error) {
                console.log(error);
            });
    }
}

export function createImage(bridgeId, file){
  let data = new FormData();
  data.append('image', file);

  return (dispatch) => {
    return axios.post('/api/v1/bridges/' + bridgeId + '/images', data)
      .then(function(response){
        dispatch(addBridge(response.data.bridge));
      })
      .catch(function(error) {
        console.log(error);
      });
  }
}

export function addIconConverted(bridgeId, iconId, width, height){
  return (dispatch) => {
    return axios.post('/api/v1/bridges/' + bridgeId + '/icons/' + iconId + '/converted', {width: width, height: height})
      .then(function(response){
        dispatch(addBridge(response.data.bridge));
      })
      .catch(function(error) {
        console.log(error);
      });
  }
}

export function addImageConverted(bridgeId, imageId, width, height){
  return (dispatch) => {
    return axios.post('/api/v1/bridges/' + bridgeId + '/images/' + imageId + '/converted', {width: width, height: height})
      .then(function(response){
        dispatch(addBridge(response.data.bridge));
      })
      .catch(function(error) {
        console.log(error);
      });
  }
}

export function updateIconFile(bridgeId, iconId, file){
  let data = new FormData();
  data.append('icon', file);

  return (dispatch) => {
    return axios.post('/api/v1/bridges/' + bridgeId + '/icons/' + iconId + '/filename', data)
      .then(function(response){
        dispatch(addBridge(response.data.bridge));
      })
      .catch(function(error) {
        console.log(error);
      });
  }
}

export function updateImageFile(bridgeId, imageId, file){
  let data = new FormData();
  data.append('image', file);

  return (dispatch) => {
    return axios.post('/api/v1/bridges/' + bridgeId + '/images/' + imageId + '/filename', data)
      .then(function(response){
        dispatch(addBridge(response.data.bridge));
      })
      .catch(function(error) {
        console.log(error);
      });
  }
}

export function deleteIcon(bridgeId, id){
  return (dispatch) => {
    return axios.delete('/api/v1/bridges/' + bridgeId + '/icons/' + id)
      .then(function(response){
        dispatch(addBridge(response.data.bridge));
      })
      .catch(function(error) {
        console.log(error);
      });
  }
}

export function deleteImage(bridgeId, id){
  return (dispatch) => {
    return axios.delete('/api/v1/bridges/' + bridgeId + '/images/' + id)
      .then(function(response){
        dispatch(addBridge(response.data.bridge));
      })
      .catch(function(error) {
        console.log(error);
      });
  }
}

export function createColor(bridgeId, hex, rgb, cmyk) {
    return (dispatch) => {
        return axios.post('/api/v1/bridges/' + bridgeId + '/colors', {hex: hex, rgb: rgb, cmyk: cmyk})
            .then(function(response){
                dispatch(addBridge(response.data.bridge));
            })
            .catch(function(error) {
                console.log(error);
            });
    }
}

export function deleteColor(bridgeId, id) {
  return (dispatch) => {
    return axios.delete('/api/v1/bridges/' + bridgeId + '/colors/' + id)
      .then(function(response){
        dispatch(addBridge(response.data.bridge));
      })
      .catch(function(error) {
        console.log(error);
      });
  }
}

export function searchFont(font) {
    return (dispatch) => {
        return axios.get('/api/v1/fonts/search/' + font)
            .then(function(response){
                dispatch(addFonts(response.data.fonts));
            })
            .catch(function(error){
                dispatch(addFonts([]));
                console.log(error);
            });
    }
}

export function createFont(bridgeId, fontFamilyId, variantId) {
    return (dispatch) => {
        return axios.post(
            '/api/v1/bridges/' + bridgeId + '/fonts',
            {
                'font_family_id': fontFamilyId,
                'font_variant_id': variantId
            }
        )
            .then((response) => {
                dispatch(addBridge(response.data.bridge))
            })
            .catch((error) => {
                console.log(error);
            })
    }
}

export function deleteFont(bridgeId, fontId) {
  return (dispatch) => {
    return axios.delete(
      '/api/v1/bridges/' + bridgeId + '/fonts/' + fontId
    )
      .then((response) => {
        dispatch(addBridge(response.data.bridge))
      })
      .catch((error) => {
        console.log(error);
      })
  }
}

export function reorderElement(type, elementId, newOrder) {
  return (dispatch) => {
    return axios.post(
      '/api/v1/order/' + type + '/' + elementId + '/' + newOrder
    )
      .then((response) => {
        dispatch(addBridge(response.data.bridge))
      })
      .catch((error) => {
        console.log(error);
      })
  }
}

export function changeSection(type, elementId, newSection) {
  return (dispatch) => {
    return axios.post(
      '/api/v1/changeSection/' + type + '/' + elementId + '/' + newSection
    )
      .then((response) => {
        dispatch(addBridge(response.data.bridge))
      })
      .catch((error) => {
        console.log(error);
      })
  }
}