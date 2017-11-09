import React, { Component } from 'react';
import { Link } from 'react-router-dom';
import { isPublic } from '../helpers';

class FontCard extends Component {

    render() {
        const isPub = isPublic();
        const { card, bridge } = this.props;
        if(!isPub){
          return (
              <div className="item font card">
                  <Link to={'/project/' + bridge.id + '/view/font/element/' + card.id}>
                      <img src={'/fonts/' + card.variant.image_link} />
                  </Link>
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

export default FontCard;