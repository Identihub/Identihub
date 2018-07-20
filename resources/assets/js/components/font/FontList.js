import React from 'react';
import PropTypes from 'prop-types';
import CSSTransitionGroup from 'react-transition-group/CSSTransitionGroup';

export const FontList = (props) => {
    return (
        <CSSTransitionGroup
            component="ul"
            transitionName="example"
            transitionEnterTimeout={500}
            transitionLeaveTimeout={300}>
            {
                props.fonts.map(font => (
                    <li key={font.id}
                        onClick={(e) => {
                            props.selectItem(font.id)
                        }}> {font.family}</li>
                ))
            }
        </CSSTransitionGroup>
    )
};

FontList.propTypes = {
    fonts: PropTypes.arrayOf(
        PropTypes.shape({
                id: PropTypes.number,
                family: PropTypes.string
            }
        )).isRequired,
    selectItem: PropTypes.func.isRequired
};

export default FontList;