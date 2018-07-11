// Import Actions
import {ADD_SECTION_TYPES} from './SectionTypeActions';

// Initial State
const initialState = {data: []};

const SectionTypeReducer = (state = initialState, action) => {
    switch (action.type) {
        case ADD_SECTION_TYPES :
            return {
                data: action.sectionTypes,
            };

        default:
            return state;
    }
};


export const getSectionTypes = state => state.sectionTypes.data;
export const getSectionType = (state, name) => state.sectionTypes.data.find(function (sectionType) {
    return sectionType.name === name;
});

export default SectionTypeReducer;
