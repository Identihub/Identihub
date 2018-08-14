import React, {Component} from 'react';
import PropTypes from 'prop-types';
import SectionWrapper from '../SectionWrapper';
import {connect} from 'react-redux';
import {getSectionType} from '../../reducers/SectionType/SectionTypeReducer';
import {filterSectionsWithSectionType, sortByOrder} from '../../helpers';
import FontSectionRow from './FontSectionRow';
import EmptySectionState from '../EmptySectionState';
import renderSection from '../../HOC/renderSectionHOC';

class FontSection extends Component {

    addFont = () => {
        this.props.history.push("/add-font");
    };

    render() {
        const {bridge, fontsSection} = this.props;

        let {fonts, sections} = bridge;

        const emptyState = <EmptySectionState style={{width: "56%", marginLeft: "23%"}} soloElement={true}
                                              emptyStateText="No fonts found here, start by adding a new font"/>;

        return (
            <div className="fonts-section">
                <SectionWrapper

                    title="Fonts"
                    addResource="Add Font"
                    bridge={bridge}
                    sectionType={fontsSection}
                    canCreateSection={false}
                    onResourceClick={this.addFont}>
                    {fonts.length === 0 ? emptyState :
                        sortByOrder(filterSectionsWithSectionType(sections, fontsSection)).map(section => (
                            <FontSectionRow
                                key={section.id}
                                bridge={bridge}
                                section={section}
                                fonts={fonts}
                                emptyStateText="No Fonts found here, start by adding a new font."/>
                        ))
                    }
                </SectionWrapper>
            </div>
        );
    }

}

const mapStateToProps = (state, _) => {
    return {
        fontsSection: getSectionType(state, "FONTS")
    }
};

FontSection.propTypes = {
    fontsSection: PropTypes.shape({
        id: PropTypes.number
    }).isRequired,
    bridge: PropTypes.shape({
        id: PropTypes.integer
    }).isRequired
};

export default renderSection('fonts')(connect(mapStateToProps)(FontSection));