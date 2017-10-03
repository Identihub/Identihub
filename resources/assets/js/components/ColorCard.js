import React, { Component } from 'react';
import { DragSource, DropTarget } from 'react-dnd';
import { findDOMNode } from 'react-dom';
import { dropTargetFlow } from '../helpers';
import { Link } from 'react-router-dom';
import { isPublic } from '../helpers';

class ColorCard extends Component {

    render() {
        const isPub = isPublic();
        const { card, isDragging, connectDragSource, connectDropTarget, bridge } = this.props;
        const opacity = isDragging ? 0.1 : 1;

        if(!isPub){
          return connectDragSource(connectDropTarget(
            <div className="item card" style={{backgroundColor: "#" + card.hex, opacity: opacity}}>
              <Link to={'/bridge/' + bridge.id + '/view/color/element/' + card.id}>
                <img src="/images/move-handler.svg" className="move-handler" width="22"/>
              </Link>
            </div>
          ));
        }else {
          return (
            <div className="item card" style={{backgroundColor: "#" + card.hex, opacity: opacity}}>
              <Link to={'/view/color/element/' + card.id}>
              </Link>
            </div>
          );
        }

    }
}

export default dropTargetFlow("COLOR")(ColorCard);