import React, { Component } from 'react';
import { Link } from 'react-router-dom';
import { DragSource, DropTarget } from 'react-dnd';
import { findDOMNode } from 'react-dom';
import { dropTargetFlow } from '../helpers';
import { isPublic } from '../helpers';

class IconCard extends Component {
    render() {
        const isPub = isPublic();
        const { card, isDragging, connectDragSource, connectDropTarget, bridge } = this.props;
        const opacity = isDragging ? 0.1 : 1;

        if(!isPub){
          return connectDragSource(connectDropTarget(
            <div className="item card" style={{opacity: opacity}}>
                <Link to={'/bridge/' + bridge.id + '/view/icon/element/' + card.id}>
                    <img src={'/assets/' + card.filename} />
                    <img src="/images/move-handler.svg" className="move-handler" width="22"/>
                </Link>
            </div>
          ));
        }else{
          return (
            <div className="item card" style={{opacity: opacity}}>
                <Link to={'/view/icon/element/' + card.id}>
                    <img src={'/assets/' + card.filename} />
                </Link>
            </div>
          );
        }

    }
}

export default dropTargetFlow("ICON")(IconCard);