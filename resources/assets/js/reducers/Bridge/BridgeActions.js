

// Export Constants
export const ADD_BRIDGE = 'ADD_BRIDGE';
export const ADD_BRIDGES = 'ADD_BRIDGES';
export const DELETE_BRIDGE = 'DELETE_BRIDGE';

// Export Actions
export function addBridge(bridge) {
  return {
    type: ADD_BRIDGE,
    bridge,
  };
}

export function addBridges(bridges) {
  return {
    type: ADD_BRIDGES,
    bridges,
  };
}

export function deleteBridge(cuid) {
  return {
    type: DELETE_BRIDGE,
    cuid,
  };
}

// export function addBridgeRequest(bridge) {
//   return (dispatch) => {
//     return callApi('bridges', 'bridge', {
//       bridges: {
//         name: bridge.name
//       },
//     }).then(res => dispatch(addBridge(res.bridge)));
//   };
// }



// export function fetchBridge(cuid) {
//   return (dispatch) => {
//     return callApi(`bridges/${cuid}`).then(res => dispatch(addBridge(res.bridge)));
//   };
// }
//
//
//
// export function deleteBridgeRequest(cuid) {
//   return (dispatch) => {
//     return callApi(`bridges/${cuid}`, 'delete').then(() => dispatch(deleteBridge(cuid)));
//   };
// }
