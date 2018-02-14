import React, {Component} from 'react';
import {Link} from 'react-router-dom';
import {DragSource, DropTarget} from 'react-dnd';
import {findDOMNode} from 'react-dom';
import {dropTargetFlow} from '../helpers';
import {isPublic} from '../helpers';
import {connect} from 'react-redux';
import {bindActionCreators} from "redux";
import {addIconConverted, deleteIcon, updateIconFile} from "../reducers/Bridge/BridgeApiCalls";

class IconCard extends Component {
    constructor(props) {
        super(props);
        this.state = {};

        this.deleteIcon = this.deleteIcon.bind(this);
    }

    deleteIcon() {
        const {deleteIcon, bridge, card} = this.props;
        if (deleteIcon) {
            deleteIcon(bridge.id, card.id);
        }
    }


    render() {
        const isPub = isPublic();
        const {card, isDragging, connectDragSource, connectDropTarget, bridge} = this.props;
        const opacity = isDragging ? 0.1 : 1;
        const deleteIcon = this.deleteIcon;

        console.log("a");

        if (!isPub) {
            return connectDragSource(connectDropTarget(
                <div className="item card" style={{opacity: opacity}}>
                    <Link to={'/project/' + bridge.id + '/view/icon/element/' + card.id}>
                        <img src={'/assets/' + card.filename}/>
                        <i className="fas fa-expand-arrows-alt move-handler fa-2x"/>
                    </Link>
                    <span onClick={deleteIcon}>
                        <i className="fas fa-trash-alt fa-2x delete-handler"/>
                    </span>
                </div>
            ));
        } else {
            return (
                <div className="item card" style={{opacity: opacity}}>
                    <Link to={'/view/icon/element/' + card.id}>
                        <img src={'/assets/' + card.filename}/>
                    </Link>
                </div>
            );
        }

    }
}

const dispatchToProps = (dispatch) => {
    return bindActionCreators({
        deleteIcon,
        addIconConverted,
        updateIconFile
    }, dispatch)
};

export default dropTargetFlow("ICON")(connect(state => state, dispatchToProps)(IconCard));