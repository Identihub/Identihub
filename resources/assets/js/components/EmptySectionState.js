import React from 'react';
import PropTypes from 'prop-types';

export const EmptySectionState = (props) => {
    let style = "empty-state";
    if(props.soloElement){
        style += " solo";
    }
    return (
        <div className={style}>
            <div><img src="/images/logo.svg" width="50" /></div>
            <p>{props.emptyStateText}</p>
        </div>
    )
};

EmptySectionState.propTypes = {
    emptyStateText: PropTypes.string.isRequired
};

export default EmptySectionState