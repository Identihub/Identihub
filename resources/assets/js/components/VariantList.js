import React from 'react';
import PropTypes from 'prop-types';
import CSSTransitionGroup from 'react-transition-group/CSSTransitionGroup';

const weightToText = (weight) => {
    if(weight){
        return weight.replace('100', "Thin ")
            .replace('200', "Ultra Thin ")
            .replace('300', "Light ")
            .replace('400', "Regular ")
            .replace('500', "Medium ")
            .replace('600', "Semi Bold ")
            .replace('700', "Bold ")
            .replace('800', "Ultra Bold ")
            .replace('900', "Black ");
    }
    return weight;
};

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
                            {weightToText(variant.variant)}
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