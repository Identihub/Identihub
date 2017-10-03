import React from 'react';
import PropTypes from 'prop-types';

export const EmptySectionState = (props) => (
    <div className="empty-state">
        <div><img src="/images/logo.svg" width="50" /></div>
        <p>{props.emptyStateText}</p>
    </div>
);

EmptySectionState.propTypes = {
    emptyStateText: PropTypes.string.isRequired
};

export default EmptySectionState