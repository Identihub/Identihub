import React, {Component} from 'react';
import PropTypes from 'prop-types';
import SectionWrapper from '../SectionWrapper';
import {connect} from 'react-redux';
import {getSectionType} from '../../reducers/SectionType/SectionTypeReducer';
import {filterSectionsWithSectionType, sortByOrder} from '../../helpers';
import WritingSectionRow from './WritingSectionRow';
import EmptySectionState from '../EmptySectionState';
import renderSection from '../../HOC/renderSectionHOC';

class WritingSection extends Component {

    addWriting = () => {
        this.props.history.push("/add-writing");
    };

    render() {
        const {bridge, writingsSection} = this.props;

        let {writings, sections} = bridge;

        const emptyState = <EmptySectionState style={{width: "56%", marginLeft: "23%"}} soloElement={true}
                                              emptyStateText="No texts found here, start by adding a new text"/>;

        return (
            <div className="writings-section">
                <SectionWrapper

                    title="Texts"
                    addResource="Add Text"
                    bridge={bridge}
                    sectionType={writingsSection}
                    canCreateSection={false}
                    onResourceClick={this.addWriting}
                    extraClass="no-sidebar-section">

                    {writings.length === 0 ? emptyState :
                        sortByOrder(filterSectionsWithSectionType(sections, writingsSection)).map(section => (
                            <WritingSectionRow
                                key={section.id}
                                bridge={bridge}
                                section={section}
                                writings={writings}
                                emptyStateText="No texts found here, start by adding a new text."/>
                        ))
                    }

                </SectionWrapper>
            </div>
        );
    }

}

const mapStateToProps = (state, _) => {
    return {
        writingsSection: getSectionType(state, "WRITINGS")
    }
};

WritingSection.propTypes = {
    writingsSection: PropTypes.shape({
        id: PropTypes.number
    }).isRequired,
    bridge: PropTypes.shape({
        id: PropTypes.integer
    }).isRequired
};

export default renderSection('writings')(connect(mapStateToProps)(WritingSection));