/**
 * Root Reducer
 */
import { combineReducers } from 'redux';

// Import Reducers
import bridges from './reducers/Bridge/BridgeReducer';
import extras from './reducers/Extra/ExtraReducer';
import sectionTypes from './reducers/SectionType/SectionTypeReducer';

// Combine all reducers into one root reducer
export default combineReducers({
  bridges,
  extras,
  sectionTypes
});
