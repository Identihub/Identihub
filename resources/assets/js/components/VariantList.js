import React from 'react';
import PropTypes from 'prop-types';
import CSSTransitionGroup from 'react-transition-group/CSSTransitionGroup';

export const VariantList = (props) => {
    return (
        <CSSTransitionGroup
            component="ul"
            className="variant-list"
            transitionName="example"
            transitionEnterTimeout={500}
            transitionLeaveTimeout={300}>
            {
                props.variants.map(variant => (
                    <li key={variant.id}>
                        <input
                            type="checkbox"
                            id={'variant-' + variant.id}
                            onChange={() => {props.toggleVariant(variant)}}/>
                        <label htmlFor={'variant-' + variant.id} className="checkbox"> </label>
                        <label htmlFor={'variant-' + variant.id}>
                            {variant.variant}
                        </label>

                    </li>
                ))
            }
        </CSSTransitionGroup>
    )
};

VariantList.propTypes = {
    variants: PropTypes.arrayOf(
        PropTypes.shape({
            font_id: PropTypes.number,
            id: PropTypes.number,
            variant: PropTypes.string
        })
    ),
    toggleVariant: PropTypes.func.isRequired
};

export default VariantList;