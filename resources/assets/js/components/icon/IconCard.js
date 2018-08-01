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

        // Reload asset if it has been updated.
        let imgAsset = `/assets/${card.filename_png}`;
        if (this.props.icon_updated && this.props.icon_updated === card.id) {
            let randomId = Math.floor(Math.random() * 1000);
            imgAsset = `/assets/${card.filename_png}?id=${randomId}`;
        }

        let doNotUse = "";
        if (card.dont_use) {
            doNotUse = <span className="do-not-use">&times;</span>;
        }

        if (!isPub) {
            return connectDragSource(connectDropTarget(
                <div className="item card" style={cardStyle}>
                    {doNotUse}
                    <Link to={'/view/icon/element/' + card.id}>
                        <img src={imgAsset}/>
                    </Link>
                    <span onClick={deleteIcon}>
                        <i className="fas fa-trash-alt delete-handler"/>
                    </span>
                </div>
            ));
        } else {
            return (
                <div className="item card" style={cardStyle}>
                    {doNotUse}
                    <Link to={'/view/icon/element/' + card.id}>
                        <img src={imgAsset}/>
                    </Link>
                </div>
            );
        }

    }
}

const mapStateToProps = (state, ownProps) => {
    return {
        icon_updated: state.extras.icon_updated,
    }
};

const mapDispatchToProps = (dispatch) => {
    return bindActionCreators({
        deleteIcon,
        addIconConverted,
        updateIconFile
    }, dispatch)
};

export default dropTargetFlow("ICON")(connect(mapStateToProps, mapDispatchToProps)(IconCard));
