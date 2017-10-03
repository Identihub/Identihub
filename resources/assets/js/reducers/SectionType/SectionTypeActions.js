// Export Constants
export const ADD_SECTION_TYPES = 'ADD_SECTION_TYPES';


export function addSectionTypes(sectionTypes) {
  return {
    type: ADD_SECTION_TYPES,
    sectionTypes,
  };
}