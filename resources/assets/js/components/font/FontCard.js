import React, { Component } from 'react';
import { Link } from 'react-router-dom';
import { isPublic } from '../../helpers';
import {bindActionCreators} from "redux";
import {deleteFont} from "../../reducers/Bridge/BridgeApiCalls";

import {connect} from 'react-redux';

class FontCard extends Component {
    constructor(props) {
        super(props);

        this.deleteFont = this.deleteFont.bind(this);
    }


    deleteFont() {
        const { deleteFont, bridge, card } = this.props;
        if(deleteFont){
            deleteFont(bridge.id, card.id);
        }
    }

    render() {
        const isPub = isPublic();
        const { card, bridge } = this.props;
        const deleteFont = this.deleteFont;

        if(!isPub){
          return (
              <div className="item font card">
                  <Link to={'/project/' + bridge.id + '/view/font/element/' + card.id}>
                      <img src={'/fonts/' + card.variant.image_link} />
                  </Link>
                  <span onClick={deleteFont}>
                        <i className="fas fa-trash-alt delete-handler"/>
                  </span>
              </div>
          );
        }else{
          return (
            <div className="item font card">
              <Link to={'/view/font/element/' + card.id}>
                <img src={'/fonts/' + card.variant.image_link} />
              </Link>
            </div>
          );
        }
    }
}

const dispatchToProps = (dispatch) => {
    return bindActionCreators({
        deleteFont
    }, dispatch)
};

export default connect(state=>state, dispatchToProps)(FontCard);