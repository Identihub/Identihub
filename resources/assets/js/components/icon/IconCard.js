import React, {Component} from 'react';
import {Link} from 'react-router-dom';
import {DragSource, DropTarget} from 'react-dnd';
import {findDOMNode} from 'react-dom';
import {dropTargetFlow, isPublic} from '../../helpers';
import {connect} from 'react-redux';
import {bindActionCreators} from "redux";
import {addIconConverted, deleteIcon, updateIconFile} from "../../reducers/Bridge/BridgeApiCalls";

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

        const bgColor = card.bg_color ? card.bg_color : null;

        const cardStyle = {opacity: opacity};
        if (bgColor) {
            cardStyle.backgroundColor = bgColor
        }

        if (!isPub) {
            return connectDragSource(connectDropTarget(
                <div className="item card" style={cardStyle}>
                    <Link to={'/project/' + bridge.id + '/view/icon/element/' + card.id}>
                        <img src={'/assets/' + card.filename_png}/>
                        {/*<i className="fas fa-expand-arrows-alt move-handler"/>*/}
                    </Link>
                    <span onClick={deleteIcon}>
                        <i className="fas fa-trash-alt delete-handler"/>
                    </span>
                </div>
            ));
        } else {
            return (
                <div className="item card" style={cardStyle}>
                    <Link to={'/view/icon/element/' + card.id}>
                        <img src={'/assets/' + card.filename_png}/>
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
