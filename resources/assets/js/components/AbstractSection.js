import React, { Component } from 'react';
import PropTypes from 'prop-types';
import { bindActionCreators } from 'redux';
import {
    createSection,
    updateSectionTitle,
    updateSectionDescription
} from '../reducers/Bridge/BridgeApiCalls';

class AbstractSection extends Component {

    constructor(params) {
        super(params);

        this.state = {
            sortedSections: [],
            emptyStateText: "No branding found here."
        };

        this.createSection = this.createSection.bind(this);
        this.updateTitle = this.updateTitle.bind(this);
        this.updateDescription = this.updateDescription.bind(this);
    }

    createSection(event) {
        const bridge = this.props.bridge;
        const sectionType = this.props.sectionType;
        const createSection = this.props.createSection;
        createSection(bridge.id, sectionType.id);
        // TODO: Create a helper function for this, don't use state
        // this.setState({
        //     sortedSections: this.state.sortedSections.concat({
        //         id: Math.floor(Math.random() * 20000),
        //         title: null,
        //         description: null,
        //         bridge_id: this.state.sortedSections[0].id,
        //         section_type_id: this.state.sortedSections[0].section_type_id
        //     })
        // });
        //this.props.createSection(this.props.bridge, this.props.sectionType);

    }

    updateTitle(event, sectionId) {

        this.props.updateTitle(this.props.bridge.id, sectionId, event.target.value)
    }

    updateDescription(event, sectionId) {

        const bridge = this.props.bridge;
        this.props.updateDescription(bridge.id, sectionId, event.target.value)
    }

}

export const defaultPropTypes = {
    bridge: PropTypes.shape({
        id: PropTypes.integer
    }).isRequired
};

export const dispatchToProps = (dispatch) => {
  return bindActionCreators({
    createSection,
    updateSectionTitle,
    updateSectionDescription
  }, dispatch)
};

export default AbstractSection;