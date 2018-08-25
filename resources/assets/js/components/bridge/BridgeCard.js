import React from 'react';
import PropTypes from 'prop-types';
import {Link} from 'react-router-dom';
import ReactSVG from 'react-svg';

const BridgeCard = (props) => {

    const {bridge} = props;

    let classImage = !bridge.has_thumbnail ? 'default-image' : '';

    return (
        <div className="bridge-container">
            <div className="bridge">
                <Link to={'/projects/' + bridge.id + '/delete-confirmation'} className="delete">
                    <ReactSVG
                        path="/images/close.svg"/>
                </Link>
                <a className="logo-wrapper" href={'/' + bridge.slug}>
                    <img
                        className={classImage}
                        src={bridge.thumbnail}
                        alt="Project Name logo"/>
                </a>
            </div>
            <a className="label" href={'/' + bridge.slug}> {bridge.name}</a>
        </div>
    );
};

BridgeCard.propTypes = {
    bridge: PropTypes.object.isRequired
};

export default BridgeCard;
