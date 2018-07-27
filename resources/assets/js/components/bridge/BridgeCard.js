import React from 'react';
import PropTypes from 'prop-types';
import {Link} from 'react-router-dom';
import ReactSVG from 'react-svg';

const BridgeCard = (props) => {

    let classImage = '';

    let image = "/images/logo.svg";
    if (props.bridge.icons.length !== 0) {
        image = '/assets/' + props.bridge.icons[0].filename_png;
    } else {
        classImage += 'default-image';
    }

    return (
        <div className="bridge-container">
            <div className="bridge">
                <Link to={'/projects/' + props.bridge.id + '/delete-confirmation'} className="delete">
                    <ReactSVG
                        path="/images/close.svg"/>
                </Link>
                <a className="logo-wrapper" href={'/' + props.bridge.slug}>
                    <img
                        className={classImage}
                        src={image}
                        alt="Project Name logo"/>
                </a>
            </div>
            <a className="label" href={'/' + props.bridge.slug}> {props.bridge.name}</a>
        </div>
    );
};

BridgeCard.propTypes = {
    bridge: PropTypes.object.isRequired
};

export default BridgeCard;
