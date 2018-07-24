import React, {Component} from 'react';
import PropTypes from 'prop-types';
import SectionWrapper from '../SectionWrapper';
import ColorSectionRow from './ColorSectionRow';
import {getSectionType} from '../../reducers/SectionType/SectionTypeReducer';
import {connect} from 'react-redux';
import {filterSectionsWithSectionType, sortByOrder} from '../../helpers';
import renderSection from '../../HOC/renderSectionHOC'

class ColorSection extends Component {

    addColor = () => {
        this.props.history.push('/add-color');
    };

    render() {
        const {bridge, colorsSection} = this.props;
        let {colors, sections} = bridge;

        return (
            <SectionWrapper
                title="Colors"
                addResource="Add Color"
                bridge={bridge}
                sectionType={colorsSection}
                canCreateSection={true}
                onResourceClick={this.addColor}>
                {
                    sortByOrder(filterSectionsWithSectionType(sections, colorsSection)).map(function (section) {
                        return (
                            <ColorSectionRow
                                section={section}
                                key={section.id}
                                bridge={bridge}
                                colors={colors}
                                emptyStateText="No colors found here, start by adding a new color."/>
                        )
                    })
                }
            </SectionWrapper>
        );
    }

}

const mapStateToProps = (state, _) => {
    return {
        colorsSection: getSectionType(state, "COLORS")
    }
};

ColorSection.propTypes = {
    colorsSection: PropTypes.shape({
        id: PropTypes.number
    }).isRequired,
    bridge: PropTypes.shape({
        id: PropTypes.integer
    }).isRequired
};

export default renderSection('colors')(connect(mapStateToProps)(ColorSection));