import React, {Component} from 'react';
import {Link} from 'react-router-dom';
import {DragSource, DropTarget} from 'react-dnd';
import {findDOMNode} from 'react-dom';
import {dropTargetFlow} from '../helpers';
import {isPublic} from '../helpers';
import { connect } from 'react-redux';
import {addImageConverted, deleteImage, updateImageFile} from "../reducers/Bridge/BridgeApiCalls";
import {bindActionCreators} from "redux";


class ImageCard extends Component {
    constructor(props) {
        super(props);

        this.deleteImage = this.deleteImage.bind(this);
    }

    deleteImage() {
        const { deleteImage, bridge, card } = this.props;
        if(deleteImage){
            deleteImage(bridge.id, card.id);
        }
    }

    render() {
        const isPub = isPublic();
        const {card, isDragging, connectDragSource, connectDropTarget, bridge} = this.props;
        const opacity = isDragging ? 0.1 : 1;
        const deleteImage = this.deleteImage;


        if (!isPub) {
            return connectDragSource(connectDropTarget(
                <div className="item card" style={{opacity: opacity}}>
                    <Link
                        to={'/project/' + bridge.id + '/view/image/element/' + card.id}
                        style={{
                            backgroundImage: "url(" + '/assets/' + card.filename + ")",
                            backgroundPosition: 'center',
                            backgroundSize: 'cover'
                        }}>
                        {/*<i className="fas fa-expand-arrows-alt move-handler"/>*/}
                    </Link>
                    <span onClick={deleteImage}>
                        <i className="fas fa-trash-alt delete-handler"/>
                  </span>
                </div>
            ));
        } else {
            return (
                <div className="item card" style={{opacity: opacity}}>
                    <Link to={'/view/image/element/' + card.id} style={{
                        backgroundImage: "url(" + '/assets/' + card.filename + ")",
                        backgroundPosition: 'center',
                        backgroundSize: 'cover'
                    }}>
                    </Link>
                </div>
            );
        }

    }
}

const dispatchToProps = (dispatch) => {
    return bindActionCreators({
        deleteImage,
    }, dispatch)
};

export default dropTargetFlow("IMAGE")( connect(state => state, dispatchToProps)(ImageCard));