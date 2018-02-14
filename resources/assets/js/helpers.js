import { DropTarget, DragSource } from 'react-dnd';
import flow from 'lodash/flow';
import { findDOMNode } from 'react-dom';
import { addBridge } from './reducers/Bridge/BridgeActions';
import { addSectionTypes } from './reducers/SectionType/SectionTypeActions';

export const paramsChecker = (params) => {
  if(window.Laravel.is_public) {
    params.match.params.id = JSON.parse(window.Laravel.bridge).id;
    return params;
  }
  return params;
};

export const isPublic = () => {
    if(window.Laravel.is_public) {
      return window.Laravel.is_public;
    }
    return false;
};

export const fillStore = (store) => {
  const bridge = JSON.parse(window.Laravel.bridge);
  const sectionTypes = JSON.parse(window.Laravel.section_types);
  store.dispatch(addBridge(bridge));
  store.dispatch(addSectionTypes(sectionTypes));
};

export const arrangeElements = (elements, changedElement, newOrder) => {
  const oldOrder = changedElement.order;
  return elements.map( element => {
    // Check if are on the same section
    if(changedElement.id === element.id){
      changedElement.order = newOrder;
      return changedElement;
    }
    else if( (element.section_id === changedElement.section_id) && (changedElement.id !== element.id)){

      const start = oldOrder > newOrder ? newOrder : oldOrder;
      const end = oldOrder > newOrder ? oldOrder : newOrder;
      const order = element.order;
      const inRange = (order, start, end) => order >= start && order <= end;

      if(oldOrder > newOrder){
        inRange(order, start, end) ? element.order = order + 1 : null;
      }else{
        inRange(order, start, end) ? element.order = order - 1 : null;
      }

    }
    return element;
  });
};

export const filterSectionsWithSectionType = (sections, sectionType) => (
  sections.filter(section => (
      section.section_type_id === sectionType.id
  ))
);

export const sortByOrder = (elements) => (
  elements.sort(function(a, b){
    return a.order - b.order;
  })
);

export const dropTarget = (type) => {

  const cardTarget = {
    drop(props, monitor, component ) {
      const id = props.section.id;
      const sourceObj = monitor.getItem();
      if ( id !== sourceObj.listId ) component.pushCard(sourceObj.card);
      return {
        listId: id
      };
    }
  };

  return DropTarget(type, cardTarget, (connect, monitor) => ({
    connectDropTarget: connect.dropTarget(),
    isOver: monitor.isOver(),
    canDrop: monitor.canDrop()
  }))
};

export const dropTargetFlow = (type) => {

  const cardSource = {

    beginDrag(props) {
      return {
        index: props.index,
        listId: props.listId,
        card: props.card
      };
    },

    endDrag(props, monitor) {
      const item = monitor.getItem();
      const dropResult = monitor.getDropResult();

      if ( dropResult && dropResult.listId !== item.listId ) {
        props.removeCard(item.index);
      }
    }
  };

  const cardTarget = {

    hover(props, monitor, component) {
      const dragIndex = monitor.getItem().index;
      const hoverIndex = props.index;
      const sourceListId = monitor.getItem().listId;

      // Don't replace items with themselves
      if (dragIndex === hoverIndex) {
        return;
      }

      // Determine rectangle on screen
      const hoverBoundingRect = findDOMNode(component).getBoundingClientRect();

      // Get vertical middle
      const hoverMiddleY = (hoverBoundingRect.bottom - hoverBoundingRect.top) / 2;

      // Determine mouse position
      const clientOffset = monitor.getClientOffset();

      // Get pixels to the top
      const hoverClientY = clientOffset.y - hoverBoundingRect.top;

      // Only perform the move when the mouse has crossed half of the items height
      // When dragging downwards, only move when the cursor is below 50%
      // When dragging upwards, only move when the cursor is above 50%

      // Dragging downwards
      if (dragIndex < hoverIndex && hoverClientY < hoverMiddleY) {
        return;
      }

      // Dragging upwards
      if (dragIndex > hoverIndex && hoverClientY > hoverMiddleY) {
        return;
      }

      // Time to actually perform the action
      if ( props.listId === sourceListId ) {
        props.moveCard(dragIndex, hoverIndex);

        // Note: we're mutating the monitor item here!
        // Generally it's better to avoid mutations,
        // but it's good here for the sake of performance
        // to avoid expensive index searches.
        monitor.getItem().index = hoverIndex;
      }
    }
  };

  return flow(
    DropTarget(type, cardTarget, connect => ({
      connectDropTarget: connect.dropTarget()
    })),
    DragSource(type, cardSource, (connect, monitor) => ({
      connectDragSource: connect.dragSource(),
      isDragging: monitor.isDragging()
    }))
  );
};

export function sortWithSectionAndOrder(data, sections, sectionType) {
  const sortedSections = sortByOrder(filterSectionsWithSectionType(sections, sectionType));
  return [].concat(...sortedSections.map(function(section){
    return data.filter(function(item){
      return item.section_id === section.id;
    }).sort(function(a, b){
      return b.order < a.order;
    });
  }));
}


// export function getColorBrightness(hex) {
//     // strip off any leading #
//     hex = hex.replace('#', '');
//
//     const r = parseInt(hex.substr(0, 2), 16);
//     const g = parseInt(hex.substr(2, 2), 16);
//     const b = parseInt(hex.substr(4, 2), 16);
//
//     return ((r * 299) + (g * 587) + (b * 114)) / 1000;
// }