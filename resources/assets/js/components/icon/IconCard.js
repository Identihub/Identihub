import React, {Component} from 'react';
import {Link} from 'react-router-dom';
import {findDOMNode} from 'react-dom';
import {isPublic} from '../../helpers';
import {connect} from 'react-redux';
import {bindActionCreators} from "redux";
import {deleteIcon} from "../../reducers/Bridge/BridgeApiCalls";
import {SortableElement} from 'react-sortable-hoc';
import PropTypes from "prop-types";

class IconCard extends Component {

    static propTypes = {
        card: PropTypes.object.isRequired,
        bridge: PropTypes.object.isRequired,
    };

    deleteIcon = () => {
        const {deleteIcon, bridge, card} = this.props;
        if (deleteIcon) {
            deleteIcon(bridge.id, card.id);
        }
    };

    render() {
        const isPub = isPublic();
        const {card, bridge} = this.props;
        const deleteIcon = this.deleteIcon;

        const bgColor = card.bg_color ? card.bg_color : null;

        const cardStyle = {};
        if (bgColor) {
            cardStyle.backgroundColor = bgColor
        }

        if (!isPub) {
            return (
                <div className="item card icon-card-dragged" style={cardStyle}>
                    <Link to={'/project/' + bridge.id + '/view/icon/element/' + card.id}>
                        <img src={'/assets/' + card.filename_png}/>
                    </Link>
                    <span onClick={deleteIcon} className="hide-on-drag">
                        <i className="fas fa-trash-alt delete-handler"/>
                    </span>
                </div>);
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
        deleteIcon
    }, dispatch)
};

export default SortableElement(connect(state => state, dispatchToProps)(IconCard));
