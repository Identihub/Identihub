import React from 'react';
import PropTypes from 'prop-types';
import { Link } from 'react-router-dom';
import ReactSVG from 'react-svg';

const BridgeCard = (props) => {

  let classImage = '';

  let image = "/images/logo.svg";
  if(props.bridge.icons.length !== 0){
    image = '/assets/' + props.bridge.icons[0].filename_png;
  }else{
    classImage += 'default-image';
  }

    return (
        <div className="bridge-container">
            <div className="bridge">
              <Link to={'/projects/' + props.bridge.id + '/delete-confirmation'} className="delete">
                <ReactSVG
                  path="/images/close.svg"
                />
              </Link>
              <Link className="logo-wrapper" to={ '/project/' + props.bridge.id }>
                  <img
                      className={classImage}
                      src={image}
                      alt="Project Name logo"/>
              </Link>
            </div>
            <Link className="label" to={ '/project/' + props.bridge.id } > {props.bridge.name}</Link>
        </div>
    );
};

BridgeCard.propTypes = {
    bridge: PropTypes.object.isRequired
};

export default BridgeCard;
